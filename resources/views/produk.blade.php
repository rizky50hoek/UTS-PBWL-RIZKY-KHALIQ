<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">

        <!-- Header atas -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">UTS Laravel</h1>
            <a href="#" class="btn btn-success">+ Tambah Produk</a>
        </div>

        <h2 class="text-center mb-4">Halaman Produk</h2>

        @php
            $produk = [
                ['kode' => 'BRG001', 'nama' => 'Pensil', 'jenis' => 'Alat Tulis', 'harga' => 2000],
                ['kode' => 'BRG002', 'nama' => 'Buku', 'jenis' => 'Alat Tulis', 'harga' => 10000],
                ['kode' => 'BRG003', 'nama' => 'Penggaris', 'jenis' => 'Alat Tulis', 'harga' => 3000],
            ];
        @endphp

        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Jenis Produk</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($produk); $i++)
                    <tr>
                        <td>{{ $produk[$i]['kode'] }}</td>
                        <td>{{ $produk[$i]['nama'] }}</td>
                        <td>{{ $produk[$i]['jenis'] }}</td>
                        <td>{{ $produk[$i]['harga'] }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>

        <div class="text-center mt-3">
            <a href="/" class="btn btn-primary">Kembali ke Home</a>
        </div>
    </div>
</body>
</html>
