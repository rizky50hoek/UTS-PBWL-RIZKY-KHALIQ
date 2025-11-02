<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">UTS Laravel</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Form Tambah Produk</h2>

        <form>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="kode" class="form-label">Kode Produk</label>
                    <input type="text" class="form-control" id="kode" placeholder="Input Kode Produk">
                </div>
                <div class="col-md-4">
                    <label for="nama" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama" placeholder="Input Nama Produk">
                </div>
                <div class="col-md-4">
                    <label for="jenis" class="form-label">Jenis Produk</label>
                    <select class="form-select" id="jenis">
                        <option selected>Pilih Produk</option>
                        @for ($i = 0; $i < count($jenis); $i++)
                            <option>{{ $jenis[$i] }}</option>
                        @endfor
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" placeholder="Input Harga">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="/produk" class="btn btn-secondary ms-2">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
