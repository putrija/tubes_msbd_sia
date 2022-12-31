@extends('template_backend.home')
@section('heading', 'Data Jurusan')
@section('page')
  <li class="breadcrumb-item active">Data Jurusan</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".tambah-jurusan">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Jurusan
                </button>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Jurusan</th>
                    <th>Kurikulum</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jurusan as $result => $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->ket_jurusan }}</td>
                    <td>{{ $data->nama_kurikulum }}</td>
                    <td>
                        <form action="{{ route('jurusan.destroy', $data->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('jurusan.edit', Crypt::encrypt($data->id)) }}" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
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
<div class="modal fade bd-example-modal-md tambah-jurusan" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Tambah Data Jurusan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{ route('jurusan.store') }}" method="post">
          @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="ket_jurusan">Nama Jurusan</label>
                  <input type="text" id="ket_jurusan" name="ket_jurusan" class="form-control @error('ket_jurusan') is-invalid @enderror" placeholder="{{ __('Nama Jurusan') }}">
                </div>
                <div class="form-group">
                  <label for="kurikulum_id">Kurikulum</label>
                  <br>
                  <select id="kurikulum_id" name="kurikulum_id" class="select2bs4 form-control @error('kurikulum_id') is-invalid @enderror">
                    @foreach ($kurikulum as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_kurikulum }}</option>
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
    $("#DataJurusan").addClass("active");
  </script>
@endsection