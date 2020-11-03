<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <link rel="stylesheet" href="{{ asset('css/product.css')}}">

   <script src="https://kit.fontawesome.com/a1bc18a4b6.js" crossorigin="anonymous"></script>

    <title>Cari Produkmu</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top ml-auto">
        <div class="container">
    <a class="navbar-brand font-weight-bold" href="#">TOKOKAMI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mr-2"> 
      <li class="nav-item active">
        <a class="nav-link" ><b>|| Nama: {{Auth::user()->getFullname()}} || </b><span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto ml-4"> 
      <li class="nav-item active ml-auto">
        <a class="nav-link" href="/users"><b> Produk </b><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users/blog"><b>Blog</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users/kontak"><b>Kontak</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users/pusatbantuan"><b>Pusat Bantuan</b></a>
      </li>
        <li class="nav-item active">
        <a href="{{ route('logout') }}" class="nav-link text-dark" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
            </form>
        </li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <div class="icon mt-2 mr-3">
        <h5>
          <i class="fas fa-cart-plus ml-3 mr-3" data-toggle="tooltip" title="Keranjangmu"></i>
          <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Kotak Masuk"></i>
          <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
        </h5>
      </div>
    </div>
    </div>
  </nav>




   @yield('content')
  </div>
</div>

  <footer class="bg-dark text-white p-5 mt-4">
    <div class="row">

      <div class="col-md-3">
        <h5>TokoKami</h5>
        <ul>
          <li>Tentang Kami</li> 
          <li>Partner Kami</li>
          <li>Blog</li>
        </ul>
      </div>

      <div class="col-md-3">
        <h5>Layanan</h5>
        <ul>
          <li>Fitur Lengkap</li>
          <li>Paket</li>
          <li>Testimoni</li>
          <li>Cara Pembelian</li>
          <li>Pengiriman</li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Mitra Kejasama</h5>
        <ul>
          <li>Gojek</li>
          <li>Grab</li>
          <li>JNE</li>
          <li>Pos Indonesia</li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Bantuan</h5>
        <ul>
          <li>Pusat Bantuan</li>
          <li>Syarat Dan Ketentuan</li>
          <li>Kebijakan Privasi</li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Hubungi Kami</h5>
        <li>Email: Azhar.ananda@ymail.com</li>
        <li>021-83791425</li>
      </div>
    </div>
  </footer>
  <div class="copyright text-center text-white font-weight-bold bg-warning p-2">
    <p>TokoKami By Muhammad Azhar Fernanda Copyright <i class="far fa-copyright"></i>2020 </p>
  </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/product.js')}}"></script>
  </body>
</html>