@extends('layouts.admin')
@section('content')

  <link rel="stylesheet" href="{{asset('css/admin.css')}}">  
<div>

</div>
    <div class="col-md p-5 pt-2">
    <h3><i class="fas fa-tachometer-alt"></i> DASHBOARD </h3><hr>
    
    <div class="row text-white">
    @foreach($products as $produk)
          <div class="card bg-info ml-5 mt-5" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-shopping-basket mr-2 ml-5"></i>
              <i class="fas fa-shopping-basket"></i>
            </div> 
            
            <h5 class="card-title">Jumlah Produk</h5>
            <div class="display-4">{{$produk->count()}}</div>
            <a href="/product"><p class="card-text text-white">Lihat Detail <i class=" fas fa-angle-double-right"></i></p></a>
          </div>
      @endforeach
        </div>
        

        @foreach($users as $user)
        <div class="card bg-success ml-5 mt-5" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-user mr-2"></i>
              <i class="fas fa-user ml-3 mr-2"></i>
            </div>
            <h5 class="card-title">Jumlah User</h5>
            <div class="display-4">{{ $users->total_user }}</div>
            <a href=""><p class="card-text text-white">Lihat Detail <i class=" fas fa-angle-double-right"></i></p></a>
          </div>
        </div>
        
        <div class="card bg-warning ml-5 mt-5" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-user mr-2"></i>
              <i class="fas fa-user ml-3 mr-2"></i>
            </div>
            <h5 class="card-title">Jumlah Reseller</h5>
            <div class="display-4">{{ $reseller->total_reseller }}</div>
            <a href=""><p class="card-text text-white">Lihat Detail <i class=" fas fa-angle-double-right"></i></p></a>
          </div>
        </div>

      
        <div class="card bg-danger ml-5 mt-5" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-user mr-2"></i>
              <i class="fas fa-user ml-3 mr-2"></i>
            </div>
            <h5 class="card-title">Jumlah Admin</h5>
            <div class="display-4">{{ $admin->total_admin }}</div>
            <a href=""><p class="card-text text-white">Lihat Detail <i class=" fas fa-angle-double-right"></i></p></a>
          </div>
        </div>
        </div>
    </div>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      <script type="text/javascript" src="{{ asset('js/admin.js')}}"></script>
    @endsection