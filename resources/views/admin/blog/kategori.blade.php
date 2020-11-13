@extends('layouts.admin')
@section('content')
<div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-book-open mr-2"></i> KATEGORI ARTIKEL </h3><hr>

        <a class="btn btn-primary mb-3" class="btn btn-primary" data-toggle="modal" data-target="#AdminModal"><i class="fas fa-user-plus mr-2"></i>TAMBAH ADMIN</a>
           <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA KARYAWAN</th>
                <th colspan="3" scope="col"> Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($kategori as $adm)
              <tr>
                <th scope="row">{{$loop->iteration}}</th> 
                <td>{{$adm->nama}}</td>
            

                <td>
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#KartikelUpdate{{$adm->id}}" > <i class="fas fa-edit  p-2" data-toggle="tooltip" title="edit"></i></a>
               </td>
                <td>
                  <form action="/user/delete/{{$adm->id}}" method="post">
                  @csrf
                  @method('delete')
                      <button class="btn btn-danger "><i class="fas fa-trash-alt"></i></button>
                  </form>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

        
        </div>
      </div>


      <!-- Modal -->
<div class="modal fade" id="AdminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORMULIR KATEGORI ARTIKEL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="/admin/tambahKartikel" method="post">
            @csrf

            <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <input type="text" name="nama" class="form-control"  placeholder="Name Kategori">
            </div>
              
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </form>
      </div>

    </div>
  </div>
</div>


@foreach($kategori as $row)
      <div class="modal fade" id="KartikelUpdate{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORMULIR UPDATE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="/admin/user/update/{{$row->id}}" method="post">
            @csrf
            @method('patch')

          <label for="">Nama Depan</label>
          <input id="first_name" type="text" class="form-control" name="nama" value="{{ $row->nama }}">

         
                <br>
                <br>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </form>
      </div>

    </div>
  </div>
</div>
      <!-- Button trigger modal -->
@endforeach
@endsection