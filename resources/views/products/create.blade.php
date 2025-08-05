<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
    
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    
</head>
<body>

    <div class="container">
        <h2>Tambah Produk</h2>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nama Produk:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div>
                <label for="description">Deskripsi:</label>
                <textarea id="description" name="description" rows="3"></textarea>
            </div>

            <div>
                <label for="price">Harga:</label>
                <input type="number" id="price" name="price" required>
            </div>

            <button type="submit">Simpan</button>
            <a href="{{ route('products.index') }}">Kembali</a>
        </form>
    </div>

</body>
</html>