@extends('template_backend.home')
@section('heading', 'Data Ruangan')
@section('page')
  <li class="breadcrumb-item active">Data Ruangan</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".tambah-mapel">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Ruang
                </button>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Ruangan</th>
                    <th>Jenis Ruangan</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($data as $no => $item)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $item->nama_ruang }}</td>
                    <td>{{ $item->jenis_ruang }}</td>
                    {{-- <td>
                        <form action="{{ route('status_siswa.destroy', $item->id)}}" method="POST">
                          @csrf
                          @method('delete')
                            <button class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                    </td> --}}
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

{{-- Tambah Data Ruang --}}
<div class="modal fade bd-example-modal-md tambah-mapel" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Tambah Data Ruangan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{ route('ruangan.store') }}" method="post">
          @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nama_ruang">Nama Ruangan</label>
                  <input type="text" id="nama_ruang" name="nama_ruang" class="form-control @error('nama_ruang') is-invalid @enderror" placeholder="{{ __('Nama Ruangan') }}">
                </div>
                <div class="form-group">
                    <label for="kurikulum_id">Jenis Ruangan</label>
                    <input type="text" id="jenis_ruang" name="jenis_ruang" class="form-control @error('jenis_ruang') is-invalid @enderror" placeholder="{{ __('Jenis Ruangan') }}">
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
    $("#DataRuangan").addClass("active");
  </script>
@endsection