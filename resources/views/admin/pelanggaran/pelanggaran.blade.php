@extends('template_backend.home')
@section('heading', 'Pelanggaran')
@section('page')
  <li class="breadcrumb-item active">Data Pelanggaran</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
      @if (Auth::user()->role != "Guru")
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".tambah-pelanggaran">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp Data Pelanggaran
                </button>
            </h3>
        </div>
        @endif
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>nomor induk siswa</th>
                    <th>Nama Siswa</th>
                    <th>Kelas Siswa</th>
                    <th>Keterangan</th>
                    <th>Tanggal Pelanggaran</th>
                    <th>Sanksi</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($pelanggaran as $result => $data)
                <tr>
                    {{-- id_pelanggaran	kelas_siswa_id	ket_pelanggaran	tanggal_pelanggaran	sanksi	created_at	updated_at	 --}}

                    <td>{{ $loop->iteration }}</td>
                    <td>{{$data->siswa->no_induk}}</td> 
                    <td>{{ $data->siswa->nama_siswa }}</td>
                    <td>{{ $data->siswa->kelas->nama_kelas}}</td>
                    <td>{{$data->ket_pelanggaran}}</td>
                    <td>{{$data->tanggal_pelanggaran}}</td>
                    <td>{{$data->sanksi}}</td>
                    {{-- @if ( $data->paket_id == 3 )
                      <td>{{ 'Semua' }}</td>
                    @else
                      <td>{{ $data->paket->ket }}</td>
                    @endif
                    <td>{{ $data->kelompok }}</td>
                    <td>
                        <form action="{{ route('mapel.destroy', $data->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('mapel.edit', Crypt::encrypt($data->id)) }}" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
                            <button class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                        </form>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->

<!-- Extra large modal -->
 <div class="modal fade bd-example-modal-md tambah-pelanggaran" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Tambah Data Pelanggaran</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           {{-- disini modal dipannggil dari tombo tambah pelanggaran, ditag kata "data-dismiss ="modal"""  --}}
      <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{ route('pelanggaran.store') }}" method="post">
          {{-- maksud kode routenya aku mau ambil variabel pelanggaran dari kontroller pelanggaran yang ada difungsi store --}}
            @csrf
            <div class="row">
              <div class="col-md-12">
                {{-- <div class="form-group">
                  <label for="siswa_id">nomor induk siswa</label>
                  <input type="text" id="siswa_id" name="siswa_id" class="form-control @error('nama_siswa') is-invalid @enderror" placeholder="{{ __('Nama siswa') }}">
                </div> --}}

                {{-- <div class="form-group">
                    {{-- theSelect --}}
                      {{--<label for="nama_siswa">nama siswa</label><br>
                      <select id="siswa_id" name="siswa_id" class="form-control">
                          <option value="">-- Pilih siswa yang melakukan pelanggaran --</option>
                          @foreach ($siswa as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_siswa }}</option>
                          @endforeach
                      </select>
                </div> --}}
                <div class="form-group">
                  <label for="nama_siswa">nama siswa</label><br>
                  <select   class="js-example-basic-single" id="siswa_id" name="siswa_id" data-width="100%">
                    <option value="">--- pilih nama siswa ---</option>
                    @foreach ($siswa as $data)
                      <option value="{{ $data->id }}">{{ $data->nama_siswa }}</option>
                    @endforeach
                  </select>
                </div>
                {{--<div class="form-group">
                  <label for="nama_kelas">Kelas siswa</label>
                  <select id="kelas_id" name="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror">
                    <option value="">-- Pilih kelas siswa --</option>
                    @foreach ($kelas as $data)
                      <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                    @endforeach
                  </select>
                </div> --}}
                {{-- <div class="form-group">
                  <label for="tahun_ajaran">Tahun Ajaran</label>
                  <select id="tahun_ajaran_id" name="tahun_ajaran_id" class="form-control @error('tahun_ajaran_id') is-invalid @enderror">
                    <option value="">-- Pilih tahun ajaran  --</option>
                    @foreach ($tahun_ajaran as $data)
                      <option value="{{ $data->id }}">{{ $data->tahun_ajaran }}</option>
                    @endforeach
                  </select>
                </div> --}}
                <div class="form-group">
                  <label for="ket_pelanggaran">keterangan pelanggaran</label>
                  <textarea id="ket_pelanggaran" name ="ket_pelanggaran" class="form-control" placeholder="masukkan pelanggaran yang dilakukan" id="ket_pelanggaran" @error('ket_pelanggaran') is-invalid @enderror></textarea>
                </div>
                <div class="form-group">
                  <label for="tanggal_pelanggaran">tanggal pelanggaran</label><br>
                    <input type="date" id="tanggal_pelangggaran" name="tanggal_pelanggaran" class="form-cotrol" @error('tanggal_pelanggaran') is-invalid @enderror>
                </div>
                <div class="form-group">
                  <label for="sanksi">sanksi</label>
                  <textarea id="sanksi" name="sanksi" class="form-control" placeholder="sanksi yang diberikan" id="sanksi" @error('sanksi') is-invalid @enderror></textarea>
                </div>
                {{-- <div class="form-group">
                    <label for="kelompok">Kelompok</label>
                    <select id="kelompok" name="kelompok" class="select form-control @error('kelompok') is-invalid @enderror">
                      <option value="">-- Pilih Kelompok Mapel --</option>
                      <option value="A">Pelajaran Umum</option>
                      <option value="B">Ekstrakulikuler</option>
                    </select>
                </div> --}}
              </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
            <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Tambahkan</button>
        </form>
    </div>
    </div>
  </div>
</div>
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
    $("#DataPelanggaran").addClass("active");
		//$(".theSelect").select2();//untuk select option 
  </script>
@endsection