<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Odeyo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>

  {{-- BOOSTSTRAP ICON --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


  {{-- My Style --}}
  <link rel="stylesheet" href="/css/style.css">


  <body>

    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>
    <p>Odeyo.id adalah sebuah situs web e-commerce yang dibuat agar bisa digunakan oleh semua pelaku usaha yang ingin membuka tokonya secara online/digital.<br> 
    Situs web ini juga dilengkapi dengan beberapa fitur yang nantinya akan memudahkan costumer dalam melakukan pencarian dan juga pembelian barang yang mereka inginkan.<br>
    Adapun fitur proses trsansaksi penjualan yang dimana bertujuan untuk para pelaku usaha agar dapat dengan mudah menghitung list transaksi dari customer tanpa mereka harus melakukan perhitungan secara manual.

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
  <marquee><font size="100" color="red">Kelompok 2</marquee>
</html>