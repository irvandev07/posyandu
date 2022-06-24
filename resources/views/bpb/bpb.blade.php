@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bulan Penimbangan Balita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">BPB</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
            <div class="float-left">
                <button type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#KriteriaModal">
                <i class="fas fa-plus pr-2"></i>Tambah BPB</button>
              </div>
              <div class="float-right">
              <button type="button" class="btn btn-primary btn-sm "  data-toggle="modal" data-target="#importxls">
                <i class="fas fa-file-excel pr-2"></i>Import XLS</button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
            </div>
          </div>
        </div>
</section>

@endsection

@section('js')
<script>
  $(function () {
    $("#example").DataTable();
  });
</script>
@stop