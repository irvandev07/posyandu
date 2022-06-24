@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Pendaftaran</h1>
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
      <div class="container-field">
                      <form action="/daftar/{{$data_anak->id}}/update" method="POST">
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
                            <label for="id_kriteria">Nama Balita</label>
                            <input name = "nama_anak" type="text" class="form-control" id="id_kriteria" aria-describedby="emailHelp">
                          </div>

                          <div class="form-group">
                            <label for="id_kriteria">BB Lahir</label>
                            <input name = "bb_lahir" type="text" class="form-control" id="id_kriteria" aria-describedby="emailHelp">
                          </div>

                          <div class="form-group">
                            <label for="id_kriteria">PB Lahir</label>
                            <input name = "pb_lahir" type="text" class="form-control" id="id_kriteria" aria-describedby="emailHelp">
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
      @if(session('Sukses'))
      <div class="alert alert-success" role="alert">
        {{session ('Sukses')}}
      </div>
      @endif
</section>

@endsection
