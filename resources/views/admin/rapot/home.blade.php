@extends('template_backend.home')
@section('heading', 'Nilai Rapor')
@section('page')
  <li class="breadcrumb-item active">Nilai Rapor</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"> Input Nilai Rapor</h3>
      </div>
      <!-- /.card-header -->
      <br>
     <!-- Drop Down Siswa -->
     <div class="container ml-2 mb-5">
        <div class="row justify-content-around">
            <label> Nama Siswa : </label>
          <div class="col-4">
             <input type="text" class="form-control" placeholder="Nama Siswa" aria-label="Nama Siswa">
          </div>
             <label> Tahun Ajaran : </label>
          <div class="col-4">
              <input type="text" class="form-control" placeholder="Tahun Ajaran" aria-label="Tahun Ajaran">
          </div>
        </div>
        <br>
    <div>
        <div class="row justify-content-around">
          <label> Kelas : </label>
          <div class="col-4">
             <input type="text" class="form-control" placeholder="Nama Siswa" aria-label="Kelas">
          </div>
          <label> Semester : </label>
          <div class="col-4">
              <input type="text" class="form-control" placeholder="Tahun Ajaran" aria-label="Semester">
          </div>
        </div>
     </div>
     <br>
    <!-- /.card -->
    <!-- Tabel Rapor -->

    <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive" data-pattern="priority-columns">
        <table summary="This table shows how to create responsive tables using RWD-Table-Patterns' functionality" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Nomor</th>
              <th data-priority="1">Mapel</th>
              <th data-priority="2">Nilai Pengetahuan</th>
              <th data-priority="3">Nilai Keterampilan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Fisika</td>
              <td>  
                <div class="col-auto">
                <input type="password" class="form-control" id="inputPassword2" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Kimia</td>
              <td>
                <div class="col-auto">
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Biologi</td>
              <td>
                <div class="col-auto">
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Matematika Peminatan</td>
              <td>
                <div class="col-auto">
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Matematika Wajib</td>
              <td>
                <div class="col-auto">
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Bahasa Inggris</td>
              <td>
                <div class="col-auto">
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
          </tbody>
<div class ="button">
  <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".input-nilai">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Input Nilai
                </button>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#importExcel">
                  <i class="nav-icon fas fa-file-import"></i> &nbsp; Import Nilai Rapor
                </button>
            </h3>
        </div>
</div>
<br>
    <!-- End Tabel Rapor -->
</div>
@endsection
@section('script')
    <script>
      $("#Nilai").addClass("active");
      $("#liNilai").addClass("menu-open");
      $("#Rapot").addClass("active");
    </script>
@endsection