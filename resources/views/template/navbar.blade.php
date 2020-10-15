<nav class="main-header navbar navbar-expand navbar-warning navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-auto">
      <div class="input-group input-group-sm">
        <input name="search" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    
    <div class="icon ml-4 ">
          <h5>
            <a href="" class="text-dark"><i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Pesan Masuk" ></i></a>
            <a href="" class="text-dark"> <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i></a>
            <a href="{{ route('logout') }}" class="text-dark" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Keluar"></i></a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none text">
                  @csrf
              </form>
          </h5>
    </div>

    <!-- Right navbar links -->

    </ul> 
  </nav>