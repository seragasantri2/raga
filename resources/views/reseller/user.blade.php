@extends('layouts.reseller')
@section('content')
<div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-user mr-2"></i> DAFTAR USER </h3><hr>

            
           <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA USER</th>
                <th scope="col">EMAIL</th>
                <th scope="col">NO.TELP</th>
                <th scope="col">TANGGAL MASUK</th>
                <th colspan="3" scope="col"> Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $adm)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$adm->first_name}} {{$adm->last_name}}</td>
                <td>{{$adm->email}}</td>
                <td>{{$adm->no_telpon}}</td>
                 <td>{{$adm->created_at}}</td>
                <td>
                <a class="btn btn-primary btn-sm" data-toggle="modal"  data-target="#ResellerModal{{$adm->id}}"><i class="fas fa-edit p-2" title="edit"></i></a>
                </td>
                <td class="ml-auto">
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


@foreach($users as $user)
      <div class="modal fade" id="ResellerModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORMULIR UPDATE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="/reseller/user/{{$user->id}}" method="post">
            @csrf
            @method('patch')

          <label for="">Nama Depan</label>
          <input id="first_name" type="text" class="form-control @error('name') is-invalid @enderror" name="first_name" value="{{ $user->first_name }}" required autocomplete="first_name" autofocus>

                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="">Nama Belakang</label>
                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $user->last_name }}" required autocomplete="last_name" autofocus>

                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          <label for="">Email</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          <label for="">No.Telpon</label>
                <input id="no_telpon" type="text" class="form-control @error('no_telpon') is-invalid @enderror" name="no_telpon" value="{{ $user->no_telpon }}" required autocomplete="no_telpon" autofocus>

                @error('no_telpon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <label for="">Category</label>
                    <select name="role_id" class="form-control"   >
                    {{ $user->role_id }}
                     <option value="3">User Biasa</option>
                      <option value="2">Reseller</option>
                    </select>
                  </div>

          <label for="">Password</label>
                <input id="password" type="password" value="{{$user->password}}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          <label for="">Masukkan Ulang Password</label>
          <input id="password-confirm" type="password" value="{{$user->password}}" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <label for="">'Alamat</label>
                <textarea  id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" value="{{$user->alamat}}" name="alamat" required autocomplete="new-password" cols="30" rows="10">{{$user->alamat}}</textarea>
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
      <!-- Button trigger modal -->
@endforeach

@endsection