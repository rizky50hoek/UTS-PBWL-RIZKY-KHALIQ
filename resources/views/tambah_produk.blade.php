<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">UTS Laravel</h4>
        </div>

        <h2 class="text-center mb-4">Form Tambah Produk</h2>

        <form>
            <div class="row mb-3">
                <div class="col">
                    <label for="kode" class="form-label">Kode Produk</label>
                    <input type="text" id="kode" name="kode" class="form-control" placeholder="Input Kode Produk">
                </div>
                <div class="col">
                    <label for="nama" class="form-label">Nama Produk</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Input Nama Produk">
                </div>
                <div class="col">
                    <label for="jenis" class="form-label">Jenis Produk</label>
                    <select id="jenis" name="jenis" class="form-select">
                        <option selected>Pilih Produk</option>
                        @for ($i = 0; $i < count($jenis); $i++)
                            <option>{{ $jenis[$i] }}</option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" id="harga" name="harga" class="form-control" placeholder="Input Harga">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="/produk" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
