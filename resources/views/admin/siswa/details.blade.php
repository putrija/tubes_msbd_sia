@extends('template_backend.home')
@section('heading', 'Details Siswa')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('siswa.index') }}">Siswa</a></li>
  <li class="breadcrumb-item active">Details Siswa</li>
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
        <img src="{{ asset($siswa->foto) }}" width="150px">
      </div> 
    </div>
    <div class="container mt-5">
    <form>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nomor Induk</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->no_induk }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NISN</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->nisn }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama siswa</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->nama_siswa }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->jk }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Agama</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->agama }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">No Telepon</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->telp }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->tmp_lahir }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->tgl_lahir }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->alamat }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->email }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Angkatan</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->angkatan }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            <input class="form-control" placeholder="{{ $status->ket_status }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Anak Ke</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->anak_ke }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Dari Berapa Bersaudara</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->dari_berapa_bersaudara }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Diterima Di Kelas</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->diterima_di_kelas }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Diterima Pada Tanggal</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->diterima_pada_tanggal }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Diterima Semester</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->diterima_semester }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Sekolah Asal</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->sekolah_asal }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat Sekolah Asal</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->alamat_sekolah_asal }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tahun Ijazah SMP</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->tahun_ijazah_smp }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nomor Ijazah SMP</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->nomor_ijazah_smp }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tahun SKHUN SMP</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->tahun_skhun_smp }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nomor SKHUN SMP</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->nomor_skhun_smp }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Ayah</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->nama_ayah }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Ibu</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->nama_ibu }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat Ayah</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->alamat_ayah }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat Ibu</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->alamat_ibu }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">No Telepon Ayah</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->tlp_ayah }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">No Telepon Ibu</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->tlp_ibu }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->pekerjaan_ayah }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->pekerjaan_ibu }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Wali</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->nama_wali }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pekerjaan Wali</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->pekerjaan_wali }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat Wali</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->alamat_wali }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">No Telepon Wali</label>
        <div class="col-sm-10">
          <input class="form-control" placeholder="{{ $siswa->tlp_wali }}" disabled>
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
            <a href="{{ route("siswa.mapel", Crypt::encrypt($siswa->mapel_id)) }}" class="btn btn-default btn-sm"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a>
        </div> --}}
        {{-- <div class="text-center">
            <img src="{{ asset($siswa->foto) }}" class="card-img img-details" alt="..." width="200px">
          </div>
        <div class="card-body">
            <div class="row no-gutters ml-2 mb-2 mr-2">
                <div class="col-md-1 mb-4"></div>
                <div class="col-md-7">
                    <h5 class="card-title card-text mb-2">Nama : {{ $siswa->nama_siswa }}</h5>
                    <h5 class="card-title card-text mb-2">NIP : {{ $siswa->nip }}</h5>
                    <h5 class="card-title card-text mb-2">No Id Card : {{ $siswa->id_card }}</h5>
                    <h5 class="card-title card-text mb-2">Kode Jadwal : {{ $siswa->kode }}</h5>
                    @if ($siswa->jk == 'L')
                        <h5 class="card-title card-text mb-2">Jenis Kelamin : Laki-laki</h5>
                    @else
                        <h5 class="card-title card-text mb-2">Jenis Kelamin : Perempuan</h5>
                    @endif
                    <h5 class="card-title card-text mb-2">Tempat Lahir : {{ $siswa->tmp_lahir }}</h5>
                    <h5 class="card-title card-text mb-2">Tanggal Lahir : {{ date('l, d F Y', strtotime($siswa->tgl_lahir)) }}</h5>
                    <h5 class="card-title card-text mb-2">No. Telepon : {{ $siswa->telp }}</h5>
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
        $("#DataSiswa").addClass("active");
    </script>
@endsection