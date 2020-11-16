@extends('layouts.reseller')

@section('content')
<br>
<div class="container">
  <h3 class="text-center mt-5">Contact</h3>
  <div class="row mt-5">
    <div class="col-sm-5">
      <img src="{{asset('img/maps.jpg')}}">
      <h4><b>Baju.id</b></h4>
      <p>Jl.Flamboyan II no.15 Menteng Dalam Tebet Jakarta Selatan 12780. <br>+6287775415919 <br> instagram: @Baju.id <br>Facebook: Baju.id <br>baju.id@gmail.com</p>
    </div>
    <div class="col-sm-5 ml-5">
      <h4>Hubungi Kami Jika Membutuhkan</h4>
      <p>Kami ingin Tahu apa yang kalian Inginkan</p>
      <label for="Nama">Nama</label>
      <br>
      <input class="kotak" type="text" name="nama" value="">
      <br>
      <label for="email">Email*</label>
      <br>
      <input class="kotak" type="text" name="Email" value="">
      <br>
      <label for="No.Handphone">No.Handphone</label>
      <br>
      <input class="kotak" type="text" name="No.Handphone" value="">
      <br>
      <label for="pesan">Pesan</label>
      <br>
      <textarea></textarea>
      <br>
      <a href="#" class="btn btn-danger">Kirim</a>
    </div>
  </div>
  
</div>
@endsection