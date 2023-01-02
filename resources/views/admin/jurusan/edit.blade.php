@extends('template_backend.home')
@section('heading', 'Edit Jurusan')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('jurusan.index') }}">Jurusan</a></li>
  <li class="breadcrumb-item active">Edit Jurusan</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Jurusan</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('jurusan.store',$jurusan->id) }}" method="post">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <input type="hidden" name="jurusan_id" value="{{ $jurusan->id }}">
              <div class="form-group">
                <label for="ket_jurusan">Nama Jurusan</label>
                <input type="text" id="ket_jurusan" name="ket_jurusan" value="{{ $jurusan->ket_jurusan }}" class="form-control @error('ket_jurusan') is-invalid @enderror" placeholder="{{ __('Nama Jurusan') }}">
              </div>

              <div class="form-group">
                <label for="kurikulum_id">Kode Kurikulum</label>
                <select id="kurikulum_id" name="kurikulum_id" class="form-control @error('kurikulum_id') is-invalid @enderror select2bs4">
                  <option value="" @if ($jurusan->kurikulum_id)
                    selected
                  @endif>-- Pilih Kurikulum --</option>
                  @foreach ($kurikulum as $data)
                    <option value="{{ $data->id }}"
                      @if ($jurusan->kurikulum_id == $data->id)
                        selected
                      @endif
                    >{{ $data->nama_kurikulum }}</option>
                  @endforeach
                </select>
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
        window.location="{{ route('jurusan.index') }}";
        });
    });
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataJurusan").addClass("active");
</script>
@endsection