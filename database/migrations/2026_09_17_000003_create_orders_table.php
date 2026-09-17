<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('order_code')->unique();

            $table->foreignId('game_id')
                ->constrained('games');

            $table->foreignId('product_id')
                ->constrained('products');

            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('player_id');
            $table->string('server_id')->nullable();

            $table->decimal('amount', 12, 2);

            $table->enum('status', [
                'pending',
                'paid',
                'processing',
                'success',
                'failed',
                'cancelled'
            ])->default('pending');

            $table->string('provider_reference')->nullable();
            $table->text('provider_response')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
