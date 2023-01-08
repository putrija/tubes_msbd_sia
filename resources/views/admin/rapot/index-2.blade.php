@extends('template_backend.home')
@section('heading', 'Nilai Rapor')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('rapor') }}">Nilai Rapor</a></li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".cari-siswa">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Cari Siswa
                </button>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <h4>Nama Siswa = {{ $nama_siswa->nama_siswa }}</h4>
          <h4>NISN Siswa = {{ $nama_siswa->nisn }}</h4>
          <h4>Semester = {{ $semester_siswa->semester }}</h4>
          <h4>Tahun Ajaran = {{ $tahun_ajaran_siswa->tahun_ajaran }}</h4>
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Mapel</th>
                    <th>Nilai Pengetahuan</th>
                    <th>Nilai Keterampilan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rapor as $result => $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_mapel }}</td>
                    <td>{{ $data->nilai_pengetahuan }}</td>
                    <td>{{ $data->nilai_keterampilan }}</td>
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
<div class="modal fade bd-example-modal-md cari-siswa" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Cari Nilai Rapor Siswa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{ route('rapor.cari_siswa') }}" method="post">
          @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="siswa_id">Nama/NISN siswa</label>
                  <br>
                  <select id="siswa_id" name="siswa_id" class="select2bs4 form-control @error('siswa_id') is-invalid @enderror">
                    @foreach ($data_siswa as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_siswa }} - {{ $data->nisn }}</option>
                    @endforeach
                  </select>
              </div>
                <div class="form-group">
                    <label for="semester_id">Semester</label>
                    <br>
                    <select id="semester_id" name="semester_id" class="select2bs4 form-control @error('semester_id') is-invalid @enderror">
                      @foreach ($semester as $data)
                          <option value="{{ $data->id }}">{{ $data->semester }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="tahun_ajaran_id">Tahun Ajaran</label>
                  <br>
                  <select id="tahun_ajaran_id" name="tahun_ajaran_id" class="select2bs4 form-control @error('tahun_ajaran_id') is-invalid @enderror">
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
    $("#Nilai").addClass("active");
    $("#liNilai").addClass("menu-open");
    $("#Rapot").addClass("active");
  </script>
@endsection