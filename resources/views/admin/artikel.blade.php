@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{asset('css/artikel.css')}}">
@endsection

@section('content')

        
        <div class="kotak">
        <h1>Form Blog</h1>	
        <hr>
        <form action="/createblog" method="post">
        @csrf
		<textarea class="ckeditor" id="ckedtor" name="text"></textarea>
		<br/>
        <button class="tombol">Simpan</button>
        </form>
    </div>
        </div>

    </div>

    
@endsection

@section('js')
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
@endsection