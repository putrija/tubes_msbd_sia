@extends('template_backend.home')
@section('heading', 'Data Pembagian Kelas')
@section('page')
  <li class="breadcrumb-item active">Pembagian Kelas</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
              <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Pembagian Kelas
          </button>
              <a href="{{ route('pembagiankelasExport') }}" class="btn btn-success btn-sm my-3" target="_blank"><i class="nav-icon fas fa-file-export"></i> &nbsp; EXPORT PDFL</a>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#importExcel">
                    <i class="nav-icon fas fa-file-import"></i> &nbsp; IMPORT EXCEL
                </button>
          </h3>
          
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Siswa</th>
                    <th>Nomor Induk</th>
                    <th>Kelas</th>
                    <th>Nama Kelas</th>
                    <th>Angkatan</th>
                    <th>Tahun Ajaran</th>
                    <th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewPembagianKelas as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_siswa }}</td>
                    <td>{{ $data->no_induk }}</td>
                    <td>{{ $data->kelas }}</td>
                    <td>{{ $data->nama_kelas }}</td>
                    <td>{{ $data->angkatan }}</td>
                    <td>{{ $data->tahun_ajaran }}</td>
                    <td>
                        <form action="{{ route('kelas.destroy', $data->nama_siswa) }}" method="post">
                            @csrf
                            <button type="button" class="btn btn-success btn-sm" onclick="getEditKelas({{$data->nama_siswa}})" data-toggle="modal" data-target="#form-kelas">
                              <i class="nav-icon fas fa-edit"></i> &nbsp; Edit
                            </button>
                            <button class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Tambah Data Pembagian Kelas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
      <form action="{{ route('pembagiankelas.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="nama_siswa">Nama Siswa</label><br>
                <select   class="js-example-basic-single" id="siswa_id" name="siswa_id" data-width="100%">
                  <option value="">--- Pilih Nama Siswa ---</option>
                  @foreach ($siswa as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_siswa }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="nama_kelas">Kelas </label><br>
              <select   class="js-example-basic-single" id="kelas_id" name="kelas_id" data-width="100%">
                <option value="">--- Pilih Kelas Siswa ---</option>
                @foreach ($kelas as $data)
                  <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
            <label for="tahun_ajaran">Tahun Ajaran</label><br>
            <select   class="js-example-basic-single" id="tahun_ajaran_id" name="tahun_ajaran_id" data-width="100%">
              <option value="">--- Pilih Tahun Ajaran---</option>
              @foreach ($tahun_ajaran as $data)
                <option value="{{ $data->id }}">{{ $data->tahun_ajaran }}</option>
              @endforeach
            </select>
        </div>
            
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
                  <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Tambahkan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      
@endsection
@section('script')
  <script>
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataPembagianKelas").addClass("active");
  </script>
@endsection