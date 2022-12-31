@extends('template_backend.home')
@section('heading', 'Data Wali Kelas')
@section('page')
  <li class="breadcrumb-item active">Data Wali Kelas</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".tambah-waliKelas">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Wali Kelas
                </button>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kelas</th>
                    <th>Nama Guru Wali Kelas</th>
                    <th>Tahun Ajaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wali_kelas as $result => $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_kelas }}</td>
                    <td>{{ $data->nama_guru }}</td>
                    <td>{{ $data->tahun_ajaran }}</td>
                    <td>
                        <form action="{{ route('wali_kelas.destroy', $data->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('wali_kelas.edit', Crypt::encrypt($data->id)) }}" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
                            <button class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->

<!-- Extra large modal -->
<div class="modal fade bd-example-modal-md tambah-waliKelas" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Tambah Data Wali Kelas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{ route('wali_kelas.store') }}" method="post">
          @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="kelas_id">Kelas</label><br>
                  <select id="kelas_id" name="kelas_id" class="js-example-basic-single form-control @error('kelas_id') is-invalid @enderror select2bs4">
                      <option value="">-- Pilih Kelas --</option>
                      @foreach ($kelas as $data)
                          <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="guru_id">Guru</label><br>
                  <select id="guru_id" name="guru_id" class="js-example-basic-single form-control @error('guru_id') is-invalid @enderror select2bs4">
                      <option value="">-- Pilih Guru --</option>
                      @foreach ($guru as $data)
                          <option value="{{ $data->id }}">{{ $data->nama_guru }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="tahun_ajaran_id">Kelas</label><br>
                  <select id="tahun_ajaran_id" name="tahun_ajaran_id" class="js-example-basic-single form-control @error('tahun_ajaran_id') is-invalid @enderror select2bs4">
                      <option value="">-- Pilih Tahun Ajaran --</option>
                      @foreach ($tahun_ajaran as $data)
                          <option value="{{ $data->id }}">{{ $data->tahun_ajaran }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
            </div>
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
    $("#DataWaliKelas").addClass("active");
  </script>
@endsection