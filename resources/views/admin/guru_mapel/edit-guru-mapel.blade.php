@extends('template_backend.home')
@section('heading', 'Edit Guru Mengajar')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('guru_mapel.index') }}"> Guru Mapel</a></li>
  <li class="breadcrumb-item active">Edit Guru Mapel</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Mapel</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      {{-- <form action="{{ route('guru_mapel.store',$guru_mapel->id) }}" method="post"> --}}
        <form action="{{ route('guru_mapel.store') }}" method="post">
        
        {{-- <form action="{{ route('update-guru-mapel/'.$guru_mapel->id.'/update') }}" method="post"> --}}
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="guru_id">Nama Guru</label>
                    <select id="guru_id" name="guru_id" class="select2bs4 form-control @error('guru_id') is-invalid @enderror">
                       {{-- guru_id ditarik dari tabel guru_mengajar --}}
                        <option value=""> -- nama guru --</option>
                        @foreach ($guru as $data)
                        <option value="{{ $data->id }}" 
                        @if ($guru_mapel->guru_id == $data->id)
                            selected
                            @endif 
                        >{{ $data->nama_guru }}</option>

                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="mapel_id">Nama Mata Pelajaran</label>
                  <select id="mapel_id" name="mapel_id" class="select2bs4 form-control @error('mapel_id') is-invalid @enderror">
                      <option value=""> -- Pilih nama mata pelajaran -- </option>
                      @foreach ($mapel as $data)
                      <option value="{{ $data->id }}" 
                      @if ($guru_mapel->mapel_id == $data->id)
                          selected
                          @endif 
                      >{{ $data->nama_mapel }}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="tahun_ajaran_id">Tahun ajaran</label><br>
                  <select name="tahun_ajaran_id" id="tahun_ajaran_id" class="select2bs4 form-control @error('tahun_ajaran_id') is-invalid @enderror">
                  <option value="">--pilih tahun ajaran--</option>
                  @foreach($tahun_ajaran as $data)     
                  <option value="{{$data->id}}"
                  @if ($guru_mapel->tahun_ajaran_id == $data->id)
                    selected
                    @endif
                  >{{$data->tahun_ajaran}}</option>
                  @endforeach
                </select>
                </div>
                </form>




                {{-- <div class="form-group">
                  <label for="paket_id">Jurusan</label>
                  <select id="paket_id" name="paket_id" class="form-control @error('paket_id') is-invalid @enderror select2bs4">
                    <option value="">-- Pilih Paket Mapel --</option>
                    <option value="3"
                        @if ($mapel->paket_id == '3')
                            selected
                        @endif
                    ></option>
                    @foreach ($paket as $data)
                      <option value="{{ $data->id }}"
                        @if ($mapel->paket_id == $data->id)
                            selected
                        @endif
                      >{{ $data->ket }}</option>
                    @endforeach
                  </select> --}}
                {{-- </div>
                <div class="form-group">
                    <label for="kelompok">Kelompok</label>
                    <select id="kelompok" name="kelompok" class="select2bs4 form-control @error('kelompok') is-invalid @enderror">
                        <option value="">-- Pilih Kelompok Mapel --</option>
                        <option value="A"
                            @if ($mapel->kelompok == 'A')
                                selected
                            @endif
                        >Pelajaran Umum</option>
                        <option value="B"
                            @if ($mapel->kelompok == 'B')
                                selected
                            @endif
                        >Ekstrakulikuler</option> --}}
                        {{-- <option value="C"
                            @if ($mapel->kelompok == 'C')
                                selected --}}
                            {{-- @endif --}}
                        {{-- >Pelajaran Keahlian</option> --}}
                    {{-- </select>
                </div> --}}
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="#" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
          {{-- <a href="{{ route('guru_mapel.store')}}" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a> --}}
          {{-- <a href="{{url('update-guru-mapel',$data->id)}}" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a> --}}
          <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Update</button>
          {{-- <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Update</button> --}}
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
        window.location="{{ route('guru_mapel.index') }}";
        });
    });
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataGuruMapel").addClass("active");
</script>
@endsection