@extends('template_backend.home')
@section('heading', 'Pelanggaran')
@section('page')
  <li class="breadcrumb-item active">Data Pelanggaran</li>
@endsection
@section('content')
<div class="col-md-12">
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>nomor induk siswa</th>
                    <th>Nama Siswa</th>
                    <th>Keterangan</th>
                    <th>Tanggal Pelanggaran</th>
                    <th>Sanksi</th>
                    
                </tr>
            </thead>
            <tbody>
                @php
                    $nonya = 1;
                @endphp
                @foreach ($pelanggaran as $data)
                @foreach ($siswanya as $data_siswa)
                <tr>
                    {{-- id_pelanggaran	kelas_siswa_id	ket_pelanggaran	tanggal_pelanggaran	sanksi	created_at	updated_at	 --}}

                    <td>{{$nonya }}</td>
                    <td>{{$data_siswa->no_induk}}</td> 
                    <td>{{$data_siswa->nama_siswa }}</td>
                    <td>{{$data->ket_pelanggaran}}</td>
                    <td>{{$data->tanggal_pelanggaran}}</td>
                    <td>{{$data->sanksi}}</td>
                </tr>
                @php
                    $nonya++;
                @endphp
                @endforeach
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
@endsection
@section('script')
  {{-- script js untuk live search --}}
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.js-example-basic-single').select2();
    });
    // end live search select option
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#PelanggaranSiswa").addClass("active");
		//$(".theSelect").select2();//untuk select option 
  </script>
@endsection