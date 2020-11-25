@extends('layouts.super')
@section('content')
<div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-book-open mr-2"></i> KATEGORI ARTIKEL </h3><hr>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Launch demo modal</button>

      <table class="table table-striped table-bordered mt-2">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th colspan="3">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($kategori as $kat)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$kat->nama}}</td>
            <td>
              <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Modal{{$kat->id}}">Edit</a>
            </td>
            <td>
                <form action="/deleteKartikel/{{$kat->id}}" method="post">
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


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/tambahKartikel" method="post">
        @csrf
          <label >Nama</label>
          <input type="text" class="form-control" name="nama">
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
  <!-- Modal -->
  <div class="modal fade" id="Modal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="/updateKartikel/{{$row->id}}" method="post">
        @csrf
        @method('patch')
          <label>Nama</label>
          <input type="text" name="nama" value="{{$row->nama}}" class="form-control">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
@endforeach

@endsection