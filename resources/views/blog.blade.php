@extends('layouts.welcomee')
@section('css')
<link rel="stylesheet" href="{{asset('css/products.css')}}">
@endsection
@section('content')
<div class="row">
  <div class="col-sm-3 bg-light mt-3 ml-5 mr-5">
<img src="{{asset('img/sakura.jpg')}}">
<h3 class="mt-3">Unik, Ternyata Ini arti,filosofi dari Bunga sakura di Jepang</h3>
<p>23 Oktober 2020</p>
<p>Bunga sakura merupakan jenis bunga yang sangat populer dan sering dijadikan sebagai hiasan yang sangat cocok untuk dekorasi rumah atau melambangkan perayaan sesuatu.</p>
<a href="#" class="btn btn-primary">Selengkapnya</a>
</div>
    <div class="col-sm-3 bg-light mt-3 ml-5 mr-5">
  <img src="{{asset('img/sedapmalam.jpg')}}">
  <h3 class="mt-3">Unik, Ternyata Bunga sedap malam Hanya mengeluarkan aroma wangi pada malam hari</h3>
  <p>23 Oktober 2020</p>
  <p>Bunga sakura merupakan jenis bunga yang sangat populer dan sering dijadikan sebagai hiasan yang sangat cocok untuk dekorasi rumah atau melambangkan perayaan sesuatu.</p>
  <a href="#" class="btn btn-primary">Selengkapnya</a>
  </div>
    <div class="col-sm-3 bg-light mt-3 ml-5 mr-5">
  <img src="{{asset('img/melati.jpg')}}">
  <h3 class="mt-3">Dibalik kesan mistis aroma melati pada malam hari</h3>
  <p>23 Oktober 2020</p>
  <p>Bunga sakura merupakan jenis bunga yang sangat populer dan sering dijadikan sebagai hiasan yang sangat cocok untuk dekorasi rumah atau melambangkan perayaan sesuatu.</p>
  <a href="#" class="btn btn-primary">Selengkapnya</a>
  </div>
</div>


  <!-- Optional JavaScript; choose one of the two! -->

@endsection