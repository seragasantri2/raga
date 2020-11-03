@extends('layouts.admin')
@section('content')
<div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-user mr-2"></i> DAFTAR ADMIN </h3><hr>

        <a class="btn btn-primary mb-3" class="btn btn-primary" data-toggle="modal" data-target="#AdminModal"><i class="fas fa-plus-square mr-2"></i>TAMBAH ADMIN</a>
           <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA KARYAWAN</th>
                <th scope="col">EMAIL</th>
                <th scope="col">NO.TELP</th>
                <th scope="col">TANGGAL MASUK</th>
                <th colspan="3" scope="col"> Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($admin as $adm)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$adm->first_name}} {{$adm->last_name}}</td>
                <td>{{$adm->email}}</td>
                <td>{{$adm->no_telpon}}</td>
                 <td>{{$adm->created_at}}</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
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
        <h5 class="modal-title" id="exampleModalLabel">FORMULIR ADMIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="/admin/add" method="post">
            @csrf

          <label for="">Nama Depan</label>
          <input id="first_name" type="text" class="form-control @error('name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="">Nama Belakang</label>
                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          <label for="">Email</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          <label for="">No.Telpon</label>
                <input id="no_telpon" type="text" class="form-control @error('no_telpon') is-invalid @enderror" name="no_telpon" value="{{ old('no_telpon') }}" required autocomplete="no_telpon" autofocus>

                @error('no_telpon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          <label for="">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          <label for="">Masukkan Ulang Password</label>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <label for="">'Alamat</label>
                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required autocomplete="new-password">
                @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror 
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
@endsection