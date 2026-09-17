@extends('layouts.app')

@section('title', 'Top Up - ZonaNation')

@section('content')

<div>
    <h2 class="text-2xl font-bold mb-4">
        Top-Up Game
    </h2>

    <form action="{{ route('topup.process') }}" method="POST"
          class="bg-white p-6 rounded shadow-md">

        @csrf

        {{-- Pilih Game --}}
        <div class="mb-4">
            <label for="game" class="block text-gray-700 mb-2">
                Pilih Game
            </label>

            <select id="game" name="game"
                    class="w-full border border-gray-300 rounded p-2"
                    required>

                <option value="">-- Pilih Game --</option>

                <option value="mobile-legends">
                    Mobile Legends
                </option>

                <option value="free-fire">
                    Free Fire
                </option>

                <option value="pubg-mobile">
                    PUBG Mobile
                </option>

            </select>
        </div>

        {{-- ID Pemain --}}
        <div class="mb-4">
            <label for="id" class="block text-gray-700 mb-2">
                ID Pemain
            </label>

            <input
                type="text"
                id="id"
                name="id"
                placeholder="Masukkan ID pemain"
                class="w-full border border-gray-300 rounded p-2"
                required
            >
        </div>

        {{-- Server ID --}}
        <div class="mb-4">
            <label for="server_id" class="block text-gray-700 mb-2">
                Server ID
            </label>

            <input
                type="text"
                id="server_id"
                name="server_id"
                placeholder="Masukkan Server ID jika diperlukan"
                class="w-full border border-gray-300 rounded p-2"
            >
        </div>

        {{-- Produk --}}
        <div class="mb-4">
            <label for="product_id" class="block text-gray-700 mb-2">
                Pilih Nominal
            </label>

            <select
                id="product_id"
                name="product_id"
                class="w-full border border-gray-300 rounded p-2"
                required
            >

                <option value="">
                    -- Pilih Nominal --
                </option>

                {{-- Mobile Legends --}}
                <option value="1">
                    Mobile Legends - 86 Diamonds
                </option>

                <option value="2">
                    Mobile Legends - 172 Diamonds
                </option>

                {{-- Free Fire --}}
                <option value="3">
                    Free Fire - 70 Diamonds
                </option>

                <option value="4">
                    Free Fire - 140 Diamonds
                </option>

                {{-- PUBG Mobile --}}
                <option value="5">
                    PUBG Mobile - 60 UC
                </option>

                <option value="6">
                    PUBG Mobile - 325 UC
                </option>

            </select>
        </div>

        {{-- Tombol --}}
        <button
            type="submit"
            class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600"
        >
            Buat Pesanan
        </button>

    </form>
</div>

@endsection
