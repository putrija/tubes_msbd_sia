@extends('template_backend.home')
@section('heading', 'Edit Kurikulum')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('kurikulum.index') }}">Kurikulum</a></li>
  <li class="breadcrumb-item active">Edit Kurikulum</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Kurikulum</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('kurikulum.store',$kurikulum->id) }}" method="post">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="kurikulum_id" value="{{ $kurikulum->id }}">
                <div class="form-group">
                  <label for="nama_kurikulum">Nama Kurikulum</label>
                  <input type="text" id="nama_kurikulum" name="nama_kurikulum" value="{{ $kurikulum->nama_kurikulum }}" class="form-control @error('nama_kurikulum') is-invalid @enderror" placeholder="{{ __('Nama Mata Pelajaran') }}">
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
        window.location="{{ route('kurikulum.index') }}";
        });
    });
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataKurikulum").addClass("active");
</script>
@endsection