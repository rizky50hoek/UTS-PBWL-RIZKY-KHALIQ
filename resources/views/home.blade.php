<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS Laravel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container {
      display: flex;
      justify-content: space-between;
      margin-top: 30px;
    }
    .content {
      flex: 1;
      text-align: left;
      padding-left: 20px;
    }
    .sidebar {
      width: 200px;
      border-left: 1px solid #ccc;
      padding-left: 20px;
    }
    .sidebar a {
      display: block;
      text-decoration: none;
      color: black;
      margin-bottom: 8px;
    }
    .sidebar input {
      width: 100%;
      margin-top: 5px;
      padding: 5px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">UTS Laravel</a>
  </div>
</nav>

<div class="container">
  <div class="content">
    <h1>Halaman Home</h1>
  </div>

  <div class="sidebar">
    <a href="#">Home</a>
    <a href="#">Produk</a>
    <input type="text" placeholder="Search">
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
