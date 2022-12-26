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
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    {{-- <th>Id kelas siswa</th> --}}
                    {{-- <th>NIS</th> --}}
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
                    <td>{{ $data->siswa->nama_siswa }}</td>
                    <td>{{ $data->kelas->nama_kelas}}</td>
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
 <div class="modal fade bd-example-modal-md tambah-mapel" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
          @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nama_mapel">Nama Mapel</label>
                  <input type="text" id="nama_mapel" name="nama_mapel" class="form-control @error('nama_mapel') is-invalid @enderror" placeholder="{{ __('Nama Mata Pelajaran') }}">
                </div>
                <div class="form-group">
                  <label for="paket_id">Jurusan</label>
                  <select id="paket_id" name="paket_id" class="form-control @error('paket_id') is-invalid @enderror select2bs4">
                    <option value="">-- Pilih Paket Mapel --</option>
                    @foreach ($paket as $data)
                      <option value="{{ $data->id }}">{{ $data->ket }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="kelompok">Kelompok</label>
                    <select id="kelompok" name="kelompok" class="select2bs4 form-control @error('kelompok') is-invalid @enderror">
                      <option value="">-- Pilih Kelompok Mapel --</option>
                      <option value="A">Pelajaran Umum</option>
                      <option value="B">Ekstrakulikuler</option>
                    </select>
                </div>
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
  <script>
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataPelanggaran").addClass("active");
  </script>
@endsection