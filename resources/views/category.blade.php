@extends('layouts.super')

@section('tittle','Product')
@section('content')
<!-- Button trigger modal -->
<div class="col-md p-5 pt-2">
    <h3><i class="fas fa-book-open mr-2"></i> DAFTAR CATEGORY</h3><hr>
    
    <a class="btn btn-primary mb-3" data-toggle="modal" data-target="#KategoriModal" > Tambah Kategori</a>
    
  
    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
       
            <th colspan="3">AKSI</th>
        </tr>
    </thead> 
    <tbody> 
    @foreach ($category as $product)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$product->nama}}</td>
           
            <td class="icon ml-auto">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#update1{{$product->id}}" ><i class="fas fa-edit"></i></a>
            </td>
            <td class="ml-auto">
            <form action="/category/delete/{{$product->id}}" method="post">
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



<!-- Modal -->
<div class="modal fade" id="KategoriModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" id="quickForm" action="/product/category/add" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <input type="text" name="nama" class="form-control"  placeholder="Name Product">
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
@foreach ($category as $row)
<div class="modal fade" id="update1{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" id="quickForm" action="/category/update/{{$row->id}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('patch')
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <input type="text" name="nama" class="form-control" value="{{$row->nama}}"  placeholder="Name Product">
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
@endforeach
<!-- Button trigger modal -->
@endsection