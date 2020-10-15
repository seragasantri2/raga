@extends('layouts.admin')

@section('content')
    
    <!-- Main content -->
    <!-- <section class="content"> -->
      <div class="container-fluid" style="width:80%; min-width:300px;">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 p-30 pt-10">
            <!-- jquery validation -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
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
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>  
                </div>
               
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
</div>
        <!-- /.row -->

@endsection