@extends('layouts.admin')
@section('content')
<div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-user mr-2"></i> DAFTAR KARYAWAN </h3><hr>

            <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH</a>
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
              <tr>
                <th scope="row">1</th>
                <td>Adrian</td>
                <td>adrian@yahoo.com</td>
                <td>08788148284</td>
                 <td>8 juni 2015</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Ami</td>
                <td>siami@gmail.com</td>
                <td>081513032508</td>
                 <td>30 Agustus 2015</td>
                <td><i class="fas fa-edit bg-primary p-2"data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Abdul</td>
                <td>abdulaja@yahoo.co.id</td>
                <td>08997349827</td>
                 <td>12 Juni 2016</td>
                <td><i class="fas fa-edit bg-primary p-2"data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2"data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Ayu</td>
                <td>Ayuu@gmail.com</td>
                <td>081883188284</td>
                 <td>15 Juni 2015</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Salsabella</td>
                <td>Sabel_22@yahoo.com</td>
                <td>0899284723827</td>
                 <td>3 Oktober 2016</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2"data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Azhar</td>
                <td>Azharrr@yahoo.com</td>
                <td>087775425519</td>
                 <td>3 Oktober 2016 </td>
                <td><i class="fas fa-edit bg-primary p-2"data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Rahmatia</td>
                <td>rahmatia89@gmail.com</td>
                <td>0848927282</td>
                 <td>1 November 2016</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Isma</td>
                <td>ismaaw@yahoo.co.id</td>
                <td>08997389827</td>
                 <td>5 Oktober 2016</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>Ilham Ramadhan</td>
                <td>ramadhan@rocketmail.com</td>
                <td>08387389138</td>
                 <td>5 Juni 2017</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>Devi</td>
                <td>sidevi@yahoo.com</td>
                <td>08788148284</td>
                 <td>17 Juli 2017</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>Efendi</td>
                <td>siepen@gmail.com</td>
                <td>081513032508</td>
                 <td>12 September 2017</td>
                <td><i class="fas fa-edit bg-primary p-2"data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">12</th>
                <td>Putra</td>
                <td>saputraaja@yahoo.co.id</td>
                <td>08997349827</td>
                 <td>6 Agustus 2017</td>
                <td><i class="fas fa-edit bg-primary p-2"data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2"data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">13</th>
                <td>Ferizka</td>
                <td>ichachad@gmail.com</td>
                <td>081883188284</td>
                 <td>9 Oktober 2017</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">14</th>
                <td>Sarah</td>
                <td>Sarahhhh_22@yahoo.com</td>
                <td>021099828929</td>
                 <td>12 Oktober 2017</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2"data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">15</th>
                <td>Wahyu</td>
                <td>wahyuarifin@yahoo.com</td>
                <td>087775425519</td>
                 <td>15 Oktober 2017</td>
                <td><i class="fas fa-edit bg-primary p-2"data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">16</th>
                <td>Rahmatia</td>
                <td>rahmatia89@gmail.com</td>
                <td>0848927282</td>
                 <td>20 Oktober 2017</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">17</th>
                <td>Alex</td>
                <td>alexagokil@yahoo.co.id</td>
                <td>08997389827</td>
                 <td>2 Desember 2017</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">18</th>
                <td>Ilham Ramadhan</td>
                <td>ramadhan@rocketmail.com</td>
                <td>08387389138</td>
                 <td>26 Desember 2017</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">19</th>
                <td>Ilham Ramadhan</td>
                <td>ramadhan@rocketmail.com</td>
                <td>08387389138</td>
                 <td>26 Desember 2017</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">20</th>
                <td>Ilham Ramadhan</td>
                <td>ramadhan@rocketmail.com</td>
                <td>08387389138</td>
                 <td>26 Desember 2017</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
            </tbody>
          </table>

        
        </div>
      </div>
@endsection