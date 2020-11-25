@extends('layouts.super')
@section('content')
<div class="col-md-10 p-5 pt-2">
<h3><i class="fas fa-book-open mr-2"></i> TAG ARTIKEL</h3><hr>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
  <div class="row mt-2">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tag as $adm)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$adm->nama}}</td>
            <td>
                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Modal{{$adm->id}}">Edit</a>
            </td>
            <td>
                <form action="/Tartikel/delete/{{$adm->id}}" method="post">
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/tambahTartikel" method="post">
        @csrf
          <label for="nama">Nama</label>
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



<!-- Modal -->
@foreach($tag as $row)
<div class="modal fade" id="Modal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/Tartikel/update/{{$row->id}}" method="post">
        @csrf
        @method('patch')
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" value="{{$row->nama}}">
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