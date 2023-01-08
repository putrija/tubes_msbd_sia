@extends('template_backend.home')
@section('heading', 'Edit Tugas Tambahan Guru')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('tugastambahanguru.index') }}">Tugas Tambahan Guru</a></li>
  <li class="breadcrumb-item active">Edit Tugas Tambahan Guru</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Tugas Tambahan Guru<</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('TugasTambahanGuru.store',$tugas_tambahan_guru->id) }}" method="GET">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <input type="hidden" name="tugas_tambahan_guru_id" value="{{ $tugas_tambahan_guru->id }}">
              <div class="form-group">
                <label for="ket_tugas_tambahan">Tugas Tambahan</label>
                <input type="text" id="ket_tugas_tambahan" name="ket_tugas_tambahan" value="{{ $tugas_tambahan_guru->ket_tugas_tambahan }}" class="form-control @error('ket_tugas_tambahan') is-invalid @enderror" placeholder="{{ __('Tugas Tambahan') }}">
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <a href="#" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
          <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#back').click(function() {
        window.location="{{ route('tugastambahanguru.index') }}";
        });
    });
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataTugasTambahanGuru").addClass("active");
</script>
@endsection