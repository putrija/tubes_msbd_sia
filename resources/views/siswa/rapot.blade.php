@extends('template_backend.home')
@section('heading', 'Nilai Rapot')
@section('page')
  <li class="breadcrumb-item active">Nilai Rapot</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Nilai Rapot Siswa</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
                <table class="table" style="margin-top: -10px;">
                    <tr>
                        <td>No Induk Siswa</td>
                        <td>:</td>
                        <td>{{ Auth::user()->no_induk }}</td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>:</td>
                        <td class="text-capitalize">{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Nama Kelas</td>
                        <td>:</td>
                        <td>{{ $kelas->nama_kelas }}</td>
                    </tr>
                    <tr>
                        <td>Wali Kelas</td>
                        <td>:</td>
                        <td>{{ $wali_kelas }}</td>
                    </tr>
                    @php
                        $bulan = date('m');
                        $tahun = date('Y');
                    @endphp
                    <tr>
                        <td>Semester</td>
                        <td>:</td>
                        <td>
                            @if ($bulan > 6)
                                {{ 'Semester Ganjil' }}
                            @else
                                {{ 'Semester Genap' }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Tahun Pelajaran</td>
                        <td>:</td>
                        <td>
                            @if ($bulan > 6)
                                {{ $tahun }}/{{ $tahun+1 }}
                            @else
                                {{ $tahun-1 }}/{{ $tahun }}
                            @endif
                        </td>
                    </tr>
                </table>
                <hr>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 mb-3">
                        <br>
                        <h4 class="mb-3">Pengetahuan dan Keterampilan</h4>
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Mata Pelajaran</th>
                                    <th rowspan="2">KKM</th>
                                    <th class="ctr" colspan="2">Pengetahuan</th>
                                    <th class="ctr" colspan="2">Keterampilan</th>
                                </tr>
                                <tr>
                                    <th class="ctr">Nilai</th>
                                    <th class="ctr">Predikat</th>
                                    <th class="ctr">Nilai</th>
                                    <th class="ctr">Predikat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilai as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $mapel->where('id', $data->mapel_id)->value('nama_mapel') }}</td>
                                        <td class="ctr">75</td>
                                        <td class="ctr">{{ $data->nilai_pengetahuan }}</td>
                                        <td class="ctr">{{ $data->predikat_pengetahuan }}</td>
                                        <td class="ctr">{{ $data->nilai_keterampilan }}</td>
                                        <td class="ctr">{{ $data->predikat_keterampilan }}</td>
                                    </tr>
                                @endforeach
                                @php
                                    if($rata_rata_pengetahuan < 75) {
                                        $warna_pengetahuan = 'red';
                                    } else {
                                        $warna_pengetahuan = 'rgb(131, 211, 11)';
                                    }
                                    if($rata_rata_keterampilan < 75) {
                                        $warna_keterampilan = 'red';
                                    } else {
                                        $warna_keterampilan = 'rgb(131, 211, 11)';
                                    }
                                @endphp
                                <td style="background-color:rgb(131, 211, 11);color:aliceblue;font-weight:bold;" colspan="3" class="ctr"> Rata-Rata</td>
                                <td style="background-color:<?= $warna_pengetahuan; ?>;color:aliceblue;font-weight:bold;" colspan="2" class="ctr"> {{ $rata_rata_pengetahuan }}</td>
                                <td style="background-color:<?= $warna_keterampilan; ?>;color:aliceblue;font-weight:bold;" colspan="2" class="ctr"> {{ $rata_rata_keterampilan }}</td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection
@section('script')
    <script>
        $("#RapotSiswa").addClass("active");
    </script>
@endsection