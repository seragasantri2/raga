<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    @yield('css')
    <script src="https://kit.fontawesome.com/a1bc18a4b6.js" crossorigin="anonymous"></script>

    <title> Cari dan Temukan Baju Kesukaanmu</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="{{asset('img/Logobaju1.jpg')}}">
  <a class="navbar-brand" href="home1.html"><b>Baju.id</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-5">
      <li class="nav-item active">
        <a class="nav-link" href="/users"><b> Produk </b><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/blog"><b>Blog</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kontak"><b>Kontak</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pusatbantuan"><b>Pusat Bantuan</b></a>
      </li>
          <li>
        <a class="nav-link" href="{{route('login')}}"><b>Login</b></a>
      </li>
      <li>
        <a class="nav-link" href="{{route('register')}}"><b>Daftar Gratis</b></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      
     
    
    <div class="icon mt-2 ml-auto mr-5">
        <h5>
          <i class="fas fa-cart-plus ml-5 mr-3" data-toggle="tooltip" title="Keranjangmu"></i>
          <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Kotak Masuk"></i>
          <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
        </h5>
        
      </div>
  </div>
</nav>
    @yield('content')

   
    <footer class="bg-secondary text-white mt-5 p-5">
    <div class="row">

      <div class="col-sm-3">
        <h5>Links</h5>
        <ul>
          <li><a class="text-white" href="about.html">Tentang Kami</a></li>
          <li><a class="text-white" href="partner.html">Partner Kami</a></li>
          <li><a class="text-white" href="kontak.html">Kontak Kami</a></li>
          <li><a class="text-white" href="kebijakan.html">Kebijakan</a></li>
          <li><a class="text-white" href="faq.html">FAQ</a></li>
          <li><a class="text-white" href="syarat.html">Syarat dan ketentuan</a></li>
        </ul>
      </div>

      <div class="col-sm-3">
        <h5><b>Baju.id</b></h5>
        <p>Kami berdedikasi untuk menyediakan Berbagai Macam pilihan Baju setiap harinya dengan harga yang terbaik.</p>
      </div>
      <div class="col-sm-5">
        <h5>Dapatkan info terbaru dan promo menarik dari kami</h5>
        <label for="Alamat Email">Alamat Email</label>
        <input type="text" name="Alamat Email" id="Alamat Email">
        <button type="button" class="btn btn-dark">Daftar</button>
      </div>

      
    </div>
  </footer>
  <div class="copyright text-center text-secondary font-weight-bold bg-light p-2">
    <p><i class="far fa-copyright"></i>2020 <b>Baju.id</b> Owned By Pt.Trans Buana Mandiri  </p>
  </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>