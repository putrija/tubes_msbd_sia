@extends('template_backend.home')
@section('heading', 'Profil')
@section('page')
  <li class="breadcrumb-item active">Profil</li>
@endsection
@section('content')

<style>
  * {
    box-sizing: border-box;
  }
  
  /* Create two equal columns that floats next to each other */
  .column {
    float: left;
    width: 50%;
    padding: 30px;
  }
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  </style>

<div class="col-md-12">
  <div class="card">
    <div class="row">
      <div class="column">
          <table class="table">
          <tbody><tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>Jungkook BTS</td>
          </tr>
          <tr>
            <td>NIP</td>
            <td>:</td>
            <td>9985856331</td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>L</td>
          </tr>
          <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>Medan</td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>01 September 1997</td>
          </tr>
          <tr>
            <td>Status Kepegawaian</td>
            <td>:</td>
            <td>PNS</td>
          </tr>
          <tr>
            <td>Jenis PTK</td>
            <td>:</td>
            <td>Guru Mapel</td>
          </tr>
          <tr>
            <td>Agama</td>
            <td>:</td>
            <td>Katolik</td>
          </tr>
          <tr>
            <td>No Telepon</td>
            <td>:</td>
            <td>L</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td>L</td>
          </tr>
          <tr>
            <td>Status Pernikahan</td>
            <td>:</td>
            <td>L</td>
          </tr>
          </tbody>
        </table>
      </div>
      <div class="column" >
        <img src="/img/male.jpg" width="300px" class="img img-responsive" alt="" style="display: block;margin-left: auto;margin-right: auto;"> <br>
        <a href=""><button class="btn btn-primary" style="display: block;margin-left: auto;margin-right: auto; font-size: x-large">Edit Profil</button></a>
      </div>
    </div>
  </div>
</div>

@endsection
@section('script')
    <script>
        $("#Profil").addClass("active");
    </script>
@endsection