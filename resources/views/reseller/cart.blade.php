@extends('layouts.reseller')
@section('css')
<link rel="stylesheet" href="{{asset('css/cart.css')}}"> 
@endsection
@section('content')
<br>
<br>
<br>
<br>

<div class="container">
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-danger">
        {{Session::get('error')}}
    </div>
@endif
    <!-- success message & Error message -->
        @php
            $total = 0;    
        @endphp
@if ($cart->count() == 0)
<p style="text-align:center;">Your Cart is Empty</p>
@endif
<div>
    <h3>{{$cart->count()}} Item in your cart</h3>
</div>
@foreach ($cart as $c)
<div class="cart">
        <div class="row">
            <div class="col-lg-3">
            <img class="img-cart" src="{{asset('gambar_produk/'.$c->produk->image)}}" alt="" >
            </div>
            <div class="col-lg-9">
                <div class="top">
                    <p class="item-name">{{$c->produk->nama}}</p> 
                    <div class="top-right">
                        <p class="">Rp {{number_format($c->produk->harga_reseller)}}</p>
                        <select name="qty" class="quantity" data-item="{{$c->id}}">
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{$i}}" {{$c->qty == $i ? 'selected' :''}}> {{$i}} </option>
                        @endfor
                        </select>
                        <!-- Subtotal -->
                        <p class="total-item">Rp {{number_format($c->produk->harga_reseller * $c->qty)}}</p>
                    </div>
                </div>
                <hr class="mt-2 mb-2">
                <div class="bottom">
                   <div class="row">
                        <p class="col-lg-6 item-desc">
                            {!! $c->produk->deskripsi !!}
                        </p>
                        <div class="offset-lg-4">

                        </div>
                        <div class="col-lg-2">
                        <!-- delete cart -->
                        <form action="/reseller/cart/remove/{{$c->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    @php
    $total += ($c->produk->harga_reseller * $c->qty);
    @endphp
@endforeach
<div class="totalz">
    <h4 class="total-price">Total Price: Rp{{number_format($total)}}</h4>
</div>
</div>

<form action="/checkout" method="POST" style="margin-left: 700px;">
@csrf
<button type="submit" class="btn btn-primary">Checkout</button>
</form>
    {{-- @endif --}}
@endsection

@section('script')
<script type="text/javascript">
    (function(){
    const classname = document.querySelectorAll('.quantity');

    Array.from(classname).forEach(function(element){
     element.addEventListener('change', function(){
        const id = element.getAttribute('data-item');
        axios.patch(`/reseller/cart/update/${id}`, {
            quantity: this.value,
            id: id
          })
          .then(function (response) {
            //console.log(response);
            window.location.href = '/reseller/cart'
          })
          .catch(function (error) {
            console.log(error);
          });
   })
 })
    })();
</script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

@endsection