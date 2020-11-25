@extends('layouts.super')

@section('content')


<div class="container" style="width:80%">
  <!-- Success Message -->
  <br>
<br>

<div class="row  no-gutters">




  <div class="row mt-5 ml-2" >
    <div class="col-4 mt-3 ml-4">
      <img src="{{Auth::user()->getAvatar()}}" width="320">
    </div>
  </div>
  <div class="col-sm-6 mt-5 ml-3">
   

    <table class="table table-border">
      <tr>
        <th>Nama Lengkap</th>
        <td>: {{Auth::user()->getFullname()}}</td>
      </tr>
      <tr>
        <th>Email</th>
        <td>: {{Auth::user()->email}}</td>
      </tr>
      <tr>
        <th>No.Handphone</th>
        
        <td>: {{Auth::user()->no_telpon}}</td>
        
      </tr>
      <tr>
        <th><b>Alamat</b></th>
        <td>: {{Auth::user()->alamat}}</td>
      </tr>
  


    </table>

  </div>

</div>
 
@endsection