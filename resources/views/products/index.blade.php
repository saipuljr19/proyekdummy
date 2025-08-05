@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">

<div class="product-container">
    <div class="product-header">
        <h2>📦 Daftar Produk</h2>
        <a href="{{ route('products.create') }}" class="btn-add">+ Tambah Produk</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th style="text-align:center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><strong>{{ $product->name }}</strong></td>
                <td>{{ $product->description }}</td>
                <td style="color:green; font-weight:bold;">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </td>
                <td style="text-align:center;">
                    <a href="{{ route('products.edit', $product) }}" class="btn-sm btn-edit">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" 
                          style="display:inline;" 
                          onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-sm btn-delete">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" style="text-align:center; padding: 20px; color:#6b7280;">
                    Tidak ada produk tersedia.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection