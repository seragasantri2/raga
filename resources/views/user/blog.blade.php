@extends('layouts.user')
@section('css')
<link rel="stylesheet" href="{{asset('css/products.css')}}">
@endsection
@section('content')
<div class="row">
<ul class="list-group list-group-flush p-2 pt-4">
      <li class="list-group-item bg-warning"><i class="fas fa-list"></i>  KATEGORI PRODUK</li>
      @foreach($artikel as $row)
      <li class="list-group-item"> <a href="/users/kategori/{{$row->id}}" class="text-dark"><i class="fas fa-angle-right"></i> {{$row->nama}}</a></li>
      @endforeach
</ul>
@foreach($artikel as $art)
  <div class="col-sm-3 bg-light mt-3 ml-3 mr-3" style="height:19cm;">
    <img src="{{asset('storage/images/artikel/'.$art->image)}}" class="mt-3" width="300px" height="300px">
    <h3 class="mt-3">{{$art->judul}}</h3>
    <p>{{$art->created_at->toFormattedDateString()}}</p>
    <p>{!! substr($art->isi, 0, 200) !!}</p>
    <p>
    <strong>Kategori :</strong>{{$art->kategori->nama}} ,
    <strong>Tag :</strong>{{$art->tag->nama}}
    </p>
    <a href="#" class="btn btn-primary mb-3">Lihat...</a>
  </div>
@endforeach
</div>




  <!-- Optional JavaScript; choose one of the two! -->

@endsection