@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">

<div class="edit-container">
    <h2>✏️ Edit Produk</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" class="edit-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama Produk:</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea id="description" name="description" rows="3">{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Harga:</label>
            <input type="number" id="price" name="price" value="{{ $product->price }}" required>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-submit">Update</button>
            <a href="{{ route('products.index') }}" class="btn-cancel">Batal</a>
        </div>
    </form>
</div>
@endsection
