@extends('layouts.reseller')

@section('content')


 <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-calendar-alt mr-2"></i> JADWAL PROMO </h3><hr>

            <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Promo Baru</a>
           <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA PROMO</th>
                <th scope="col">MASA BERLAKU</th>
                <th scope="col">TANGGAL PROMO</th>
                <th colspan="3" scope="col"> Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>PROMO GRATIS ONGKIR KEMEJA DISTRO PRIA</td>
                <td>14 Hari</td>
                <td>12 Oktober 2020 s/d 26 Oktober 2020</td>
                <td><i class="fas fa-edit bg-primary p-2" data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>BELI 2 BAYAR SETENGAH HARGA BAJU DISTRO KEKINIAN</td>
                <td>6 Hari</td>
                <td>1 November 2020 s/d 6 November 2020</td>
                <td><i class="fas fa-edit bg-primary p-2"data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2" data-toggle="tooltip" title="Delete"></i></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>GRATIS ONGKIR BAJU DISTRO 3 SECOND</td>
                <td>3 Hari</td>
                <td>15 November 2020 s/d 18 November 2020</td>
                <td><i class="fas fa-edit bg-primary p-2"data-toggle="tooltip" title="edit"></i></td>
                <td><i class=" fas fa-trash-alt bg-danger p-2"data-toggle="tooltip" title="Delete"></i></td>
              </tr>
            
            </tbody>
          </table>

        
        </div>
      </div>
@endsection