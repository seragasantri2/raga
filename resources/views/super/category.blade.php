@extends('layouts.super')

@section('tittle','Product')
@section('content')
<!-- Button trigger modal -->
<div class="col-md p-5 pt-2">
    <h3><i class="fas fa-book-open mr-2"></i> DAFTAR CATEGORY</h3><hr>
    
    <a class="btn btn-primary mb-3" data-toggle="modal" data-target="#KategoriModal" > Tambah Grd Kategori</a>
    <a class="btn btn-primary mb-3" data-toggle="modal" data-target="#KategoriMain" > Tambah Main Kategori</a>
    <a class="btn btn-primary mb-3" data-toggle="modal" data-target="#KategoriSub" > Tambah Sub Kategori</a>
    
  
    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">GRAND</th>
            <th scope="col">MAIN</th>
            <th scope="col">SUB</th>
       
            <th colspan="3">AKSI</th>
        </tr>
    </thead> 
    <tbody> 
    @foreach ($category as $product)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td> <a href="/category/{{$product->id}}">{{$product->nama}}</a></td>
            <td> <a href="#">
                <iframe src="" frameborder="0" width="10"></iframe>
            </a></td>
            <td>SUM KATEGORI</td>
           
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



<!-- Modal Grand-->
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
      <form role="form" id="quickForm" action="/category/add" method="post" enctype="multipart/form-data">
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

<!-- Modal Main-->
<div class="modal fade" id="KategoriMain" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Main Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" id="quickForm" action="/maincategory/add" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Kategori</label>
                    
                    <select name="category_id" class="form-control">
                    @foreach($category as $c)
                      <option value="{{$c->id}}">{{$c->id}} - {{$c->nama}}</option>
                      @endforeach 
                    </select>
                    
                  </div> 

                  <div class="form-group">
                    <label for="">Nama Main Kategori</label>
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

<!-- Modal Sub-->
<div class="modal fade" id="KategoriSub" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" id="quickForm" action="/subcategory/add" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="">Grand Kategori</label>
                    
                    <select name="category_id" class="form-control" id="grd">
                    @foreach($category as $c)
                      <option value="{{$c->id}}">{{$c->nama}}</option>
                      @endforeach 
                    </select>
                    
                  </div>   

                  <div class="form-group">
                    <label for="">Main Kategori</label>
                    
                    <select name="category_id" class="form-control" id="main">
                     <option value=""></option>
                    </select>
                    
                  </div>  
                           

                  <div class="form-group">
                    <label for="">Sub Kategori</label>
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

@section('js')
  <script>
     $
  </script>
@endsection
@endsection