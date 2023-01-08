@livewireStyles
@extends('template_backend.home')
@section('heading', 'Data Siswa')
@section('page')
  <li class="breadcrumb-item active">Data Siswa</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            @if (Auth::user()->role != 'BK')
            <h3 class="card-title">
                <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Siswa
                </button>
                <a href="{{ route('siswa.export_excel') }}" class="btn btn-success btn-sm my-3" target="_blank"><i class="nav-icon fas fa-file-export"></i> &nbsp; EXPORT EXCEL</a>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#importExcel">
                    <i class="nav-icon fas fa-file-import"></i> &nbsp; IMPORT EXCEL
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#dropTable">
                    <i class="nav-icon fas fa-minus-circle"></i> &nbsp; Drop
                </button>
            </h3>
            @endif
        </div>
        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="{{ route('siswa.import_excel') }}" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
							@csrf
                            <div class="card card-outline card-primary">
                                <div class="card-header">
                                    <h5 class="modal-title">Petunjuk :</h5>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <h3>Pastikan Data yang Diimport Sudah Sesuai dengan Fieldnya!</h3>
                                    </ul>
                                </div>
                            </div>
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>
        <div class="modal fade" id="dropTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="{{ route('siswa.deleteAll') }}">
                    @csrf
                    @method('delete')
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Sure you drop all data?</h5>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cencel</button>
							<button type="submit" class="btn btn-danger">Drop</button>
						</div>
					</div>
				</form>
			</div>
		</div>
        <!-- Filter Data -->
        <h6 class="modal-title">Filter Data</h6>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <label>Angkatan</label>
                    <select id="filter-angkatan" class="form-control">
                        <option value="">--Pilih Angkatan</option>
                        @foreach($siswa as $data)
                        <option value="{{$data->id}}">{{$data->angkatan}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>


        <!-- End Filter Data -->



        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped table-hover">
              <thead>
                
                  <tr>
                      <th>No.</th>
                      <th>Nama Siswa</th>
                      <th>No Induk</th>
                      <th>Kelas</th>
                      <th>angkatan</th>
                      <th>Foto</th>
                      @if (Auth::user()->role != 'BK')
                      <th>Aksi</th>
                      @endif
                  </tr>
              </thead>
              <tbody>
                  @foreach ($siswa as $data)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->nama_siswa }}</td>
                          <td>{{ $data->no_induk }}</td>
                          <td>{{ $data->kelas->nama_kelas }}</td>
                          <td>{{ $data->angkatan }}</td>
                          <td>
                              <a href="{{ asset($data->foto) }}" data-toggle="lightbox" data-title="Foto {{ $data->nama_siswa }}" data-gallery="gallery" data-footer='<a href="{{ route('siswa.ubah-foto', Crypt::encrypt($data->id)) }}" id="linkFotoGuru" class="btn btn-link btn-block btn-light"><i class="nav-icon fas fa-file-upload"></i> &nbsp; Ubah Foto</a>'>
                                  <img src="{{ asset($data->foto) }}" width="130px" class="img-fluid mb-2">
                              </a>
                              {{-- https://siakad.didev.id/siswa/ubah-foto/{{$data->id}} --}}
                          </td>
                          @if (Auth::user()->role != 'BK')
                          <td>
                              <form action="{{ route('siswa.destroy', $data->id) }}" method="post">
                                  @csrf
                                  @method('delete')
                                  <a href="{{ route('siswa.show', Crypt::encrypt($data->id)) }}" class="btn btn-info btn-sm mt-2"><i class="nav-icon fas fa-id-card"></i> &nbsp; Detail</a>
                                  <a href="{{ route('siswa.edit', Crypt::encrypt($data->id
                                  )) }}" class="btn btn-success btn-sm mt-2"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
                                  <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                              </form>
                          </td>
                          @endif
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
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Tambah Data Siswa</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="no_induk">Nomor Induk</label>
                        <input type="number" id="no_induk" name="no_induk" minlength="5" maxlength="5" onkeypress="return inputAngka(event)" class="form-control @error('no_induk') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="nama_siswa">Nama Siswa</label>
                        <input type="text" id="nama_siswa" name="nama_siswa" class="form-control @error('nama_siswa') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <input type="number" id="angkatan" name="angkatan" minlength="4" maxlength="4" class="form-control @error('angkatan') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select id="jk" name="jk" class="select2bs4 form-control @error('jk') is-invalid @enderror">
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tmp_lahir">Tempat Lahir</label>
                        <input type="text" id="tmp_lahir" name="tmp_lahir" class="form-control @error('tmp_lahir') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="number" id="nisn" name="nisn" minlength="10" onkeypress="return inputAngka(event)" class="form-control @error('nisn') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="kelas_id">Kelas</label>
                        <select id="kelas_id" name="kelas_id" class="select2bs4 form-control @error('kelas_id') is-invalid @enderror">
                            <option value="">-- Pilih Kelas --</option>
                            @foreach ($kelas as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telp">Nomor Telpon/HP</label>
                        <input type="number" id="telp" name="telp" onkeypress="return inputAngka(event)" class="form-control @error('telp') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="emailr">Email</label>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select id="agama" name="agama" class="select2bs4 form-control @error('agama') is-invalid @enderror">
                            <option value="">-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Aliran Kepercayaan">Aliran Kepercayaan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="foto">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input @error('foto') is-invalid @enderror" id="foto">
                                <label class="custom-file-label" for="foto">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    {{-- <div class="form-group">
                        <label for="status_id">Status</label>
                        <input type="text" id="status_id" name="status_id" onkeypress="return inputAngka(event)" class="form-control @error('status_id') is-invalid @enderror">
                    </div> --}}
                    <div class="form-group">
                        <label for="anak_ke">Anak Ke</label>
                        <input type="number" id="anak_ke" name="anak_ke" onkeypress="return inputAngka(event)" class="form-control @error('anak_ke') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="dari_berapa_bersaudara">Dari Berapa Bersaudara</label>
                        <input type="number" id="dari_berapa_bersaudara" name="dari_berapa_bersaudara" onkeypress="return inputAngka(event)" class="form-control @error('dari_berapa_bersaudara') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="diterima_di_kelas">Diterima di Kelas</label>
                        <input type="number" id="diterima_di_kelas" minlength="2" maxlength="2" name="diterima_di_kelas" class="form-control @error('diterima_di_kelas') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="diterima_pada_tanggal">Diterima Pada Tanggal</label>
                        <input type="date" id="diterima_pada_tanggal" name="diterima_pada_tanggal" class="form-control @error('diterima_pada_tanggal') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="diterima_semester">Diterima Semester</label>
                        <input type="number" id="diterima_semester" maxlength="1" name="diterima_semester" class="form-control @error('diterima_semester') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="sekolah_asal">Sekolah Asal</label>
                        <input type="text" id="sekolah_asal" name="sekolah_asal" class="form-control @error('sekolah_asal') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="alamat_sekolah_asal">Alamat Asal</label>
                        <input type="text" id="alamat_sekolah_asal" name="alamat_sekolah_asal" class="form-control @error('alamat_sekolah_asal') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="tahun_ijazah_smp">Tahun Ijazah SMP</label>
                        <input type="number" id="tahun_ijazah_smp" minlength="4" maxlength="4" name="tahun_ijazah_smp" class="form-control @error('tahun_ijazah_smp') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="tahun_skhun_smp">Tahun SKHUN SMP</label>
                        <input type="number" id="tahun_skhun_smp" minlength="4" maxlength="4" name="tahun_skhun_smp" class="form-control @error('tahun_skhun_smp') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="nomor_ijazah_smp">Nomor Ijazah SMP</label>
                        <input type="text" id="nomor_ijazah_smp" name="nomor_ijazah_smp" class="form-control @error('nomor_ijazah_smp') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="nomor_skhun_smp">Nomor SKHUN SMP</label>
                        <input type="text" id="nomor_skhun_smp" name="nomor_skhun_smp" class="form-control @error('nomor_skhun_smp') is-invalid @enderror">
                    </div>
                </div>
                <div class="col-md-4">
                    
                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" id="nama_ayah" name="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" id="nama_ibu" name="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="alamat_ayah">Alamat Ayah</label>
                        <input type="text" id="alamat_ayah" name="alamat_ayah" class="form-control @error('alamat_ayah') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="alamat_ibu">Alamat Ibu</label>
                        <input type="text" id="alamat_ibu" name="alamat_ibu" class="form-control @error('alamat_ibu') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="tlp_ayah">Tlp Ayah</label>
                        <input type="text" id="tlp_ayah" name="tlp_ayah" class="form-control @error('tlp_ayah') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="tlp_ibu">Tlp Ibu</label>
                        <input type="text" id="tlp_ibu" name="tlp_ibu" class="form-control @error('tlp_ibu') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                        <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="nama_wali">Nama Wali</label>
                        <input type="text" id="nama_wali" name="nama_wali" class="form-control @error('nama_wali') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_wali">Pekerjaan Wali</label>
                        <input type="text" id="pekerjaan_wali" name="pekerjaan_wali" class="form-control @error('pekerjaan_wali') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="alamat_wali">Alamat Wali</label>
                        <input type="text" id="alamat_wali" name="alamat_wali" class="form-control @error('alamat_wali') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="tlp_wali">Tlp Wali</label>
                        <input type="text" id="tlp_wali" name="tlp_wali" class="form-control @error('pekerjaan_ibu') is-invalid @enderror">
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
        $("#DataSiswa").addClass("active");
    </script>
@endsection
@livewireScripts