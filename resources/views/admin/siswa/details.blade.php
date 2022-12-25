@extends('template_backend.home')
@section('heading', 'Details Siswa')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('siswa.index') }}">Siswa</a></li>
  <li class="breadcrumb-item active">Details Siswa</li>
@endsection
@section ('content')

<div>
    <img src="{{ ($siswa->foto) }}" class="card-img img-details" alt="...">
</div>



@endsection