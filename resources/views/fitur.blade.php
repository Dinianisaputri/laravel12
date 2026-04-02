@extends('layouts.tailwind')

@section('title', 'Fitur')

@section('content')
<section class="py-16">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">
                Fitur Fixla
            </h2>
            <p class="text-gray-500 mt-2">
                Solusi pelaporan jalan rusak yang cepat dan mudah
            </p>
        </div>

        <!-- Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-xl hover:-translate-y-1 transition duration-300">
                <div class="text-blue-500 text-4xl mb-4">📍</div>
                <h3 class="text-xl font-semibold mb-2">Laporan Lokasi</h3>
                <p class="text-gray-500 text-sm">
                    Kirim laporan dengan titik lokasi akurat menggunakan peta.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-xl hover:-translate-y-1 transition duration-300">
                <div class="text-green-500 text-4xl mb-4">📸</div>
                <h3 class="text-xl font-semibold mb-2">Upload Foto</h3>
                <p class="text-gray-500 text-sm">
                    Tambahkan bukti foto kondisi jalan rusak.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-xl hover:-translate-y-1 transition duration-300">
                <div class="text-yellow-500 text-4xl mb-4">📊</div>
                <h3 class="text-xl font-semibold mb-2">Tracking Status</h3>
                <p class="text-gray-500 text-sm">
                    Pantau perkembangan laporan secara real-time.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-xl hover:-translate-y-1 transition duration-300">
                <div class="text-red-500 text-4xl mb-4">⚡</div>
                <h3 class="text-xl font-semibold mb-2">Respon Cepat</h3>
                <p class="text-gray-500 text-sm">
                    Laporan langsung diteruskan untuk penanganan cepat.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-xl hover:-translate-y-1 transition duration-300">
                <div class="text-purple-500 text-4xl mb-4">🔒</div>
                <h3 class="text-xl font-semibold mb-2">Data Aman</h3>
                <p class="text-gray-500 text-sm">
                    Data pengguna dijaga dengan sistem keamanan.
                </p>
            </div>

        </div>

    </div>
</section>
@endsection