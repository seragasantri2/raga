@extends('layouts.super')

@section('tittle','Product')

@section('css')
    <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection

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
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#produk{{$product->id}}"><i class="fas fa-edit"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
                    <input type="text" name="nama"  class="form-control"  placeholder="Name Product" required>
                     
                    @if ($errors->has('nama'))
                        <span class="help-block">
                        <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="">harga</label>
                    <input type="number" name="harga" required="required" class="form-control" >
                    @if ($errors->has('harga'))
                        <span class="help-block">
                        <strong>{{ $errors->first('harga') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="">harga reseller</label>
                    <input type="number" name="harga_reseller" required="required" class="form-control" >
                    @if ($errors->has('harga_reseller'))
                        <span class="help-block">
                        <strong>{{ $errors->first('harga_reseller') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="">stok</label>
                    <input type="number" name="stok" required="required" class="form-control" >
                    @if ($errors->has('stok'))
                        <span class="help-block">
                        <strong>{{ $errors->first('stok') }}</strong>
                        </span>
                    @endif
                  </div>
                  
                  <div class="form-group">
                    <label for="">Kategori</label>
                    
                    <select name="category_id" class="form-control" id="grd">
                    @foreach($category as $c)
                      <option value="{{$c->id}}">{{$c->nama}}</option>
                      @endforeach 
                    </select>

                    <select name="main_id" class="form-control"  id="main">
                    @foreach($main as $c)
                      <option value="{{$c->id}}">{{$c->nama}}</option>
                      @endforeach 
                    </select>

                    <!-- <select name="main_id" class="form-control" id="main">
                    </select> -->

                    <select name="sub_id" class="form-control" id="subkat">
                    </select>
                  </div>                  

                  <div class="col-sm form-group form-inline " style="text-align:left;">
                    <ul>
                        <label>Berat </label>
                        <input type="number" required="required" class="form-control" require name="berat" style="width:100px" placeholder="gr" >
                        @if ($errors->has('berat'))
                        <span class="help-block">
                        <strong>{{ $errors->first('berat') }}</strong>
                        </span>
                    @endif
                    </ul>
                    <ul>
                        <label> Panjang </label>
                        <input type="number" required="required"  class="form-control " name="panjang" style="width:100px"  placeholder="cm"  >
                        @if ($errors->has('nama'))
                        <span class="help-panajng">
                        <strong>{{ $errors->first('panjang') }}</strong>
                        </span>
                    @endif
                    </ul>
                    <ul>
                        <label >Lebar </label>
                        <input type="number" required="required"  class="form-control " name="lebar" style="width:100px"  placeholder="cm" >
                        @if ($errors->has('lebar'))
                        <span class="help-block">
                        <strong>{{ $errors->first('lebar') }}</strong>
                        </span>
                    @endif
                    </ul>
                    <ul>
                        <label> Tinggi </label>
                        <input type="number" required="required"  class="form-control" name="tinggi" style="width:100px"  placeholder="cm" >                    
                        @if ($errors->has('tinggi'))
                        <span class="help-block">
                        <strong>{{ $errors->first('tingg') }}</strong>
                        </span>
                    @endif
                    </ul>
                  </div>

                  <div class="form-group">
                    <label for="content">Deskripsi</label>
                    <textarea name="deskripsi"  cols="5" rows="5" id="textcontent" cols="30" rows="10" class="form-control ckeditor" id="ckedtor"></textarea>
                    @if ($errors->has('deskripsi'))
                        <span class="help-block">
                        <strong>{{ $errors->first('deskripsi') }}</strong>
                        </span>
                    @endif
                </div>
                
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Gambar Produk</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" required>
                    @if ($errors->has('image'))
                        <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
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



@foreach($products as $row)

<!-- Modal -->
<div class="modal fade" id="produk{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" id="quickForm" action="/product/update/{{$row->id}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              
              <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama"  class="form-control" value="{{$row->nama}}" placeholder="Name Product" required>
                     
                    @if ($errors->has('nama'))
                        <span class="help-block">
                        <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="">harga</label>
                    <input type="number" name="harga" required="required"  value="{{$row->harga}}" class="form-control" >
                    @if ($errors->has('harga'))
                        <span class="help-block">
                        <strong>{{ $errors->first('harga') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="">harga reseller</label>
                    <input type="number" name="harga_reseller" value="{{$row->harga_reseller}}" required="required" class="form-control" >
                    @if ($errors->has('harga_reseller'))
                        <span class="help-block">
                        <strong>{{ $errors->first('harga_reseller') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="">stok</label>
                    <input type="number" name="stok" required="required"  value="{{$row->stok}}" class="form-control" >
                    @if ($errors->has('stok'))
                        <span class="help-block">
                        <strong>{{ $errors->first('stok') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="">Kategori</label>
                    
                    <select name="category_id" class="form-control" id="grd">
                   
                      <option value="{{$row->Category->id}}">{{$row->Category->nama}}</option>
                      
                    </select>

                    <select name="main_id" class="form-control"  id="main">
                    
                    <option value="0">--Pilih yang Atas Terlebih dahulu--</option>
                    </select>

                    <!-- <select name="main_id" class="form-control" id="main">
                    </select> -->

                    <select name="sub_id" class="form-control" id="subkat">
                    </select>
                  </div>       

                  
                  <div class="col-sm form-group form-inline " style="text-align:left;">
                    <ul>
                        <label>Berat </label>
                        <input type="number" required="required" class="form-control" value="{{$row->berat}}" require name="berat" style="width:100px" placeholder="gr" >
                        @if ($errors->has('berat'))
                        <span class="help-block">
                        <strong>{{ $errors->first('berat') }}</strong>
                        </span>
                    @endif
                    </ul>
                    <ul>
                        <label> Panjang </label>
                        <input type="number" required="required"  class="form-control" value="{{$row->panjang}}" name="panjang" style="width:100px"  placeholder="cm"  >
                        @if ($errors->has('nama'))
                        <span class="help-panajng">
                        <strong>{{ $errors->first('panjang') }}</strong>
                        </span>
                    @endif
                    </ul>
                    <ul>
                        <label >Lebar </label>
                        <input type="number" required="required"  class="form-control" value="{{$row->lebar}}" name="lebar" style="width:100px"  placeholder="cm" >
                        @if ($errors->has('lebar'))
                        <span class="help-block">
                        <strong>{{ $errors->first('lebar') }}</strong>
                        </span>
                    @endif
                    </ul>
                    <ul>
                        <label> Tinggi </label>
                        <input type="number" required="required"  class="form-control" name="tinggi" value="{{$row->tinggi}}" style="width:100px"  placeholder="cm" >                    
                        @if ($errors->has('tinggi'))
                        <span class="help-block">
                        <strong>{{ $errors->first('tingg') }}</strong>
                        </span>
                    @endif
                    </ul>
                  </div>


                  <div class="form-group">
                    <label for="content">Deskripsi</label>
                    <textarea name="deskripsi"  cols="5" rows="5" id="textcontent" cols="30" rows="10" class="form-control ckeditor" id="ckedtor">{{$row->deskripsi}}</textarea>
                    @if ($errors->has('deskripsi'))
                        <span class="help-block">
                        <strong>{{ $errors->first('deskripsi') }}</strong>
                        </span>
                    @endif
                </div>

                
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Gambar Produk</label>
                    <input type="file" name="image" class="form-control-file mb-2" value="{{$row->image}}" id="exampleFormControlFile1" >
                    <img src="{{asset('storage/images/products/'.$row->image)}}" alt="gambar" width="200px" height="200px">
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

<!-- Button trigger modal -->

@section('js')
  <script>
     $('#grd').change(function(){
       var val = $('#grd').val();
       $('#main').html('');
       $.ajax({
          url: '/mainkat/' + val,
          type: "get",
          dataType: 'json',
          
          success: function(data) {
            $.each(data, function( index, value) {
                // console.log(value);

                $('#main').append('<option value="'+value.id+'">'+value.nama+'</option>')
            });
          },
        });
     });
    

     $('#main').change(function(){
       var val = $('#main').val();
       $('#subkat').html('');
       $.ajax({
          url: '/subkat/' + val,
          type: "get",
          dataType: 'json',
          
          
          success: function(data) {
            $.each(data, function( index, value) {
                console.log(value);

                $('#subkat').append('<option value="'+value.id+'">'+value.nama+'</option>')
            });
          },
        });
     });

    
  </script>
@endsection

@endsection