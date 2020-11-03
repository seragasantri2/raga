@extends('layouts.user')
@section('content')

<div class="row mt-5 no-gutters">
<div class="col-md-2 bg-light">
    
    <ul class="list-group list-group-flush p-2 pt-4">
      <li class="list-group-item bg-warning"><i class="fas fa-list"></i>  KATEGORI PRODUK</li>
      @foreach($category as $c)
      <li class="list-group-item"> <a href="/category/{{$c->id}}" class="text-dark"><i class="fas fa-angle-right"></i> {{$c->nama}}</a></li>
      @endforeach
    </ul>

  </div>
 

<div class="col-md-10">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('image/produk/slide1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('image/produk/slide2.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('image/produk/slide3.jpg')}}" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <h4 class="text-center font-weight-bold m-4">PRODUK TERBARU</h4>

    <div class="row mx-auto">
    @foreach($products as $produk)
      <div class="card mr-2 ml-2" style="width: 16rem;">
      <img src="{{asset('storage/images/products/'.$produk->image)}}" class="card-img-top" width="250px" height="250px">
      <div class="card-body bg-light">
        <h5 class="card-title">{{$produk->nama}}</h5>
        <p class="card-text">{{$produk->stok}} Pcs</p>
        <br>
        <i class="fas fa-star text-warning"></i>
        <i class="fas fa-star text-warning"></i>
        <i class="fas fa-star text-warning"></i>
        <i class="fas fa-star text-warning"></i>
        <i class="fas fa-star-half-alt text-warning"></i>
        <i clas="far fa-star text-warning"></i><br>
        <a href="/detail/{{$produk->id}}" class="btn btn-primary" >Detail</a>
        <a href="#" class="btn btn-danger">Rp.{{number_format($produk->harga,0,',','.')}}</a>
      </div>
</div>
@endforeach


@foreach ($products as $row) 
    </div>
    <!-- Modal -->
      <div class="modal fade" id="produk1{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
          
            <div class="modal-body">
              
            </div>
            
          </div>
        </div>
      </div>
@endforeach

@endsection