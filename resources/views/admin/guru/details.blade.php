@extends('template_backend.home')
@section('heading', 'Details Guru')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('guru.index') }}">Guru</a></li>
  <li class="breadcrumb-item active">Details Guru</li>
@endsection
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="text-center">
        <img src="{{ asset($guru->foto) }}" width="150px">
      </div> 
    </div>
    <div class="container mt-5">
    <form>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Id Card</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->id_card_guru }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Guru</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->nama_guru }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kode Guru</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->kode_guru }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->nip }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NUPTK</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->nuptk }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->jk }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->email }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Agama</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->agama }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">No Telepon</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->telp }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">No HP</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->hp }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->tmp_lahir }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->tgl_lahir }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIK</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->nik }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">No KK</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->no_kk }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->alamat }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">RT</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->rt }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">RW</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->rw }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Dusun</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->nama_dusun }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Desa/Kelurahan</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->desa_kelurahan }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kecamatan</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->kecamatan }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kode Pos</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->kode_pos }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Status Kepegawaian</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->status_kepegawaian->ket_status_kepeg}}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jenis PTK</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->jenis_ptk->ket_jenis_ptk }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tugas Tambahan</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $guru->tugas_tambahan_guru->ket_tugas_tambahan }}" disabled>
        </div>
      </div>
      {{dd($guru->jenis_ptk->ket_jenis_ptk)}}
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal CPNS</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{$detail_guru->tanggal_cpns}}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">SK CPNS</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{$detail_guru->sk_cpns }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">SK Pengangkatan</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{$detail_guru->sk_pengangkatan }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">TMT Penagangkatan</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{$detail_guru->tmt_pengangkatan }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Lembaga Pengangkatan</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{$detail_guru->lembaga_pengangatan }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pangkat Golongan</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{$detail_guru->pangkat_golongan }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{$detail_guru->nama_ibu_kandung }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Sumber Gaji</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{$detail_guru->sumber_gaji }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Status Perkawinan</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{$detail_guru->status_perkawinan }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Suami/Istri</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{$detail_guru->nama_suami_istri }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIP Suami/Istri</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{$detail_guru->nip_suami_istri }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pekerjaan Sumai/Istri</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->pekerjaan_suami_istri }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">TMT PNS</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->tmt_pns }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Lisensi Kepala Sekolah</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->sudah_lisensi_kepsek }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pernah Diklat Kepengawasan</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->pernah_diklat_kepengawasan }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Keahlian Braille</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->keahlian_braille }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Keahlian Bahasa Isyarat</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->keahlian_bahasa_isyarat }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NPWP</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->npwp }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Wajib Pajak</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->nama_wajib_pajak }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kewarganegaraan</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->kewarganegaraan }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Bank</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->bank }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nomor Rekening Bank</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->nomor_rekening_bank }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Rekening</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->rekening_atas_nama }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Karpeg</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->karpeg }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Karis/Karsu</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->karis_karsu }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Lintang</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->lintang }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Bujur</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $detail_guru->bujur }}" disabled>
        </div>
      </div>
    </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
{{-- <div class="col-md-12">
    <div class="card">
        {{-- <div class="card-header">
            <a href="{{ route("guru.mapel", Crypt::encrypt($guru->mapel_id)) }}" class="btn btn-default btn-sm"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a>
        </div> --}}
        {{-- <div class="text-center">
            <img src="{{ asset($guru->foto) }}" class="card-img img-details" alt="..." width="200px">
          </div>
        <div class="card-body">
            <div class="row no-gutters ml-2 mb-2 mr-2">
                <div class="col-md-1 mb-4"></div>
                <div class="col-md-7">
                    <h5 class="card-title card-text mb-2">Nama : {{ $guru->nama_guru }}</h5>
                    <h5 class="card-title card-text mb-2">NIP : {{ $guru->nip }}</h5>
                    <h5 class="card-title card-text mb-2">No Id Card : {{ $guru->id_card }}</h5>
                    <h5 class="card-title card-text mb-2">Kode Jadwal : {{ $guru->kode }}</h5>
                    @if ($guru->jk == 'L')
                        <h5 class="card-title card-text mb-2">Jenis Kelamin : Laki-laki</h5>
                    @else
                        <h5 class="card-title card-text mb-2">Jenis Kelamin : Perempuan</h5>
                    @endif
                    <h5 class="card-title card-text mb-2">Tempat Lahir : {{ $guru->tmp_lahir }}</h5>
                    <h5 class="card-title card-text mb-2">Tanggal Lahir : {{ date('l, d F Y', strtotime($guru->tgl_lahir)) }}</h5>
                    <h5 class="card-title card-text mb-2">No. Telepon : {{ $guru->telp }}</h5>
                </div>
            </div>
        </div>
    </div> --}}
{{-- </div> --}}
@endsection
@section('script')
    <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataGuru").addClass("active");
    </script>
@endsection