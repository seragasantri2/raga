@extends('layouts.welcomee')
@section('css')
<link rel="stylesheet" href="{{asset('css/products.css')}}">
@endsection
@section('content')
<article class="blog-post px-3 py-5 p-md-5">
    <div class="container">
        <header class="blog-post-header">
        <div class="card">
            <img class="card-img-top" src="{{asset('storage/images/artikel/'.$artikel->image)}}" alt="" height="400px">
            <div class="card-body">
                
            <h2 class="card-title mb-2">{{ $artikel->judul }}</h2>
            <div class="card-text meta mb-3"><span class="date">Published {{ $artikel->created_at->toFormattedDateString() }}</span><span class="category"><a href="/kategori/{{ $artikel->kategori->id }}"> {{ $artikel->kategori->nama }}</a></span></div>
             
            </div>
        </div>
        <h4 class="card-title mb-2"> </h4>
        </header>

        <div class="blog-post-body">
            {!! $artikel->isi !!}

            <br><br><br>
            <div class="meta mb-1">
                Tags:
             
                 <span >{{ $artikel->tag->nama }}</span>
           
            </div>
        </div>

        
       
        <!--//blog-comments-section-->

    </div>
    <!--//container-->
</article>


  <!-- Optional JavaScript; choose one of the two! -->

@endsection