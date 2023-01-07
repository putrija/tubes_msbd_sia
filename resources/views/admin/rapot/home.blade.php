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
            <select required id="nama_siswa" name="nama_siswa" onchange="showUser(this.value)" class="select2bs4 form-control @error('nama_siswa') is-invalid @enderror">
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
          <label for="kelas"></label>
          <div class="col-4">
             {{-- <input type="text" id="kelas" name="kelas" class="form-control" aria-label="Kelas" onkeypress="return inputAngka(event)"class="form-control @error('nama_siswa') is-invalid @enderror"> --}}
              {{-- <select id="kelas" name="kelas" class="select2bs4 form-control @error('kelas') is-invalid @enderror"> --}}
                {{-- <option value="">-- Pilih Kelas --</option> --}}
                {{-- @foreach ($kelas as $data) --}}
                      {{-- <option value="{{ $data->id }}">{{ $data->ket_jenis_ptk }}</option> --}}
                      {{-- <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option> --}}
                  {{-- @endforeach --}}
              </select>
          </div>
        </div>
     </div>
     <br>
    <!-- /.card -->
    <!-- Tabel Rapor -->
    {{-- <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Tambahkan</button> --}}
    {{-- <div id="txtHint" style="background-color: red;width:200px;height:200px;"> --}}
    </div>

    <div class="container">

  <div class="row">
    <div class="col-md-12">
<div class ="button">
  <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".input-nilai">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Input Nilai
                </button>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#importExcel">
                  <i class="nav-icon fas fa-file-import"></i> &nbsp; Import Nilai Rapor
                </button>
                <button type="submit" class="btn btn-primary btn-sm"><i class="nav-icon fas fa-save"></i> &nbsp; Tambahkan</button>
            </h3>
        </div>
    <div id="txtHint" class="table-responsive" data-pattern="priority-columns"></div>
</div>
</form>
<br>
    <!-- End Tabel Rapor -->
</div>
@endsection
@section('script')
<script>

  function showKelas(str_kelas) {
    
  }

  function showUser(str) {
  // alert("awal");
    if (str=="") {
      document.getElementById("txtHint").innerHTML="";
      return;
    }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("txtHint").innerHTML=this.responseText;
        // alert("tengah");
      }
    }
    xmlhttp.open("GET","getuser.php?nisn="+str,true);
    xmlhttp.send();
    // alert('akhir');
  }
  </script>
    <script>
      $("#Nilai").addClass("active");
      $("#liNilai").addClass("menu-open");
      $("#Rapot").addClass("active");
    </script>
@endsection