@extends('layouts.welcomee')
@section('css')
<link rel="stylesheet" href="{{asset('css/homestyle.css')}}">
@endsection

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="slide1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="slide2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="slide3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="row">
        <div class="col-sm-6 mt-5">
            <div class="jumbotron">
  <h1 class="display-4">Website Praktis Untuk Bisnismu</h1>
  <p class="lead"><b>Baju.id</b> Menyediakan Banyak Pilihan Baju dan Pakaian Sesuai dengan seleramu, Jadi jangan sampai Kehabisan.!</p>
  <hr class="my-4">
  <p>Ingin Membuka toko online? atau ingin menjadi Reseller Baju kami? Bergabunglah bersama mitra kami</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Buat Toko Online Mu Sekarang</a>
</div>
        </div>
        <div class="col-sm-5 mt-5">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="kaos2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="kaos4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="kaos6.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="kaos9.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="row">
        <div class="col-sm-3 pl-5 mt-5 ml-3 mr-5 ">
            <img src="fashionable1.jpg"> 
        </div>
        <div class="col-sm-3 pl-5 mt-5 mr-5">
            <img src="style1.jpg"> 
        </div>
        <div class="col-sm-3 mt-5 ml-5">
            <img src="power1.jpg"> 
        </div>
    </div>
    </div>
    <h4 class="text-center font-weight-bold m-4 mt-5">BAJU BAGUS KUALITAS TERBAIK <br> MULAI DARI RP.30.000</h4>
    <div class="row">
        <div class="col-sm-3 mt-5 ml-5 pl-5">
            <img src="kaos2.jpg"> 
        </div>
        <div class="col-sm-3 mt-5 ml-5 mr-5">
            <img src="kaos4.jpg"> 
        </div>
        <div class="col-sm-3 mt-5 ml-5 mr-5">
            <img src="kaos6.jpg"> 
        </div>
    </div>
    <h4 class="text-center font-weight-bold m-4 mt-5">KATEGORI PRODUK</h4>

    <div class="row">
        <div class="col-sm-3  mt-3 ml-5 mr-5">
            <img src="bajucakep.jpg" title="fashion pria">
        </div>
        
        <div class="col-sm-3  mt-4 ml-5 mr-5">
            <img src="bajupr.jpg" title="Fashion wanita">
        </div>

        <div class="col-sm-3 mt-4 ml-5">
            <img src="bajuanak.jpg" title="baju anak">
        </div>
    </div>
    <div class="fitur mt-5 ">
    <div class="row">
        <div class="col-sm-5  pl-5 mt-5 ml-5">
            <img src="tki.jpg" title="fashion pria">
        </div>
        <div class="col-sm-5 mt-5 ml-5 mr-5">
            <h5><b>Yuk, Gabung menjadi reseller bersama Kami</b></h5>
            <p><b>Baju.id</b> Saat ini Membuka Peluang bagi Pebisnis usaha kecil untuk bergabung menjadi reseller kami, raih keuntungan besar dengan modal minim.</p>
        </div>
        
    
    </div>
    
    <div class="row">
        <div class="col-sm-5 mt-5 ml-5 mr-5">
            <h5><b>Buat Website Replikamu Disini</b></h5>
            <p>Selain Membuka Reseller <b>Baju.id</b> juga punya fitur salah satunya Membuat website replika, Asyik bukan punya website sendiri dan kita sendiri yang mengelolanya.</p>
        </div>

        <div class="col-sm-5  pl-5 mt-5 ml-5">
            <img src="tki1.jpg" title="fashion pria">
        </div>
    
    </div>

    <div class="row">
        <div class="col-sm-5  pl-5 mt-5 ml-5">
            <img src="kurir.jpg" title="fashion pria">
        </div>
        <div class="col-sm-5 mt-5 ml-5 mr-5">
            <h5><b>Ga Perlu repot lagi antar paket kekurir</b></h5>
            <p>Cukup dirumah Saja Dan tunggu kurir datang menjemput Paket kamu.!</p>
        </div> 
     </div>
    </div>

    <h4 class="text-center font-weight-bold m-4 mt-5">Didukung Oleh Berbagai Macam metode pembayaran</h4>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="metode1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="metode2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="metode3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="metode4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div class="about">
        <div class="row">
            <div class="col-sm-6 pl-4 mt-3 ml-5">
                <h5><b>Baju.id</b> - Toko Baju Jakarta Selatan</h5>
        <b>Baju.id</b>Merupakan Toko Baju Yang menyediakan berbagai jenis baju Dari berbagai Kalangan usia dan kelas, <b>Baju.id</b>beralamat di Jakarta selatan tepatnya dikecamatan Tebet. Kami melayani berbagai jenis pembayaran mulai dai cash, transfer, hingga dengan menggunakan kartu kredit dan juga melayani custom order.
        <br>

        <br>Sebagai Professional, kami dengan senang hati memberikan pelayanan terbaik kepada para pelanggan kami untuk memenuhi kebutuhan akan Pakaian berkualitas dengan harga yang terbaik. Butuh Barang cepat? Jangan khawatir, kami siap melayani pengiriman bunga pada hari yang sama, cukup dengan melakukan pemesanan sebelum jam 4 sore.
            </div>

            <div class="col-sm-5 mt-3 ml-5">
                <h5>Mau Pesan Baju Online? Beli di <b>Baju.id</b> saja!</h5>
        Kamu bisa melakukan pemesanan Baju secara online dari mana saja. <b>Baju.id</b> hadir untuk memberikan kemudahan dengan layanan same day flower delivery kepada para pelanggan yang berada di seluruh JABODETABEK.
        <br>

        <br>Kami menghargai kesibukanmu, sehingga kami menawarkan cara memesan bunga yang mudah, cepat, dan terpercaya. Cukup dengan mengunjungi website kami, kamu bisa memilih Pilhan Baju yang sesuai kebutuhanmu > isi formulir pemesanan > pilih metode pembayaran > dan tunggu pesananmu diantar tepat pada waktunya!
            </div>
        </div>
        </div>
@endsection