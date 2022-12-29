@extends('template_backend.home')
@section('heading', 'Edit Guru')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('guru.index') }}">Guru</a></li>
  <li class="breadcrumb-item active">Edit Guru</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Guru</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('guru.update', $guru->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
                <b><h4>Data Guru (Wajib Diisi)</h4></b>
                <div class="form-group">
                    <label for="nama_guru">Nama Guru</label>
                    <input type="text" id="nama_guru" name="nama_guru" value="{{ $guru->nama_guru }}" class="form-control @error('nama_guru') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="tmp_lahir">Tempat Lahir</label>
                    <input type="text" id="tmp_lahir" name="tmp_lahir" value="{{ $guru->tmp_lahir }}" class="form-control @error('tmp_lahir') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="id_card">Nomor ID Card</label>
                    <input type="text" id="id_card" name="id_card" class="form-control" value="{{ $guru->id_card_guru }}" readonly>
                </div>
                <div class="form-group">
                    <label for="telp">Nomor Telpon</label>
                    <input type="text" id="telp" name="telp" onkeypress="return inputAngka(event)" value="{{ $guru->telp }}" class="form-control @error('telp') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="status_kepegawaian_id">Status Kepegawaian</label>
                    <select id="status_kepegawaian_id" name="status_kepegawaian_id" class="select2bs4 form-control @error('status_kepegawaian_id') is-invalid @enderror">
                        <option value="">{{$status_kepegawaian->ket_status_kepeg}}</option>
                        @foreach ($status_kepegawaian_get as $data)
                        <option value="{{ $data->id }}">{{ $data->ket_status_kepeg }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tugas_tambahan_guru_id">Tugas Tambahan Guru</label>
                    <select id="tugas_tambahan_guru_id" name="tugas_tambahan_guru_id" class="select2bs4 form-control @error('tugas_tambahan_guru_id') is-invalid @enderror">
                        <option value="">{{$tugas_tambahan->ket_tugas_tambahan}}</option>
                        @foreach ($tugas_tambahan_get as $data)
                        <option value="{{ $data->id }}">{{ $data->ket_tugas_tambahan }}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group">
                <label for="tugas_tambahan_guru_id">Jenis PTK</label>
                <select id="tugas_tambahan_guru_id" name="tugas_tambahan_guru_id" class="select2bs4 form-control @error('tugas_tambahan_guru_id') is-invalid @enderror">
                    <option value="">{{$jenis_ptk->ket_jenis_ptk}}</option>
                    @foreach ($jenis_ptk_get as $data)
                    <option value="{{ $data->id }}">{{ $data->ket_tugas_tambahan }}</option>
                @endforeach
                </select>
          </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" id="agama" name="agama" onkeypress="return inputAngka(event)" value="{{ $guru->agama }}" class="form-control @error('agama') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" onkeypress="return inputAngka(event)" value="{{ $guru->alamat }}" class="form-control @error('alamat') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="rt">RT</label>
                    <input type="text" id="rt" name="rt" onkeypress="return inputAngka(event)" value="{{ $guru->rt }}" class="form-control @error('rt') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="rw">RW</label>
                    <input type="text" id="rw" name="rw" onkeypress="return inputAngka(event)" value="{{ $guru->rw }}" class="form-control @error('rw') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="nama_dusun">Nama Dusun</label>
                    <input type="text" id="nama_dusun" name="nama_dusun" onkeypress="return inputAngka(event)" value="{{ $guru->nama_dusun }}" class="form-control @error('nama_dusun') is-invalid @enderror">
                </div>
            </div>
            <div class="col-md-3">
                <h4 style="color: white">.</h4>
                <div class="form-group">
                    <label for="hp">Nomor HP</label>
                    <input type="text" id="hp" name="hp" onkeypress="return inputAngka(event)" value="{{ $guru->hp }}" class="form-control @error('hp') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" id="nip" name="nip" onkeypress="return inputAngka(event)" value="{{ $guru->nip }}" class="form-control @error('nip') is-invalid @enderror" >
                </div>
                <div class="form-group">
                    <label for="nuptk">NUPTK</label>
                    <input type="textnuptk" id="nuptk" name="nuptk" onkeypress="return inputAngka(event)" value="{{ $guru->nuptk }}" class="form-control @error('nip') is-invalid @enderror" >
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select id="jk" name="jk" class="select2bs4 form-control @error('jk') is-invalid @enderror">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="L"
                            @if ($guru->jk == 'L')
                                selected
                            @endif
                        >Laki-Laki</option>
                        <option value="P"
                            @if ($guru->jk == 'P')
                                selected
                            @endif
                        >Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" value="{{ $guru->tgl_lahir }}" class="form-control @error('tgl_lahir') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="kode_guru">Kode Jadwal</label>
                    <input type="text" id="kode" name="kode" class="form-control" value="{{ $guru->kode_guru }}" disabled>
                </div>
                <div class="form-group">
                    <label for="desa_kelurahan">Desa/Kelurahan</label>
                    <input type="text" id="desa_kelurahan" name="desa_kelurahan" value="{{ $guru->desa_kelurahan }}" class="form-control @error('desa_kelurahan') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" id="kecamatan" name="kecamatan" value="{{ $guru->kecamatan }}" class="form-control @error('kecamatan') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="kode_pos">Kode Pos</label>
                    <input type="text" id="kode_pos" name="kode_pos" value="{{ $guru->kode_pos }}" class="form-control @error('kode_pos') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="{{ $guru->email }}" class="form-control @error('email') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" id="nik" name="nik" value="{{ $guru->nik }}" class="form-control @error('nik') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="no_kk">No KK</label>
                    <input type="text" id="no_kk" name="no_kk" value="{{ $guru->no_kk }}" class="form-control @error('no_kk') is-invalid @enderror">
                </div>
            </div>
          </div>
          <div class="col-md-3">

            

          </div>
          {{-- <div class="row">
            <div class="col-md-6">
                <b><h4>Detail Guru</h4></b>
                <div class="form-group">
                    <label for="nuptk">Nama Guru</label>
                    <input type="text" id="nuptk" name="nuptk" value="{{ $detail_guru->nuptk }}" class="form-control @error('nuptk') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="mapel_id">Mapel</label>
                    <select id="mapel_id" name="mapel_id" class="select2bs4 form-control @error('mapel_id') is-invalid @enderror">
                        <option value="">-- Pilih Mapel --</option>
                        @foreach ($mapel as $data)
                            <option value="{{ $data->id }}"
                                @if ($guru->mapel_id == $data->id)
                                    selected
                                @endif
                            >{{ $data->nama_mapel }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tmp_lahir">Tempat Lahir</label>
                    <input type="text" id="tmp_lahir" name="tmp_lahir" value="{{ $guru->tmp_lahir }}" class="form-control @error('tmp_lahir') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="id_card">Nomor ID Card</label>
                    <input type="text" id="id_card" name="id_card" class="form-control" value="{{ $guru->id_card }}" readonly>
                </div>
                <div class="form-group">
                    <label for="telp">Nomor Telpon</label>
                    <input type="text" id="telp" name="telp" onkeypress="return inputAngka(event)" value="{{ $guru->telp }}" class="form-control @error('telp') is-invalid @enderror">
                </div>
            </div>
          </div> --}}
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="{{ route('guru.index') }}" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
          <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Tambahkan</button>
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
        window.location="{{ route('guru.mapel', Crypt::encrypt($guru->mapel_id)) }}";
        });
    });
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataGuru").addClass("active");
</script>
@endsection