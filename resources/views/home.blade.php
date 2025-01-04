@extends('layouts.app')

@section('content')
<div class="text-center">
    <!-- Slider Section -->
    <div class="relative w-full mx-auto overflow-hidden">
        <div class="flex transition-transform duration-500 ease-in-out" id="promo-slider">
            <div class="w-1/3 flex-shrink-0 promo-slide">
                <img src="{{ asset('assets/promo/promo1.png') }}" alt="Promo 1" class="w-full h-60 object-cover rounded-lg">
            </div>
            <div class="w-1/3 flex-shrink-0 promo-slide">
                <img src="{{ asset('assets/promo/promo2.png') }}" alt="Promo 2" class="w-full h-60 object-cover rounded-lg">
            </div>
            <div class="w-1/3 flex-shrink-0 promo-slide">
                <img src="{{ asset('assets/promo/promo3.png') }}" alt="Promo 3" class="w-full h-60 object-cover rounded-lg">
            </div>
            <div class="w-1/3 flex-shrink-0 promo-slide">
                <img src="{{ asset('assets/promo/promo4.png') }}" alt="Promo 4" class="w-full h-60 object-cover rounded-lg">
            </div>
        </div>
        <div class="absolute inset-0 flex items-center justify-between">
            <button class="bg-[#000000] text-white p-2 rounded-full" onclick="prevSlide()">&#10094;</button>
            <button class="bg-[#000000] text-white p-2 rounded-full" onclick="nextSlide()">&#10095;</button>
        </div>
    </div>

    <!-- Navigation Section -->
    <div class="mt-8 flex justify-center space-x-4">
        <a href="#popular-games" class="border border-black text-black py-1 px-2 w-40 rounded-full hover:bg-[#FB2576] transition">🔥Lagi Populer🔥</a>
        <a href="#game-mobile" class="border border-black text-black py-1 px-2 w-40 rounded-full hover:bg-[#FB2576] transition">Game Mobile</a>
        <a href="#game-pc" class="border border-black text-black py-1 px-2 w-40 rounded-full hover:bg-[#FB2576] transition">Game PC</a>
        <a href="#baru-rilis" class="border border-black text-black py-1 px-2 w-40 rounded-full hover:bg-[#FB2576] transition">🌟Baru Rilis🌟</a>
        <a href="#game-vouchers" class="border border-black text-black py-1 px-2 w-40 rounded-full hover:bg-[#FB2576] transition">Voucher</a>
    </div>

    <!-- Popular Games Section -->
    <div id="popular-games" class="mt-12">
        <h2 class="text-2xl font-bold text-[#150050]">🔥Lagi Populer🔥</h2>
        <div class="mt-4 grid grid-cols-6 md:grid-cols-6 gap-6">
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/mobile-legend.jpg') }}" alt="Mobile Legend" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Mobile Legend</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/pubg-mobile.png') }}" alt="PUBG Mobile" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">PUBG Mobile</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/free-fire.jpg') }}" alt="Free Fire" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Free Fire</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/genshin-impact.jpg') }}" alt="Genshin Impact" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Genshin Impact</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
            <!-- Add more game items here -->
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
        </div>
    </div>

    <!-- Game Mobile Section -->
    <div id="game-mobile" class="mt-12">
        <h2 class="text-2xl font-bold text-[#150050]">Game Mobile</h2>
        <div class="mt-4 grid grid-cols-6 md:grid-cols-6 gap-6">
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/mobile-legend.jpg') }}" alt="Mobile Legend" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Mobile Legend</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/pubg-mobile.png') }}" alt="PUBG Mobile" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">PUBG Mobile</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/free-fire.jpg') }}" alt="Free Fire" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Free Fire</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/genshin-impact.jpg') }}" alt="Genshin Impact" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Genshin Impact</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
            <!-- Add more game items here -->
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
        </div>
</div>

    <!-- Game PC Section -->
    <div id="game-pc" class="mt-12">
        <h2 class="text-2xl font-bold text-[#150050]">Game Mobile</h2>
        <div class="mt-4 grid grid-cols-6 md:grid-cols-6 gap-6">
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/mobile-legend.jpg') }}" alt="Mobile Legend" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Mobile Legend</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/pubg-mobile.png') }}" alt="PUBG Mobile" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">PUBG Mobile</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/free-fire.jpg') }}" alt="Free Fire" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Free Fire</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/genshin-impact.jpg') }}" alt="Genshin Impact" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Genshin Impact</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
            <!-- Add more game items here -->
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
        </div>
</div>

    <!-- Baru Rilis Section -->
    <div id="baru-rilis" class="mt-12">
        <h2 class="text-2xl font-bold text-[#150050]">🌟Baru Rilis🌟</h2>
        <div class="mt-4 grid grid-cols-6 md:grid-cols-6 gap-6">
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/mobile-legend.jpg') }}" alt="Mobile Legend" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Mobile Legend</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/pubg-mobile.png') }}" alt="PUBG Mobile" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">PUBG Mobile</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/free-fire.jpg') }}" alt="Free Fire" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Free Fire</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/genshin-impact.jpg') }}" alt="Genshin Impact" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Genshin Impact</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
            <!-- Add more game items here -->
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
        </div>
</div>

    <!-- Game Vouchers Section -->
    <div id="game-vouchers" class="mt-12">
        <h2 class="text-2xl font-bold text-[#150050]">Game Voucher</h2>
        <div class="mt-4 grid grid-cols-6 md:grid-cols-6 gap-6">
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/mobile-legend.jpg') }}" alt="Mobile Legend" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Mobile Legend</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/pubg-mobile.png') }}" alt="PUBG Mobile" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">PUBG Mobile</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/free-fire.jpg') }}" alt="Free Fire" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Free Fire</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/genshin-impact.jpg') }}" alt="Genshin Impact" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Genshin Impact</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
            <!-- Add more game items here -->
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
            <a href="#" class="flex flex-col items-center bg-[#3F0071] p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-700 ease-in-out transform hover:scale-110">
                <img src="{{ asset('assets/games/hok.jpg') }}" alt="Honor of Kings" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-white font-semibold">Honor of Kings</span>
            </a>
        </div>
</div>

<script>
    let currentSlide = 1; // Start with the second slide as the center
    const slides = document.querySelectorAll('.promo-slide');
    const totalSlides = slides.length;

    function updateSlides() {
        slides.forEach((slide, index) => {
            slide.style.opacity = '0.5';
            slide.style.transform = 'scale(0.8)';
            if (index === currentSlide) {
                slide.style.opacity = '1';
                slide.style.transform = 'scale(1)';
            }
        });
    }

    function showSlide(index) {
        const slider = document.getElementById('promo-slider');
        slider.style.transition = 'transform 0.5s ease-in-out';
        slider.style.transform = `translateX(-${(index - 1) * 33.33}%)`; // Center the current slide
        updateSlides();
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    setInterval(nextSlide, 5000); // Auto-slide every 5 seconds
    updateSlides(); // Initial update
</script>
@endsection