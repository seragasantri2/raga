@extends('layouts.admin')

@section('content')
<div class="col-md p-5 pt-2">
    <h3><i class="fas fa-user mr-2"></i> DAFTAR USER</h3><hr>
    <a href="{{route('create-product')}}" class="btn btn-primary mb-3" ><i class="fas fa-plus-square mr-2"> Tambah User</i></a>

    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
            <th scope="col">EMAIL</th>
            <th scope="col">NO TELPON</th>
            <th colspan="3">AKSI</th>
        </tr>
    </thead> 
    <tbody> 
 @foreach($users as $user)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$user->first_name}} {{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->no_telpon}}</td>
            <td class="icon ml-auto">
            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
            </td>
            <td class="ml-auto">
            <form action="" method="post">
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

@endsection