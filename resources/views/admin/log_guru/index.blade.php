@extends('template_backend.home')
@section('heading', 'Log Guru')
@section('page')
<li class="breadcrumb-item active"><a href="{{ route('log_guru.index') }}">Guru</a></li>
  <li class="breadcrumb-item active">Log Guru</li>
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
        <div class="row">
          <div class="container_table" style="max-width:100%; overflow-x:scroll;">
        <table style="min-width: 1500px;" class="table table-bordered">
            <thead style="background-color: rgb(200, 219, 190)">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama Guru Old</th>
                <th scope="col">Nama Guru New</th>
                <th scope="col">Tempat Lahir Old</th>
                <th scope="col">Tempat Lahir New</th>
                <th scope="col">Nomor HP Old</th>
                <th scope="col">Nomor HP New</th>
                <th scope="col">Nomor Telepon Old</th>
                <th scope="col">Nomor Telepon New</th>
                <th scope="col">Jenis Kelamin Old</th>
                <th scope="col">Jenis Kelamin New</th>
                <th scope="col">Tanggal Lahir Old</th>
                <th scope="col">Tanggal Lahir New</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              <tr>
                <th scope="row">{{ $item['id'] }}</th>
                <td>{{ $item['nama_guru_old'] }}</td>
                <td>{{ $item['nama_guru_new'] }}</td>
                <td>{{ $item['tmp_lahir_old'] }}</td>
                <td>{{ $item['tmp_lahir_new'] }}</td>
                <td>{{ $item['hp_old'] }}</td>
                <td>{{ $item['hp_new'] }}</td>
                <td>{{ $item['telp_old'] }}</td>
                <td>{{ $item['telp_new'] }}</td>
                <td>{{ $item['jk_old'] }}</td>
                <td>{{ $item['jk_new'] }}</td>
                <td>{{ $item['tgl_lahir_old'] }}</td>
                <td>{{ $item['tgl_lahir_new'] }}</td>
                <td>{{ $item['status'] }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        </div>
    </div>



  </body>
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
        $("#ViewLog").addClass("active");
        $("#liViewLog").addClass("menu-open");
        $("#LogGuru").addClass("active");
    </script>
@endsection