@extends('layouts.welcomee')
@section('css')
<link rel="stylesheet" href="{{asset('css/products.css')}}">
@endsection
@section('content')
<div class="row mt-5 no-gutters">
<div class="col-md-2 bg-light">
    
    <ul class="list-group list-group-flush p-2 pt-4">
        <li class="list-group-item bg-warning"><i class="fas fa-list"></i>  KATEGORI PRODUK</li>
        @foreach($kategori as $row)
        <li class="list-group-item"> <a href="/kategori/{{$row->id}}" class="text-dark"><i class="fas fa-angle-right"></i> {{$row->nama}}</a></li>
        @endforeach
  </ul>

  
  </div>
 <div class="col-md-10">
 <div class="row mx-auto">
  @foreach($artikel as $art)
    <div class="col-sm-3 bg-light mt-3 ml-5 mr-4" style="height:16cm;">
      <img src="{{asset('gambar_artikel/'.$art->image)}}" class="mt-3"  width="250px" height="250px">
      <h3 class="mt-3">{{substr($art->judul, 0, 20)}}....</h3>
      <p>{{$art->created_at->toFormattedDateString()}}</p>
      <p>{!! substr($art->isi, 0, 100) !!}....</p>
      <p>
      <strong>Kategori :</strong>{{$art->kategori->nama}} ,
      <strong>Tag :</strong>{{$art->tag->nama}}
      </p>
      <a href="/tampilblog/{{$art->id}}" class="btn btn-primary mb-3">Lihat...</a>
    </div>
  @endforeach
  </div>

</div>




  <!-- Optional JavaScript; choose one of the two! -->

@endsection