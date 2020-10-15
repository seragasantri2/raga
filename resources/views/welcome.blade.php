@extends('layouts.welcomee')
@section('content')
<div class="jumbotron">
  <img src="{{asset('img/home.png')}}" alt="home">
  <h1 class="display-4">Website Praktis untuk Bisnismu</h1>
  <p class="lead">TokoKami menyediakan website praktis yang dilengkapi fitur-fitur canggih untuk membantu kamu mengembangkan bisnis online-mu. Gratis!</p>
  <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Buat website sekarang</a>
</div>
    <div class="header2">
        <h3>Jual Apa Saja di TokoKami</h3>
        <p class="desk">Jual apa saja ke customer kamu di mana pun mereka berada. <br> Mulai dari produk fashion, makanan, kebutuhan sehari-sehari, dan masih banyak lagi.</p>
        <img class="jeruk" src="{{asset('img/jeruk.png')}}" alt="jeruk">
        <img class="baju" src="{{asset('img/baju.png')}}" alt="baju">
        <img class="alkes" src="{{asset('img/alatkebersihan.png')}}" alt="alkes">
        <img class="kemeja" src="{{asset('img/kemeja.png')}}" alt="kemeja">

                <div class="desain">
        <h4>Desain Website Profesional</h4>
        <p>Desain profesional dan cantik, sesuai dengan branding produkmu.</p>
        </div>

              <div class="upload">
        <h4>Upload Produk Tak Terbatas</h4>
        <p>Masukkan produk sebanyak-banyaknya tanpa biaya tambahan apa pun.</p>
        </div>

        <div class="kelola">
          <h4>Kelola Order Otomatis</h4>
        <p>Masukkan produk sebanyak-banyaknya tanpa biaya tambahan apa pun.</p>
        </div>

    </div>

    <div class="header3">
          <img src="{{asset('img/demo.png')}}" alt="demo">
          <h1>Cara membuat Toko Online <br> dalam waktu 3 menit</h1>
          <h3>Ikuti 3 langkah Mudah ini!</h3>
          <br><br>
          <ol type="1">
            <li>Daftarkan akun kamu di toko kamu</li>
            <li>Tambahkan tiga produk atau lebih</li>
            <li>Atur tampilan toko dan kamu siap berjualan</li>
          </ol>
        </div>

      <div class="pembayaran">
        <h3 class="dukungan">Didukung Oleh berbagai Macam metode Pengiriman dan Pembayaran</h3>
        <div class=gambar>
          <img src="{{asset('img/bca.png')}}" alt="bca">
          <img src="{{asset('img/gosend.png')}}" alt="gosend">
          <img src="{{asset('img/alfa.png')}}" alt="alfamart">
          <img src="{{asset('img/indomaret.png')}}" alt="indomaret">
          <img src="{{asset('img/jn.png')}}" alt="jnt">
          <img src="{{asset('img/ninja.png')}}" alt="ninja expres">
          <img src="{{asset('img/sicepat.png')}}" alt="sicepat">
        </div>

      </div>
      <div class="jumbotron2">
  <p class="display-4">Gampang kan? <br> Ayo, Buat Website toko online-mu Sekarang.!</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Buat website sekarang</a>
</div>
      </div>

      
    </div>
@endsection