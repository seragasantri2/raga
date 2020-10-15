@extends('layouts.admin')

@section('tittle','Create Product')

@section('content-header', 'Create Product')

@section('content')
    
    <!-- Main content -->
    <!-- <section class="content"> -->
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" action="/product/add" method="post">
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
                    <label for="">Deskripsi</label>
                    <input type="file" class="form-control-file" id="image" name="image">
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
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    <!-- </section> -->
    <!-- /.content -->
  <!-- </div> -->
@endsection