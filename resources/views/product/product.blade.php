@extends('layouts.admin')

@section('tittle','Product')
@section('content')
<!-- Button trigger modal -->
<div class="col-md p-5 pt-2">
    <h3><i class="fas fa-book-open mr-2"></i> DAFTAR PRODUK</h3><hr>
    <a href="{{route('create-product')}}" class="btn btn-primary mb-3" ><i class="fas fa-plus-square mr-2"> Tambah Produk</i></a>
    <a href="{{route('create-product')}}" class="btn btn-primary mb-3" ><i class="fas fa-plus-square mr-2"> Tambah Kategori</i></a>

    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
            <th scope="col">HARGA</th>
            <th scope="col">JUMLAH STOK</th>
            <th colspan="3">AKSI</th>
        </tr>
    </thead> 
    <tbody> 
    @foreach ($products as $product)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$product->nama}}</td>
            <td>Rp. {{number_format($product->harga,0,',','.')}}</td>
            <td>{{$product->stok}}</td>
            <td class="icon ml-auto">
            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
            </td>
            <td class="ml-auto">
            <form action="/product/delete/{{$product->id}}" method="post">
            @csrf
            @method('delete')
                <button class="btn btn-danger "><i class="fas fa-trash-alt"></i></button>
            </form>
             <!-- <a class="btn btn-danger btn-delete" href="/product/delete/{{$product->id}}">@method('detele')<i class="fas fa-trash"></i></a> -->
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>

</div>


<!-- Button trigger modal -->

@endsection