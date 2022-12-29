@extends('template_backend.home')
@section('heading', 'Log Rapor')
@section('page')
<li class="breadcrumb-item active"><a href="{{ route('log_rapor.index') }}">Siswa</a></li>
  <li class="breadcrumb-item active">Log Siswa</li>
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
                <th scope="col">Kelas Siswa Id Old</th>
                <th scope="col">Kelas Siswa Id New</th>
                <th scope="col">Mapel Id Old</th>
                <th scope="col">Mapel Id New</th>
                <th scope="col">Wali Kelas Old</th>
                <th scope="col">Wali Kelas New</th>
                <th scope="col">Semester Id Old</th>
                <th scope="col">Semester Id New</th>
                <th scope="col">Nilai Pengetahuan Id Old</th>
                <th scope="col">Nilai Pengetahuan Id New</th>
                <th scope="col">Predikat Pengetahuan Old</th>
                <th scope="col">Predikat Pengetahuan New</th>
                <th scope="col">Nilai Keterampilam Old</th>
                <th scope="col">Nilai Keterampilam New</th>
                <th scope="col">Predikat Keterampilan Old</th>
                <th scope="col">Predikat Keterampilan New</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
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
@endsection
@section('script')
    <script>
        $("#ViewLog").addClass("active");
        $("#liViewLog").addClass("menu-open");
        $("#LogRapor").addClass("active");
    </script>
@endsection