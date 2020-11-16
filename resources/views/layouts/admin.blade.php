
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css')}}">
    @yield('css')
    <script src="https://kit.fontawesome.com/a1bc18a4b6.js" crossorigin="anonymous"></script>

    <title>Back-end</title>
  </head>
  <body>
  

    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>TokoKami</b></a>
      
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="icon ml-4">
          <h5>
            <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Pesan Masuk" ></i>
            <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
          </h5>
        </div>
      </div>
      <!-- Example split danger button -->
      <div class="btn-group">
        <a  href="/profil/{{Auth::user()->id}}" class="btn btn-warning"><i class="fas fa-user mr-2"></i><b>{{Auth::User()->getFullname()}}</b></a>
        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Profil</a>
          <a class="dropdown-item" href="#">Pengaturan</a>
          <a class="dropdown-item" href="#">Bantuan</a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                  </form>
        </div>
      </div>
    </nav>
      
    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="/home"> <i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
        </li>

        <li class="nav-item">
          <!-- Example split danger button -->
          <div class="btn-group">
            <a class="btn btn-dark" href="/product"> <i class="fas fa-book-open mr-2"></i> Produk</a>
            <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/product">Daftar Produk</a>
              <a class="dropdown-item" href="/category">Daftar Category</a>              
            </div>
          </div>
          <hr class="bg-secondary">
        </li>

        <li class="nav-item">
          <!-- Example split danger button -->
          <div class="btn-group">
            <a  class="btn btn-dark" href="/user"> <i class="fas fa-user mr-2"></i> Daftar User</a>
            <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/user">User Biasa</a>
              <a class="dropdown-item" href="/daftarreseller">Reseller</a>
              <a class="dropdown-item" href="/daftaradmin">Admin</a>
              
            </div>
          </div>
          <hr class="bg-secondary">
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white" href="/jadwal"> <i class="fas fa-calendar-alt mr-2"></i> Jadwal Promo</a><hr class="bg-secondary">
        </li>
             
  
        <li class="nav-item">
          <!-- Example split danger button -->
          <div class="btn-group">
            <a href="/admin/artikel" class="btn btn-dark"> <i class="fas fa-book-open mr-2"></i> Artikel</a>
            <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu"> 
              <a class="dropdown-item" href="/admin/kategoriartikel">Kategori Artikel</a>
              <a class="dropdown-item" href="/admin/Tartikel">Tag Artikel</a>
              <a class="dropdown-item" href="/admin/artikel">POS Artikel</a>
              
            </div>
          </div>
          <hr class="bg-secondary">
        </li>



        
      </ul>
      <div class="bgr bg-dark">
        
      </div>
        
      </div>  
        @yield('content')
    </div>
   

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/admin.js')}}"></script>
    @yield('js')
  </body>
</html>