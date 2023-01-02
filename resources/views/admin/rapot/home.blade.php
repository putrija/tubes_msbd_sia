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
     <form action="{{ route('rapot.store') }}" method="post" enctype="multipart/form-data">
      @csrf
     <div class="container ml-2 mb-5">
        <div class="row justify-content-around">
            <label for="nama_siswa"> Nama Siswa / NISN : </label>
          <div class="col-4">
            <select id="nama_siswa" name="nama_siswa" class="select2bs4 form-control @error('nama_siswa') is-invalid @enderror">
              <option value="">-- Pilih NISN Siswa --</option>
              @foreach ($data_siswa as $data)
                    {{-- <option value="{{ $data->id }}">{{ $data->ket_jenis_ptk }}</option> --}}
                    <option value="{{ $data->nisn }}">{{ $data->nama_siswa }} / {{ $data->nisn }}</option>
                @endforeach
          </select>
          </div>
             <label for="tahun_ajaran"> Tahun Ajaran : </label>
          <div class="col-4">
              {{-- <input type="text" id="tahun_ajaran" name="tahun_ajaran" class="form-control" placeholder="Tahun Ajaran" aria-label="Tahun Ajaran" onkeypress="return inputAngka(event)"class="form-control @error('nama_siswa') is-invalid @enderror"> --}}
              <select id="tahun_ajaran" name="tahun_ajaran" class="select2bs4 form-control @error('tahun_ajaran') is-invalid @enderror">
                <option value="">-- Pilih Tahun Ajaran --</option>
                @foreach ($tahun_ajaran as $data)
                      {{-- <option value="{{ $data->id }}">{{ $data->ket_jenis_ptk }}</option> --}}
                      <option value="{{ $data->id }}">{{ $data->tahun_ajaran }}</option>
                  @endforeach
              </select>
          </div>
        </div>
        <br>
    <div>
        <div class="row justify-content-around">
          <label for="kelas"> Kelas : </label>
          <div class="col-4">
             {{-- <input type="text" id="kelas" name="kelas" class="form-control" aria-label="Kelas" onkeypress="return inputAngka(event)"class="form-control @error('nama_siswa') is-invalid @enderror"> --}}
              <select id="kelas" name="kelas" class="select2bs4 form-control @error('kelas') is-invalid @enderror">
                <option value="">-- Pilih Kelas --</option>
                @foreach ($kelas as $data)
                      {{-- <option value="{{ $data->id }}">{{ $data->ket_jenis_ptk }}</option> --}}
                      <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                  @endforeach
              </select>
          </div>
          <label for="semester"> Semester : </label>
          <div class="col-4">
              {{-- <input type="text" id="semester" name="semester" class="form-control" placeholder="Tahun Ajaran" aria-label="Semester" onkeypress="return inputAngka(event)"class="form-control @error('nama_siswa') is-invalid @enderror"> --}}
              <select id="semester" name="semester" class="select2bs4 form-control @error('semester') is-invalid @enderror">
                <option value="">-- Pilih Semester --</option>
                @foreach ($semester as $data)
                      {{-- <option value="{{ $data->id }}">{{ $data->ket_jenis_ptk }}</option> --}}
                      <option value="{{ $data->id }}">{{ $data->semester }}</option>
                  @endforeach
              </select>
          </div>
        </div>
     </div>
     <br>
    <!-- /.card -->
    <!-- Tabel Rapor -->
    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Tambahkan</button>
    </form>

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
                <input type="text" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input type="text" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Kimia</td>
              <td>
                <div class="col-auto">
                  <input type="text" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input type="text" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Biologi</td>
              <td>
                <div class="col-auto">
                  <input type="text" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input type="text" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Matematika Peminatan</td>
              <td>
                <div class="col-auto">
                  <input type="text" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input type="text" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Matematika Wajib</td>
              <td>
                <div class="col-auto">
                  <input type="text" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input type="text" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Bahasa Inggris</td>
              <td>
                <div class="col-auto">
                  <input type="text" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input type="text" class="form-control" placeholder="Input Nilai">
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