@extends('layouts.user')
@section('content')
<br>
<br>

<div class="row  no-gutters">
<div class="col-md-2 bg-light">
    
    <ul class="list-group list-group-flush p-2 pt-4">
      <li class="list-group-item bg-warning"><i class="fas fa-list"></i>  KATEGORI PRODUK</li>
      @foreach($category as $c)
      <li class="list-group-item"> <a href="/category/{{$c->id}}" class="text-dark"><i class="fas fa-angle-right"></i> {{$c->nama}}</a></li>
      @endforeach
    </ul>
  </div>



  <div class="row mt-5 ml-2" >
    <div class="col-4 mt-3 ml-4">
      <img src="{{asset('gambar_produk/'.$product->image)}}" width="320">
    </div>
  </div>
  <div class="col-sm-6 mt-5 ml-3">
    <h3>{{$product->nama}}</h3>
  
  <div class="col-sm-6">
      <i class="fas fa-star text-warning"></i>
  </div>
    <table class="table table-border">
      <tr>
        <th>Merk/Type</th>
        <td>: Kuzumaru</td>
      </tr>
      <tr>
        <th>Biaya Ongkir</th>
        <td>: Standar</td>
      </tr>
      <tr>
        <th>Kondisi</th>
        <td>: <b>Baru</b></td>
      </tr>
      <tr>
        <th><b>Berat</b></th>
        <td>: 100 gr</td>
      </tr>
      <tr>
        <th>Asusansi</th>
        <td>: Optional</td>
      </tr>
      <tr>
        <th>Stok</th>
        <td>: {{$product->stok}}</td>
      </tr>
      <tr>
        <th>Harga</th>
        <td>: <b>Rp. {{number_format($product->harga,0,',','.')}}</b></td>
      </tr>
    </table>
          <strong>Deskripsi :</strong> 
            <br>
            <p>{!!$product->deskripsi !!}</p>
            
        </tr>
    <div class="modal-footer">
    <form action="/cart/store" method="POST">
        @csrf
        <input type="hidden" value="{{$product->id}}" name="produk_id">
        <button type="submit" class="btn btn-warning mt-3"><b><i class="fas fa-cart-plus"></i> Add</b></button>
    </form> 
    
    <a type="button" class="btn btn-primary mt-3"><b>Buy</b></a>

    </div>
  </div>

</div>
 
@endsection