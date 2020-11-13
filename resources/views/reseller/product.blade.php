@extends('layouts.reseller')

@section('tittle','Product')
@section('content')
<!-- Button trigger modal -->
<div class="col-md p-5 pt-2">
    <h3><i class="fas fa-book-open mr-2"></i> DAFTAR PRODUK</h3><hr>
    <a class="btn btn-primary mb-3" data-toggle="modal" data-target="#ProdukModal" ><i class="fas fa-plus-square mr-2"> Tambah Produk</i></a>
    
    
  
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
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#update{{$product->id}}" ><i class="fas fa-edit"></i></a>
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


<!-- Modal -->
<div class="modal fade" id="ProdukModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" id="quickForm" action="/product/add" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control"  placeholder="Name Product">
                  </div>
                  <div class="form-group">
                    <label for="">harga</label>
                    <input type="number" name="harga" class="form-control" >
                  </div>

                  <div class="form-group">
                    <label for="">stok</label>
                    <input type="number" name="stok" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="">stok</label>
                    <select name="category_id" class="form-control">
                      <option value="1">Kaos Distro</option>
                      <option value="2">Kemeja Pria</option>
                      <option value="3">Baju Kaos</option>
                      <option value="4">Pakaian</option>
                    </select>
                  
                  </div>

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" cols="30" rows="5"></textarea>
                </div>

                
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Gambar Produk</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                

                </div>
                <!-- /.card-body -->
                <div class="col-sm-12 text-right">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>  
                </div>
               
              </form>
      </div>
  
    </div>
  </div>
</div>

<!-- Button trigger modal -->

@foreach($products as $row)

<!-- Modal -->
<div class="modal fade" id="update{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" id="quickForm" action="/reseller/product/{{$row->id}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $row->nama }}"  placeholder="Name Product">
                  </div>
                  <div class="form-group">
                    <label for="">harga</label>
                    <input type="number" name="harga"  value="{{ $row->harga }}"  class="form-control" >
                  </div>

                  <div class="form-group">
                    <label for="">stok</label>
                    <input type="number" name="stok"  value="{{ $row->stok }}"  class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_id" class="form-control"  value="{{ $row->category_id }}" >
                      <option value="1">Kaos Distro</option>
                      <option value="2">Kemeja Pria</option>
                      <option value="3">Baju Kaos</option>
                      <option value="4">Pakaian</option>
                    </select>
                  
                  </div>

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi"   class="form-control" cols="30" rows="5">{{ $row->deskripsi }}</textarea>
                </div>
 
                
                </div>
                <!-- /.card-body -->
                <div class="col-sm-12 text-right">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>  
                </div>
               
              </form>
      </div>
      @endforeach
    </div>
  </div>
</div>

<!-- Button trigger modal -->

 
@endsection