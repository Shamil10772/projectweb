<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nama Website Anda</title>
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
  <header>
    <div class="logo">
      <img src="logo.png" alt="Logo Website">
    </div>
    <nav>
      <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Tentang Kami</a></li>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <li><a href="#">Layanan</a></li>
        <li><a href="#">Kontak</a></li>
        <li><a href="#">Menu Lainnya</a></li>
      </ul>
    </nav>
  </header>
  <footer>
  </footer>
</body>
</html>
