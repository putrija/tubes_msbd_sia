@extends('template_backend.home')
@section('heading', 'Tugas Tambahan Guru')
@section('page')
  <li class="breadcrumb-item active">Tugas Tambahan Guru </li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".tambah-mapel">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambahkan Tugas
                </button>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tugas Tambahan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($data as $no => $item)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $item->ket_tugas_tambahan }}</td>
                    <td>
                        <form action="{{ route('tugastambahanguru.destroy', $item->id)}}" method="POST">
                          @csrf
                          @method('delete')
                          <a href="{{ route('tugastambahanguru.edit', Crypt::encrypt($item->id
                            )) }}" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
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
        <h4 class="modal-title">Tambahkan Tugas Guru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{ route('tugastambahanguru.store') }}" method="POST">
          @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="ket_tugas_tambahan"> Tugas Tambahan: </label>
                  <input type="text" id="ket_tugas_tambahan" name="ket_tugas_tambahan">
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
    $("#DataTugasTambahanGuru").addClass("active");
  </script>
@endsection