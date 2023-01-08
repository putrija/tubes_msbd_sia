@extends('template_backend.home')
@section('heading', 'Edit Jenis PTK')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('jenisptk.index') }}">Jenis PTK</a></li>
  <li class="breadcrumb-item active">Edit Jenis PTK</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Jenis PTK</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('JenisPtk.update',$jenis_ptk->id) }}" method="GET">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <input type="hidden" name="jenis_ptk_id" value="{{ $jenis_ptk->id }}">
              <div class="form-group">
                <label for="ket_jenis_ptk">Jenis PTk </label>
                <input type="text" id="ket_jenis_ptk" name="ket_jenis_ptk" value="{{ $jenis_ptk->ket_jenis_ptk }}" class="form-control @error('ket_jenis_ptk') is-invalid @enderror" placeholder="{{ __('Jenis PTK') }}">
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
        window.location="{{ route('jenisptk.index') }}";
        });
    });
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataJenisPtk").addClass("active");
</script>
@endsection