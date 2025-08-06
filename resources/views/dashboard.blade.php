@extends('layouts.app')

@section('content')
    <div class="py-12 bg-gray-100 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Selamat datang, {{ Auth::user()->name }}!</h1>
                <p class="mt-2 text-gray-600 dark:text-gray-200">Kamu berhasil login ke sistem manajemen produk.</p>
            </div>

            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow">
                    <h3 class="text-sm font-medium text-gray-700 dark:text-gray-100">Total Produk</h3>
                    <p class="mt-1 text-3xl font-bold text-blue-600 dark:text-blue-400">125</p>
                </div>
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow">
                    <h3 class="text-sm font-medium text-gray-700 dark:text-gray-100">Pengguna</h3>
                    <p class="mt-1 text-3xl font-bold text-green-600 dark:text-green-400">35</p>
                </div>
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow">
                    <h3 class="text-sm font-medium text-gray-700 dark:text-gray-100">Aktivitas Hari Ini</h3>
                    <p class="mt-1 text-3xl font-bold text-yellow-600 dark:text-yellow-400">18</p>
                </div>
            </div>

            
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-xl sm:rounded-lg p-6 mt-6">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Navigasi Cepat</h2>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('products.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow">
                        Lihat Produk
                    </a>
                    <a href="{{ route('products.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded shadow">
                        Tambah Produk
                    </a>
                    <a href="{{ route('profile.edit') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded shadow">
                        Edit Profil
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
