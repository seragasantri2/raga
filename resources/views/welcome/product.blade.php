@extends('layouts.welcomee')

@section('content')
    <div class="content">
  <div class="container">
    <div class="row">

        <div class="col-lg-12">
          <div class="item-list">
          <h2>Our Products</h2>
          <hr style="margin-bottom: 2em;">
          <div class="row list-product mb-2">
         @foreach($product as $p)
                           
          <div class=" card mr-2 ml-2 mt-2" style="width: 16rem;">
              <img src="{{asset('storage/images/products/'.$p->image)}}" class="card-img-top" alt="...">
                        
              <div class="card-body bg-light">
                 <h5 class="card-title">{{$p->nama}}</h5>
                 <br>
                 <p class="card-text">Tersedia Berbagai Ukuran</p>
                 <i class="fas fa-star text-warning"></i>
                 <i class="fas fa-star text-warning"></i>
                 <i class="fas fa-star text-warning"></i>
                 <i class="fas fa-star text-warning"></i>
                 <i class="fas fa-star text-warning"></i>
                 <br>
                 <a href="/detail/{{$p->id}}" class="btn btn-primary">Detail</a>
                 <a href="#" class="btn btn-danger">Rp. {{number_format($p->harga,0,',','.')}}</a>
             </div>
          </div>
         @endforeach
          </div>
        </div>
  
        
      </div>
    </div>
  </div>

</div>
@endsection