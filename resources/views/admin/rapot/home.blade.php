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
        <h3 class="card-title">Nilai Rapor</h3>
      </div>
      <!-- /.card-header -->
      <br>
     <!-- Drop Down Siswa -->
     <div class="container ml-2 mb-5">
        <div class="row justify-content-around">
            <label>Nama Siswa:</label>
          <div class="col-4">
             <input type="text" class="form-control" placeholder="Nama Siswa" aria-label="Nama Siswa">
          </div>
             <label>Tahun Ajaran:</label>
          <div class="col-4">
              <input type="text" class="form-control" placeholder="Tahun Ajaran" aria-label="Tahun Ajaran">
          </div>
        </div>
        <br>
    {{-- <d
        {{-- <div class="row justify-content-around">
          <label>Kelas: </label>
          <div class="col-4">
             <input type="text" class="form-control" placeholder="Nama Siswa" aria-label="Nama Siswa">
          </div>
          <label>Mapel: </label>
          <div class="col-4">
              <input type="text" class="form-control" placeholder="Tahun Ajaran" aria-label="Tahun Ajaran">
          </div>
        </div> --}}
     </div>
    <!-- /.card -->
</div>
@endsection
@section('script')
    <script>
      $("#Nilai").addClass("active");
      $("#liNilai").addClass("menu-open");
      $("#Rapot").addClass("active");
    </script>
@endsection