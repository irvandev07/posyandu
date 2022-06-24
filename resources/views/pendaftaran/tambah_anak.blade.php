@extends('layouts.master')

@section('content1')
@stop
@section('content')
<!-- Content Header (Page header) -->

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pendaftaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pendaftaran</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
      <div class="container-fluid">
      <!-- Button trigger modal -->
               <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
            <div class="float-left">
                <button type="button" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#TambahAnak">
                <i class="fas fa-plus pr-2"></i>Tambah Anak</button>
              </div>
              <div class="float-right">
             
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th >NIK Balita</th>
                    <th >Nama Balita</th>
                    <th >Tanggal Lahir</th>
                    <th >Nama Ibu</th>
                    <th >Aksi</th>
                </tr>
                </thead>
                 <tbody>
                    @foreach($data_anak as $tambah_anak)
                      <tr>
                        <th scope="row">{{$tambah_anak->nik_anak}}</th>
                        <td>{{$tambah_anak->nama_anak}}</td>
                        <td>{{$tambah_anak->tgl_lahir}}    </td>
                        <td> {{$tambah_anak->nama_ibu}}   </td>
                        <td>
                          <a href="/daftar/{{$tambah_anak->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                          <a href="#" class="btn btn-danger btn-sm delete" tambahAnak-id="{{$tambah_anak->id}}" title="hapus" onclick="">Hapus</a></td>
                      </tr>
                    @endforeach
                     
                    </tbody>
                <tfoot>
                <tr>
                    <th >NIK Balita</th>
                    <th >Nama Balita</th>
                    <th >Tanggal Lahir</th>
                    <th >Nama Ibu</th>
                    <th >Aksi</th>
                </tr>
                </tfoot>
              </table>
           
               <!-- Modal -->
               <div class="modal fade" id="TambahAnak" tabindex="-1" role="dialog" aria-labelledby="KriteriaModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="KriteriaModalLabel">Tambah Data Anak</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <form action=/daftar/tambah method="POST">
                      {{csrf_field()}}
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Anak Ke-</label>
                            <select name="anak_ke" class="form-control" id="exampleFormControlSelect1">
                              <option selected="selected"></option>
                              <?php
                                for($i=1;$i<=10;$i++){
                                  echo"<option value='$i'>$i</option>";
                                }
                              ?>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Tanggal Lahir</label>
                            <input name="tgl_lahir" id="datepicker" width="276" class="datepicker" data-date-format="mm-dd-yyyy" />
                            <script>
                                $('#datepicker').datepicker({
                                    timepicker : false,
                                    datepicker : true,
                                    uiLibrary: 'bootstrap4',
                                    format : 'yyyy-mm-dd'
                                });
                            </script>
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select name="kelamin" class="form-control" id="exampleFormControlSelect1">
                              <option></option>
                              <option>Laki-laki</option>
                              <option>Perempuan</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="id_kriteria">No. KK</label>
                            <input name = "no_kk" type="text" class="form-control" id="id_kriteria" aria-describedby="emailHelp">
                          </div>

                          <div class="form-group">
                            <label for="id_kriteria">NIK. Balita</label>
                            <input name = "nik_anak" type="text" class="form-control" id="id_kriteria" aria-describedby="emailHelp">
                          </div>

                          <div class="form-group">
                            <label for="id_kriteria">Nama Balita</label>
                            <input name = "nama_anak" type="text" class="form-control" id="id_kriteria" aria-describedby="emailHelp">
                          </div>

                          <div class="form-group">
                            <label for="id_kriteria">Nama Ayah</label>
                            <input name = "nama_ayah" type="text" class="form-control" id="id_kriteria" aria-describedby="emailHelp">
                          </div>

                          <div class="form-group">
                            <label for="id_kriteria">Nama Ibu</label>
                            <input name = "nama_ibu" type="text" class="form-control" id="id_kriteria" aria-describedby="emailHelp">
                          </div>

                          <div class="form-group">
                            <label for="id_kriteria">Nomor Hp</label>
                            <input name = "no_hp" type="text" class="form-control" id="id_kriteria" aria-describedby="emailHelp">
                          </div>

                          <div class="form-group">
                            <label for="id_kriteria">Alamat</label>
                            <input name = "alamat" type="text" class="form-control" id="id_kriteria" aria-describedby="emailHelp">
                          </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
      </div>
     
</section>

@endsection

@section('js')
<script>
  $(function () {
    $("#example").DataTable();

    $('.delete').click(function(){
        var tambah_anak = $(this).attr('tambahAnak-id');
        swal({
          title: "Yakin ?",
          text: "Mau Dihapus data kriteria dengan id " +tambah_anak+ " ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => { //promise
          if (willDelete) {
            window.location = "/daftar/"+tambah_anak+"/hapus";
           
          } else {
            swal("File anda aman!");
          }
        });
      });
  });
</script>
@stop