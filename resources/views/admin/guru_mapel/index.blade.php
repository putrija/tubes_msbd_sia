@extends('template_backend.home')
@section('heading', 'GuruMengajar')
@section('page')
  <li class="breadcrumb-item active">Data Mapel</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".tambah-mapel">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Guru Mapel
                </button>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Guru</th>
                    <th>Mata Pelajaran</th>
                   
                    <th>Tahun Ajaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guru_mapel as $result => $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->guru->nama_guru }}</td>
                    <td>{{$data->mapel->nama_mapel}}</td>
                    <td>{{$data->tahun_ajaran->tahun_ajaran}}</td>
                    <td>
                        <form action="{{ route('mapel.destroy', $data->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('mapel.edit', Crypt::encrypt($data->id)) }}" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
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
<div class="modal fade bd-example-modal-md tambah-mapel" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Tambah Data Mapel</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{ route('guru_mapel.store') }}" method="post">
          @csrf
            <div class="row">
              <div class="col-md-12">
               <div class="form-group">
                    <label for="nama_guru">Nama Guru</label><br>
                    <select   class="js-example-basic-single" id="guru_id" name="guru_id" data-width="100%">
                      <option value="">--- Pilih Nama Guru ---</option>
                      @foreach ($guru as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_guru }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_mapel">Mata Pelajaran</label><br>
                    <select   class="js-example-basic-single" id="mapel_id" name="mapel_id" data-width="100%">
                      <option value="">--- Pilih Mata Pelajaran ---</option>
                      @foreach ($mapel as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_mapel }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tahun_ajaran">Tahun Ajaran</label><br>
                    <select   class="js-example-basic-single" id="tahun_ajaran_id" name="tahun_ajaran_id" data-width="100%">
                      <option value="">--- Pilih Tahun Ajaran ---</option>
                      @foreach ($tahun_ajaran as $data)
                        <option value="{{ $data->id }}">{{ $data->tahun_ajaran }}</option>
                      @endforeach
                    </select>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.js-example-basic-single').select2();
    });

    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataGuruMapel").addClass("active");//isi variabel dolar adalah variabel yang ditarik dari halaman sidebar. yaitu idnya
  </script>
@endsection