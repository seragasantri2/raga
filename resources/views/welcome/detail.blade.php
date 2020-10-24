@extends('layouts.detail')

@section('title')
  Detail    
@endsection

@section('css')

@

@section('content')
<div class="container">
  <h2 class="title">{{$product->title}}</h2>
  <br>
  <br>
  <br>
  <h1>Detail</h1>
  
  <hr>
  <div class="row">
    <div class="wrapper">
      <div class="col-lg-4" id="picture">
      <img src="{{asset('storage/images/products/'.$product->image)}}" alt="" height="230" width="200">
      </div>
    </div> 
    <div class="col-lg-4 desc">
      <h4 id="description">{{$product->nama}}</h4>
      <p>{{$product->deskripsi}}</p>
    </div>
    <div class="col-lg-4">
      <div class="kartu">
        <p>Harga</p>
        <h2>Rp {{number_format($product->harga)}}</h2>
        <form action="/cart/store" method="POST">
        @csrf
        <input type="hidden" value="{{$product->id}}" name="product_id">
        <input type="submit" class="btn btn-primary" value="Add to Cart">
    </form>
    
      </div>
      </div>
      <a href="/" class="btn btn-danger mt-3 inline">Home</a>
    
  </div>
  
</div>


@endsection




