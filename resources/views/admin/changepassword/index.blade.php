@extends('template_backend.home')
@section('heading', 'Pelanggaran')
@section('page')
  <li class="breadcrumb-item active">Data Pelanggaran</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".tambah-mapel">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Pelanggaran
                </button>
            </h3>
        </div>







@section('script')
  <script>
    $("#Password").addClass("active");
    $("#liPassword").addClass("menu-open");
    $("#Deskripsi").addClass("active");
  </script>
@endsection