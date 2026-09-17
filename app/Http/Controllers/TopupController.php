<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TopupController extends Controller
{
    public function process(Request $request)
    {
        $validated = $request->validate([
            'game' => ['required', 'string', 'exists:games,slug'],
            'id' => ['required', 'string', 'max:100'],
            'server_id' => ['nullable', 'string', 'max:100'],
            'product_id' => ['required', 'integer', 'exists:products,id'],
        ]);

        $game = Game::where('slug', $validated['game'])
            ->where('is_active', true)
            ->firstOrFail();

        $product = Product::where('id', $validated['product_id'])
            ->where('game_id', $game->id)
            ->where('is_active', true)
            ->firstOrFail();

        $order = Order::create([
            'order_code' => 'ZN-' . now()->format('YmdHis') . '-' . strtoupper(Str::random(5)),
            'game_id' => $game->id,
            'product_id' => $product->id,
            'user_id' => auth()->id(),
            'player_id' => $validated['id'],
            'server_id' => $validated['server_id'] ?? null,
            'amount' => $product->price,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('topup.success')
            ->with('order_code', $order->order_code);
    }
}
