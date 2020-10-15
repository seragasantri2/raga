<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/admin.css">
    <script src="https://kit.fontawesome.com/a1bc18a4b6.js" crossorigin="anonymous"></script>

    <title>Back-end</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="/home">SELAMAT DATANG ADMIN | <b>TokoKami</b></a>
      
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="icon ml-4">
          <h5>
          <a href="" class="text-dark"><i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Pesan Masuk" ></i></a>
            <a href="" class="text-dark"> <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i></a>
            <a href="{{ route('logout') }}" class="text-dark" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Keluar"></i></a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none text">
                  @csrf
              </form>
          </h5>
        </div>
      </div>
    </nav>

    <div class="row no-gutters mt-5 main-sidebar">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="/home"> <i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/product"> <i class="fas fa-book-open mr-2"></i> Daftar Produk</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/user"><i class="fas fa-user mr-2"></i> Daftar User</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/daftaradmin"> <i class="fas fa-user mr-2"></i> Daftar Admin</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/jadwal"> <i class="fas fa-calendar-alt mr-2"></i> Jadwal Promo</a><hr class="bg-secondary">
        </li>
        
      </ul>
        
      </div>
      @yield('content')
    </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../css/admin.js"></script>
  </body>
</html>