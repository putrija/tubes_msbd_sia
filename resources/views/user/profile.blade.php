@extends('template_backend.home')
@section('heading', 'Edit Profile')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('profile') }}">Pengaturan</a></li>
  <li class="breadcrumb-item active">Edit Profile</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title text-capitalize">Edit Profile {{ Auth::user()->name }}</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('pengaturan.ubah-profile') }}" method="post">
        @csrf
        <div class="card-body">
          @if (Auth::user()->role == "Guru")
            <div class="row">
              <input type="hidden" name="role" value="{{ Auth::user()->guru(Auth::user()->id_card_guru)->role }}">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="name">Nama Guru</label>
                      <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="form-control @error('name') is-invalid @enderror">
                  </div>
                  {{-- <div class="form-group">
                      <label for="mapel_id">Mapel</label>
                      <select id="mapel_id" name="mapel_id" class="select2bs4 form-control @error('mapel_id') is-invalid @enderror">
                          <option value="">-- Pilih Mapel --</option>
                          @foreach ($mapel as $data)
                              <option value="{{ $data->id }}"
                                  @if (Auth::user()->guru(Auth::user()->id_card_guru)->
                                  _id == $data->id)
                                      selected
                                  @endif
                              >{{ $data->nama_mapel }}</option>
                          @endforeach
                      </select>
                  </div> --}}
                  <div class="form-group">
                      <label for="tmp_lahir">Tempat Lahir</label>
                      <input type="text" id="tmp_lahir" name="tmp_lahir" value="{{ Auth::user()->guru(Auth::user()->id_card_guru)->tmp_lahir }}" class="form-control @error('tmp_lahir') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                      <label for="id_card_guru">Nomor ID Card</label>
                      <input type="text" id="id_card_guru" name="id_card_guru" class="form-control" value="{{ Auth::user()->guru(Auth::user()->id_card_guru)->id_card_guru }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control" value="{{ Auth::user()->guru(Auth::user()->id_card_guru)->email }}" disabled>
                </div>
                  <div class="form-group">
                      <label for="telp">Nomor Telpon</label>
                      <input type="text" id="telp" name="telp" onkeypress="return inputAngka(event)" value="{{ Auth::user()->guru(Auth::user()->id_card_guru)->telp }}" class="form-control @error('telp') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                    <label for="telp">Nomor Hp</label>
                    <input type="text" id="telp" name="telp" onkeypress="return inputAngka(event)" value="{{ Auth::user()->guru(Auth::user()->id_card_guru)->hp }}" class="form-control @error('telp') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" id="nip" name="nip" onkeypress="return inputAngka(event)" value="{{ Auth::user()->guru(Auth::user()->id_card_guru)->nip }}" class="form-control @error('nip') is-invalid @enderror" disabled>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select id="jk" name="jk" class="select2bs4 form-control @error('jk') is-invalid @enderror">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="L"
                            @if (Auth::user()->guru(Auth::user()->id_card_guru)->jk == 'L')
                                selected
                            @endif
                        >Laki-Laki</option>
                        <option value="P"
                            @if (Auth::user()->guru(Auth::user()->id_card_guru)->jk == 'P')
                                selected
                            @endif
                        >Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" value="{{ Auth::user()->guru(Auth::user()->id_card_guru)->tgl_lahir }}" class="form-control @error('tgl_lahir') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="kode">Kode Jadwal</label>
                    <input type="text" id="kode" name="kode" class="form-control" value="{{ Auth::user()->guru(Auth::user()->id_card_guru)->kode_guru }}" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="status_kepegawaian_id">Status Kepegawaian</label>
                    <select id="status_kepegawaian_id" name="status_kepegawaian_id" class="select2bs4 form-control @error('status_kepegawaian_id') is-invalid @enderror">
                        <option value=""> -- Pilih Status Kepegawaian -- </option>
                        @foreach ($status_kepegawaian as $data)
                        <option value="{{ $data->id }}" 
                        @if (Auth::user()->guru(Auth::user()->id_card_guru)->status_kepegawaian_id == $data->id)
                            selected
                            @endif 
                        >{{ $data->ket_status_kepeg }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tugas_tambahan_id">Tugas Tambahan Guru</label>
                    <select id="tugas_tambahan_id" name="tugas_tambahan_id" class="select2bs4 form-control @error('tugas_tambahan_id') is-invalid @enderror">
                        <option value=""> -- Pilih Tugas Tambahan -- </option>
                        @foreach ($tugas_tambahan_guru as $data)
                        <option value="{{ $data->id }}" 
                        @if (Auth::user()->guru(Auth::user()->id_card_guru)->tugas_tambahan_id == $data->id)
                            selected
                            @endif 
                        >{{ $data->ket_tugas_tambahan }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="jenis_ptk_id">Jenis PTK</label>
                    <select id="jenis_ptk_id" name="jenis_ptk_id" class="select2bs4 form-control @error('jenis_ptk_id') is-invalid @enderror">
                        <option value=""> -- Pilih Jenis PTK -- </option>
                        @foreach ($jenis_ptk as $data)
                        <option value="{{ $data->id }}" 
                        @if (Auth::user()->guru(Auth::user()->id_card_guru)->jenis_ptk_id == $data->id)
                            selected
                            @endif 
                        >{{ $data->ket_jenis_ptk }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <select id="agama" name="agama" class="select2bs4 form-control @error('agama') is-invalid @enderror">
                        <option value="">-- Pilih Agama--</option>
                        <option value="Islam"
                            @if (Auth::user()->guru(Auth::user()->id_card_guru)->agama == 'Islam')
                                selected
                            @endif
                        >Islam</option>
                        <option value="Katolik"
                            @if (Auth::user()->guru(Auth::user()->id_card_guru)->agama == 'Katolik')
                                selected
                            @endif
                        >Katolik</option>
                        <option value="Kristen"
                            @if (Auth::user()->guru(Auth::user()->id_card_guru)->agama == 'Kristen')
                                selected
                            @endif
                        >Kristen</option>
                        <option value="Buddha"
                            @if (Auth::user()->guru(Auth::user()->id_card_guru)->agama == 'Buddha')
                                selected
                            @endif
                        >Buddha</option>
                        <option value="Konghucu"
                            @if (Auth::user()->guru(Auth::user()->id_card_guru)->agama == 'Konghucu')
                                selected
                            @endif
                        >Konghucu</option>
                        <option value="Hindu"
                            @if (Auth::user()->guru(Auth::user()->id_card_guru)->agama == 'Hindu')
                                selected
                            @endif
                        >Hindu</option>
                        <option value="Aliran Kepercayaan"
                            @if (Auth::user()->guru(Auth::user()->id_card_guru)->agama == 'Aliran Kepercayaan')
                                selected
                            @endif
                        >Aliran Kepercayaan</option>
                    </select>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="form-control" value="{{ Auth::user()->guru(Auth::user()->id_card_guru)->alamat }}">
            </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="number" id="nik" name="nik" class="form-control" value="{{ Auth::user()->guru(Auth::user()->id_card_guru)->nik }}" disabled>
            </div>
            <div class="form-group">
                <label for="no_kk">No KK</label>
                <input type="number" id="no_kk" name="no_kk" class="form-control" value="{{ Auth::user()->guru(Auth::user()->id_card_guru)->no_kk }}" disabled>
            </div>
            <div class="form-group">
                <label for="nuptk">NUPTK</label>
                <input type="number" id="nuptk" name="nuptk" class="form-control" value="{{ Auth::user()->guru(Auth::user()->id_card_guru)->nuptk }}" disabled>
            </div>
            </div>
          @elseif (Auth::user()->role == "Siswa")
            <div class="row" name="role" value="{{ Auth::user()->siswa(Auth::user()->no_induk)->role }}">
              <input type="hidden">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="no_induk">Nomor Induk</label>
                      <input type="text" id="no_induk" name="no_induk" value="{{ Auth::user()->siswa(Auth::user()->no_induk)->no_induk }}" class="form-control" disabled>
                  </div>
                  <div class="form-group">
                      <label for="name">Nama Siswa</label>
                      <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="form-control @error('name') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                      <label for="jk">Jenis Kelamin</label>
                      <select id="jk" name="jk" class="select2bs4 form-control @error('jk') is-invalid @enderror">
                          <option value="">-- Pilih Jenis Kelamin --</option>
                          <option value="L"
                              @if (Auth::user()->siswa(Auth::user()->no_induk)->jk == 'L')
                                  selected
                              @endif
                          >Laki-Laki</option>
                          <option value="P"
                              @if (Auth::user()->siswa(Auth::user()->no_induk)->jk == 'P')
                                  selected
                              @endif
                          >Perempuan</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="tmp_lahir">Tempat Lahir</label>
                      <input type="text" id="tmp_lahir" name="tmp_lahir" value="{{ Auth::user()->siswa(Auth::user()->no_induk)->tmp_lahir }}" class="form-control @error('tmp_lahir') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" id="agama" name="agama" value="{{ Auth::user()->siswa(Auth::user()->no_induk)->agama }}" class="form-control @error('agama') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="angkatan">Angkatan</label>
                    <input type="text" id="angkatan" name="angkatan" value="{{ Auth::user()->siswa(Auth::user()->no_induk)->angkatan }}" class="form-control @error('angkatan') is-invalid @enderror" disabled>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="nisn">NIS</label>
                      <input type="text" id="nisn" name="nisn" onkeypress="return inputAngka(event)" value="{{ Auth::user()->siswa(Auth::user()->no_induk)->nisn }}" class="form-control @error('nisn') is-invalid @enderror" disabled>
                  </div>
                  <div class="form-group">
                      <label for="kelas_id">Kelas</label>
                      <select id="kelas_id" name="kelas_id" class="select2bs4 form-control @error('kelas_id') is-invalid @enderror" disabled>
                          <option value="">-- Pilih Kelas --</option>
                          @foreach ($kelas as $data)
                              <option value="{{ $data->id }}"
                                  @if (Auth::user()->siswa(Auth::user()->no_induk)->kelas_id == $data->id)
                                      selected
                                  @endif
                              >{{ $data->nama_kelas }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="telp">Nomor Telpon/HP</label>
                      <input type="text" id="telp" name="telp" value="{{ Auth::user()->siswa(Auth::user()->no_induk)->telp }}" onkeypress="return inputAngka(event)" class="form-control @error('telp') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                      <label for="tgl_lahir">Tanggal Lahir</label>
                      <input type="date" id="tgl_lahir" name="tgl_lahir" value="{{ Auth::user()->siswa(Auth::user()->no_induk)->tgl_lahir }}" class="form-control @error('tgl_lahir') is-invalid @enderror">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="date" id="alamat" name="alamat" value="{{ Auth::user()->siswa(Auth::user()->no_induk)->alamat }}" class="form-control @error('alamat') is-invalid @enderror">
                </div>
              </div>
            </div>
          @else
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="name">Username</label>
                  <input id="name" type="text" value="{{ Auth::user()->name }}" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="off">
                </div>
              </div>
            </div>
          @endif
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="#" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
          <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Simpan</button>
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
            window.location="{{ route('profile') }}";
        });
    });
</script>
@endsection