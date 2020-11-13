@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{asset('css/artikel.css')}}">
@endsection

@section('content')

<div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-book-open mr-2"></i> POST ARTIKEL </h3><hr>
        <a class="btn btn-primary mb-3" class="btn btn-primary"  href="/admin/tambartikel"><i class="fas fa-user-plus mr-2"></i>TAMBAH ARTIKEL</a>
            
           <table class="table table-striped table-bordered">
            <thead> 
              <tr>
            <th scope="col">NO</th>
            <th scope="col">FOTO</th>
            <th scope="col">JUDUL</th>
            <th scope="col">KATEGORI</th>
            <th scope="col">TAG</th>
            <th colspan="3">AKSI</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($artikel as $art)
              <tr>
              <th scope="row">{{$loop->iteration}}</th>
            <td style="text-align:center;"><img src="{{asset('storage/images/artikel/'.$art->image)}}"  alt="" width="50px" height="50px"></td>
            <td>{{$art->judul}}</td>
            <td>{{$art->kategori->nama}}</td>
            <td>{{$art->tag->nama}}</td>
            <td>
                <a class="btn btn-primary btn-sm"  href="/admin/artikel/{{$art->id}}"> <i class="fas fa-edit  p-2" data-toggle="tooltip" title="edit"></i></a>
               </td>
                <td class="ml-auto">
                <form action="/user/delete/{{$art->id}}" method="post">
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


@endsection

