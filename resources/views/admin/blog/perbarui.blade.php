@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{asset('css/artikel.css')}}">
    <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
<div class="container" style="width:80%">

<br>
<br>

<h3><i class="fas fa-book-open mr-2"></i> UPDATE ARTIKEL </h3><hr>
<form action="/artikel/update/{{$artikel->id}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('patch')
                <div class="form-group">
                    <label for="title">Title</label> 
                    <input type="text" name="judul" class="form-control" value="{{ $artikel->judul}}">
                </div>
              
                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select name="kategori_id" id="category" class="form-control">
                        @foreach($kategori as $category)
                            <option value="{{ $category->id }}">{{ $category->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Select tags</label>
                    @foreach($tags as $tag)
                        <div class="checkbox">
                            <label><input type="checkbox" name="tag_id" value="{{ $tag->id }}"> {{ $tag->nama }}</label>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="isi" cols="5" rows="5" id="textcontent" cols="30" rows="10" class="form-control ckeditor" id="ckedtor">{{$artikel->isi}}"</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Store post
                        </button>
                    </div>
                </div>
            </form>
</div>


@endsection