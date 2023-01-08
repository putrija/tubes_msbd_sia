@extends('template_backend.home')
@section('heading', 'Data Semester')
@section('page')
  <li class="breadcrumb-item active">Data Semester</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".tambah-semester">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambahkan Semester
                </button>
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Semester</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $no => $item)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $item->semester }}</td>
                    <td>
                        <form action="{{ route('semester.destroy', $item->id)}}" method="POST">
                          @csrf
                          @method('delete')
                          {{-- <a href="{{ route('tugastambahanguru.edit', Crypt::encrypt($data->id
                            )) }}" class="btn btn-success btn-sm mt-2"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a> --}}
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
<div class="modal fade bd-example-modal-md tambah-semester" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Tambah Semester</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{ route('semester.store') }}" method="post">
          @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="semester">Semester</label>
                  <input type="text" id="semester" name="semester" class="form-control @error('semester') is-invalid @enderror" placeholder="{{ __('Semester') }}">
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
    $("#DataSemester").addClass("active");
  </script>
@endsection