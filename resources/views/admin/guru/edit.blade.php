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
                        <option value=""> -- Pilih Status Kepegawaian -- </option>
                        @foreach ($status_kepegawaian as $data)
                        <option value="{{ $data->id }}" 
                        @if ($guru->status_kepegawaian_id == $data->id)
                            selected
                            @endif 
                        >{{ $data->ket_status_kepeg }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tugas_tambahan_id">Tugas Tambahan Guru</label>
                    <select id="tugas_tambahan_id" name="tugas_tambahan_id" class="select2bs4 form-control @error('tugas_tambahan_id') is-invalid @enderror">
                        <option value="">-- Pilih Tugas Tambahan --</option>
                        @foreach ($tugas_tambahan_guru as $data)
                        <option value="{{ $data->id }}"
                            @if ($guru->tugas_tambahan_id == $data->id)
                                selected 
                                @endif
                            >{{ $data->ket_tugas_tambahan }}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group">
                <label for="jenis_ptk_id">Jenis PTK</label>
                <select id="jenis_ptk_id" name="jenis_ptk_id" class="select2bs4 form-control @error('jenis_ptk_id') is-invalid @enderror">
                    <option value="">-- Pilih Jenis PTK</option>
                    @foreach ($jenis_ptk as $data)
                    <option value="{{ $data->id }}"
                        @if ($guru->jenis_ptk_id == $data->id)
                            selected
                            @endif
                        >{{ $data->ket_jenis_ptk}}</option>
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
                <div class="form-group">
                    <label for="tabel_cpns">Tanggal CPNS</label>
                    <input type="date" id="tanggal_cpns" name="tanggal_cpns" onkeypress="return inputAngka(event)" value="{{ $guru->detail_guru->tanggal_cpns }}" class="form-control @error('hp') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="sk_cpns">SK CPNS</label>
                    <input type="text" id="sk_cpns" name="sk_cpns" value="{{ $guru->detail_guru->sk_cpns }}" class="form-control @error('sk_cpns') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="sk_pengangkatan">SK Pengangkatan</label>
                    <input type="text" id="sk_pengangkatan" name="sk_pengangkatan" value="{{ $guru->detail_guru->sk_pengangkatan }}" class="form-control @error('sk_pengangkatan') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="tmt_pengangkatan">TMT Pengangkatan</label>
                    <input type="date" id="tmt_pengangkatan" name="tmt_pengangkatan" value="{{ $guru->detail_guru->tmt_pengangkatan_pengangkatan }}" class="form-control @error('tmt_pengangkatanpengangkatan') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="lembaga_pendidikan">Lembaga Pendidikan</label>
                    <input type="text" id="tanggal_cpns" name="sk_pengangkatan" value="{{ $guru->detail_guru->lembaga_pendidikan }}" class="form-control @error('lembaga_pendidikan') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="pangkat_golongan">Pangkat Golongan</label>
                    <input type="text" id="pangkat_golongan" name="pangkat_golongann" value="{{ $guru->detail_guru->pangkat_golongan }}" class="form-control @error('pangkat_golongan') is-invalid @enderror">
                </div>
            </div>
          <div class="col-md-3">
            <h4 style="color: white">.</h4>
            
            <div class="form-group">
                <label for="nama_ibu_kandung">Nama Ibu Kandung</label>
                <input type="text" id="nama_ibu_kandung" name="nama_ibu_kandung" value="{{ $guru->detail_guru->nama_ibu_kandung }}" class="form-control @error('nama_ibu_kandung') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="sumber_gaji">Sumber Gaji</label>
                <input type="text" id="sumber_gaji" name="sumber_gaji" value="{{ $guru->detail_guru->sumber_gaji }}" class="form-control @error('sumber_gaji') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="status_perkawanin">Status Perkawinan</label>
                <input type="text" id="status_perkawanin" name="status_perkawanin" value="{{ $guru->detail_guru->status_perkawanin }}" class="form-control @error('status_perkawanin') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="nama_suami_istri">Nama Suami/Istri</label>
                <input type="text" id="nama_suami_istri" name="nama_suami_istri" value="{{ $guru->detail_guru->nama_suami_istri }}" class="form-control @error('nama_suami_istri') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="nip_suami_istri">NIP Suami/Istri</label>
                <input type="number" id="nip_suami_istri" name="nip_suami_istri" value="{{ $guru->detail_guru->nip_suami_istri }}" class="form-control @error('nip_suami_istri') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="pekerjaan_suami_istri">Pekerjaan Suami/Istri</label>
                <input type="text" id="pekerjaan_suami_istri" name="pekerjaan_suami_istri" value="{{ $guru->detail_guru->pekerjaan_suami_istri }}" class="form-control @error('pekerjaan_suami_istri') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="tmt_pns">TMT PNS</label>
                <input type="date" id="tmt_pns" name="tmt_pns" value="{{ $guru->detail_guru->tmt_pns }}" class="form-control @error('tmt_pns') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="lisensi_kepala_sekolah">Lisensi Kepala Sekolah</label>
                <input type="text" id="lisensi_kepala_sekolah" name="lisensi_kepala_sekolah" value="{{ $guru->detail_guru->lisensi_kepala_sekolah }}" class="form-control @error('lisensi_kepala_sekolah') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="diklat_kepegawaian">Diklat Kepegawaian</label>
                <input type="text" id="diklat_kepegawaian" name="diklat_kepegawaian" value="{{ $guru->detail_guru->diklat_kepegawaian }}" class="form-control @error('diklat_kepegawaian') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="keahlian_braille">Keahlian Braille</label>
                <input type="text" id="keahlian_braille" name="keahlian_braille" value="{{ $guru->detail_guru->keahlian_braille }}" class="form-control @error('keahlian_braille') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="keahlian_bahasa_isyarat">Keahlian Bahasa Isyarat</label>
                <input type="text" id="keahlian_bahasa_isyarat" name="keahlian_bahasa_isyarat" value="{{ $guru->detail_guru->keahlian_bahasa_isyarat }}" class="form-control @error('keahlian_bahasa_isyarat') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="npwp">NPWP</label>
                <input type="text" id="npwp" name="npwp" value="{{ $guru->detail_guru->npwp }}" class="form-control @error('npwp') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="nama_wajib_pajak">Nama Wajib Pajak</label>
                <input type="text" id="nama_wajib_pajak" name="nama_wajib_pajak" value="{{ $guru->detail_guru->nama_wajib_pajak }}" class="form-control @error('nama_wajib_pajak') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="kewarganegaraan">Kewarganegaraan</label>
                <input type="text" id="kewarganegaraan" name="kewarganegaraan" value="{{ $guru->detail_guru->kewarganegaraan }}" class="form-control @error('kewarganegaraan') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="bank">Bank</label>
                <input type="text" id="bank" name="bank" value="{{ $guru->detail_guru->bank }}" class="form-control @error('bank') is-invalid @enderror">
            </div>
        </div>

        <div class="col-md-3">
            <h4 style="color: white">.</h4>
            <div class="form-group">
                <label for="nomor_rekening_bank">Nomor Rekening Bank</label>
                <input type="text" id="hp" name="nomor_rekening_bank" value="{{ $guru->detail_guru->nomor_rekening_bank }}" class="form-control @error('nomor_rekening_bank') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="karpeg">Karpeg</label>
                <input type="text" id="karpeg" name="karpeg" value="{{ $guru->detail_guru->karpeg }}" class="form-control @error('karpeg') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="karis_karsu">Karis/Karsu</label>
                <input type="text" id="karis_karsu" name="karis_karsu" value="{{ $guru->detail_guru->karis_karsu }}" class="form-control @error('karis_karsu') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="lintang">Lintang</label>
                <input type="text" id="lintang" name="lintang" value="{{ $guru->detail_guru->lintang }}" class="form-control @error('lintang') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="bujur">Bujur</label>
                <input type="text" id="bujur" name="bujur" value="{{ $guru->detail_guru->bujur }}" class="form-control @error('bujur') is-invalid @enderror">
            </div>


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