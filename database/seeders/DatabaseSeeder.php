<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $mobileLegends = Game::create([
            'name' => 'Mobile Legends',
            'slug' => 'mobile-legends',
            'is_active' => true,
        ]);

        $freeFire = Game::create([
            'name' => 'Free Fire',
            'slug' => 'free-fire',
            'is_active' => true,
        ]);

        $pubgMobile = Game::create([
            'name' => 'PUBG Mobile',
            'slug' => 'pubg-mobile',
            'is_active' => true,
        ]);

        Product::create([
            'game_id' => $mobileLegends->id,
            'name' => '86 Diamonds',
            'code' => 'ML86',
            'price' => 20000,
            'is_active' => true,
        ]);

        Product::create([
            'game_id' => $mobileLegends->id,
            'name' => '172 Diamonds',
            'code' => 'ML172',
            'price' => 40000,
            'is_active' => true,
        ]);

        Product::create([
            'game_id' => $freeFire->id,
            'name' => '70 Diamonds',
            'code' => 'FF70',
            'price' => 10000,
            'is_active' => true,
        ]);

        Product::create([
            'game_id' => $freeFire->id,
            'name' => '140 Diamonds',
            'code' => 'FF140',
            'price' => 20000,
            'is_active' => true,
        ]);

        Product::create([
            'game_id' => $pubgMobile->id,
            'name' => '60 UC',
            'code' => 'PUBG60',
            'price' => 15000,
            'is_active' => true,
        ]);

        Product::create([
            'game_id' => $pubgMobile->id,
            'name' => '325 UC',
            'code' => 'PUBG325',
            'price' => 75000,
            'is_active' => true,
        ]);
    }
}
