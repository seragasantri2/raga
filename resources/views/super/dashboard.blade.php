@extends('layouts.super')
@section('content')

  
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

    
    @endsection