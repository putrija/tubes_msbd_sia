@extends('template_backend.home')
@section('heading', 'Edit Wali Kelas')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('wali_kelas.index') }}">Wali Kelas</a></li>
  <li class="breadcrumb-item active">Edit Wali Kelas</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Wali Kelas</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('wali_kelas.store',$wali_kelas->id) }}" method="post">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <input type="hidden" name="wali_kelas_id" value="{{ $wali_kelas->id }}">
              <div class="form-group">
                <label for="kelas_id">Kelas</label>
                <select id="kelas_id" name="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror select2bs4">
                  <option value="" @if ($wali_kelas->kelas_id)
                    selected
                  @endif>-- Pilih Kelas --</option>
                  @foreach ($kelas as $data)
                    <option value="{{ $data->id }}"
                      @if ($wali_kelas->kelas_id == $data->id)
                        selected
                      @endif
                    >{{ $data->nama_kelas }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="guru_id">Kelas</label>
                <select id="guru_id" name="guru_id" class="form-control @error('guru_id') is-invalid @enderror select2bs4">
                  <option value="" @if ($wali_kelas->guru_id)
                    selected
                  @endif>-- Pilih Guru --</option>
                  @foreach ($guru as $data)
                    <option value="{{ $data->id }}"
                      @if ($wali_kelas->guru_id == $data->id)
                        selected
                      @endif
                    >{{ $data->nama_guru }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="tahun_ajaran_id">Kelas</label>
                <select id="tahun_ajaran_id" name="tahun_ajaran_id" class="form-control @error('tahun_ajaran_id') is-invalid @enderror select2bs4">
                  <option value="" @if ($wali_kelas->tahun_ajaran_id)
                    selected
                  @endif>-- Pilih Tahun Ajaran --</option>
                  @foreach ($tahun_ajaran as $data)
                    <option value="{{ $data->id }}"
                      @if ($wali_kelas->tahun_ajaran_id == $data->id)
                        selected
                      @endif
                    >{{ $data->tahun_ajaran }}</option>
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
        window.location="{{ route('wali_kelas.index') }}";
        });
    });
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataWaliKelas").addClass("active");
</script>
@endsection