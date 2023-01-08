@extends('template_backend.home')
@section('heading', 'Dashboard')
@section('page')
  <li class="breadcrumb-item active">Dashboard</li>
@endsection
@section('content')
    <div class="col-md-12" id="load_content">
      <div class="card card-primary">
        <div class="card-body">
          <div class="row">
            <div class="column" >
              <img src="{{ asset('img/sman14Medan.png') }}" alt="Logo SMAN 14 Medan" class="brand-image" style="width: 1cm">
        <span class="brand-text font-weight-bold">SMAN 14 Medan</span>
        <br> <br> <br>
          <h5 style="color:green">Selamat Datang <b>{{Auth::user()->name}}</b> di Sistem Informasi Akademik SMAN 14 Medan   
            <br>
          </h5>
          <h5>Selamat Datang di Sistem Informasi Akademik SMAN 14 Medan <br>
            Sistem Informasi Akademik ini diharapkan: <br>
            - Memudahkan siswa dalam melihat Nilai Rapor secara Online <br>
            - Memudahkan siswa dalam melihat Pelanggaran secara Online <br>
          </h5>
            </div>
            <div class="column">
              <img src="{{ asset('img/landingimg/foto3.png') }}" alt="Logo SMAN 14 Medan" class="brand-image" style="width: 18cm">
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection