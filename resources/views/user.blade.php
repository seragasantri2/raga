@extends('layouts.user')
@section('content')
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
      <img src="distro5.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">{{$produk->nama}}</h5>
        <p class="card-text">{{$produk->deskripsi}}</p>
        <br>
        <i class="fas fa-star text-warning"></i>
        <i class="fas fa-star text-warning"></i>
        <i class="fas fa-star text-warning"></i>
        <i class="fas fa-star text-warning"></i>
        <i class="fas fa-star-half-alt text-warning"></i>
        <i clas="far fa-star text-warning"></i><br>
        <a href="#" class="btn btn-primary" data-target="#produk1" data-toggle="modal">Detail</a>
        <a href="#" class="btn btn-danger">Rp.{{number_format($produk->harga,0,',','.')}}</a>
      </div>
</div>
@endforeach


   
    </div>
    <!-- Modal -->
      <div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <img src="distro5.jpg">
                </div>
                <div class="col-md-6">
                  <table class="table table-border less">
                    <tr>
                      <th>Nama Produk</th>
                      <td>Kemeja Distro Pria</td>
                    </tr>
                    <tr>
                      <th>Merk/type</th>
                      <td>Kuzumaru</td>
                    </tr>
                    <tr>
                      <th>Biaya Ongkir</th>
                      <td>Standar</td>
                    </tr>
                    <tr>
                      <th>Rating Produk</th>
                      <td><i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star-half-alt text-warning"></i>
                      <i clas="far fa-star text-warning"></i><br>
                    </td>
                    </tr>
                    <tr>
                      <th>Stok Produk</th>
                      <td>100pcs</td>
                    </tr>
                    <tr>
                      <th>Harga</th>
                      <td>Rp.65.000</td>
                    </tr>

                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
              <button type="button" class="btn btn-primary">Beli</button>
            </div>
          </div>
        </div>
      </div>
@endsection