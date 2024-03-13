<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">

<header class="bg-gray-900 text-white py-4 text-center">
  <h1>Hello, this is laravel CSS home</h1>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Me</a></li>
      <li><a href="#">Dashboard</a></li>
    </ul>
  </nav>
</header>

<div class="container mx-auto mt-8 flex justify-center">
    <img src="{{ asset('gambar/david de gea.JPEG') }}" alt="Laravel" width="300" class="mr-4">
    <img src="{{ asset('gambar/david de gea1.JPEG') }}" alt="Laravel" width="300">
</div>

</body>
</html>

