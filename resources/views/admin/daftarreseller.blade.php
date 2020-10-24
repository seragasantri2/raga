@extends('layouts.admin')
@section('content')
<div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-user mr-2"></i> DAFTAR RESELLER </h3><hr>

            <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH</a>
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
            @foreach ($reseller as $adm)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$adm->first_name}} {{$adm->last_name}}</td>
                <td>{{$adm->email}}</td>
                <td>{{$adm->no_telpon}}</td>
                 <td>{{$adm->created_at}}</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
            @endforeach
            </tbody>
          </table>

        
        </div>
      </div>
@endsection