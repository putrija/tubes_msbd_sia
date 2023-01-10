@extends('template_backend.home')
@section('heading', 'Data Kurikulum')
@section('page')
  <li class="breadcrumb-item active">Data Kurikulum</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".tambah-kurikulum">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Kurikulum
                </button>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kurikulum</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kurikulum as $result => $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_kurikulum }}</td>
                    <td>{{ $data->status }} </td>
                    <td>
                        <form action="{{ route('kurikulum.destroy', $data->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('kurikulum.edit', Crypt::encrypt($data->id)) }}" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>

                            <button class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                        <br>
                        <form action="{{ route('Kurikulum.changeStatus',$data->id) }}" method="post">
                          @csrf
                          <button type="submit" class="btn btn-warning btn-sm"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Nonaktifkan Status</button>
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
<div class="modal fade bd-example-modal-md tambah-kurikulum" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Tambah Data Kurikulum</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{ route('kurikulum.store') }}" method="post">
          @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nama_kurikulum">Nama Kurikulum</label>
                  <input type="text" id="nama_kurikulum" name="nama_kurikulum" class="form-control @error('nama_kurikulum') is-invalid @enderror" placeholder="{{ __('Nama Kurikulum') }}">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select id="status" name="status" class="select2bs4 form-control @error('status') is-invalid @enderror">
                      <option value="">-- Status --</option>
                      <option value="Aktif">Aktif</option>
                      <option value="Non Akitf">Non Aktif</option>
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
    $("#DataKurikulum").addClass("active");
  </script>
@endsection