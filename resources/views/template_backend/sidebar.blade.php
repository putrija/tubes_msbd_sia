<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-success elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link" style="">
        {{-- <img src="{{ asset('img/sman14Medan.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"> --}}
        <img src="{{ asset('img/sman14Medan.png') }}" alt="Logo SMAN 14 Medan" class="brand-image">
        <span class="brand-text font-weight-light">SMAN 14 Medan</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @if (Auth::user()->role == 'Admin' || Auth::user()->role == 'Kepala Sekolah')
                    <li class="nav-item has-treeview" id="liDashboard">
                        <a href="#t" class="nav-link" id="Dashboard">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            <li class="nav-item">
                                <a href="{{ url('/home') }}" class="nav-link" id="Home">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.home') }}" class="nav-link" id="AdminHome">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Dashboard Admin</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview" id="liMasterData">
                        <a href="#" class="nav-link" id="MasterData">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Master Data
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            <li class="nav-item">
                                <a href="{{ route('jadwal.index') }}" class="nav-link" id="DataJadwal">
                                    <i class="fas fa-calendar-alt nav-icon"></i>
                                    <p>Data Jadwal</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('guru.index') }}" class="nav-link" id="DataGuru">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Data Guru</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('kelas.index') }}" class="nav-link" id="DataKelas">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Data Kelas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                {{-- <a href="{{ route('admin.pembagiankelas.index') }}" class="nav-link" id="DataKelas">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Pembagian Kelas</p>
                                </a> --}}
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('siswa.index') }}" class="nav-link" id="DataSiswa">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Data Siswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('mapel.index') }}" class="nav-link" id="DataMapel">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>Data Mapel</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('pelanggaran.index') }}" class="nav-link" id="DataPelanggaran">
                                    <i class="fas fa-exclamation-triangle nav-icon"></i>
                                    <p>Pelanggaran</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.index') }}" class="nav-link" id="DataUser">
                                    <i class="fas fa-user-plus nav-icon"></i>
                                    <p>Data User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('guru_mapel.index') }}" class="nav-link" id="DataGuruMapel">{{--untuk route ini kasih tau matu ditujukan kehalaam blde.php mana. ini mengarahkan kita alamat folder file blade.php yang ingin dituju--}}
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>Data Guru Mapel</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('pembagiankelas.index') }}" class="nav-link" id="DataPembagianKelas">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Pembagian Kelas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('mapel.index') }}" class="nav-link" id="DataMapel">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>Data Jenis PTK</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('jurusan.index') }}" class="nav-link" id="DataJurusan">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>Data Jurusan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('kurikulum.index') }}" class="nav-link" id="DataKurikulum">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>Data Kurikulum</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('mapel.index') }}" class="nav-link" id="DataMapel">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Data Ruangan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('mapel.index') }}" class="nav-link" id="DataMapel">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>Data Semester</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('status_kepeg.index') }}" class="nav-link" id="DataKepegGuru">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>Status Kepeg Guru</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('mapel.index') }}" class="nav-link" id="DataMapel">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>Data Status Siswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('mapel.index') }}" class="nav-link" id="DataMapel">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>Data Tahun Ajaran</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('mapel.index') }}" class="nav-link" id="DataMapel">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>Tugas Tambahan Guru</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('wali_kelas.index') }}" class="nav-link" id="DataWaliKelas">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Data Wali Kelas</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @if (Auth::user()->role == "Admin")
                        <li class="nav-item has-treeview" id="liViewTrash">
                            <a href="#" class="nav-link" id="ViewTrash">
                                <i class="nav-icon fas fa-recycle"></i>
                                <p>
                                    View Trash
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview ml-4">
                                <li class="nav-item">
                                    <a href="{{ route('jadwal.trash') }}" class="nav-link" id="TrashJadwal">
                                        <i class="fas fa-calendar-alt nav-icon"></i>
                                        <p>Trash Jadwal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('guru.trash') }}" class="nav-link" id="TrashGuru">
                                        <i class="fas fa-users nav-icon"></i>
                                        <p>Trash Guru</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('kelas.trash') }}" class="nav-link" id="TrashKelas">
                                        <i class="fas fa-home nav-icon"></i>
                                        <p>Trash Kelas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('siswa.trash') }}" class="nav-link" id="TrashSiswa">
                                        <i class="fas fa-users nav-icon"></i>
                                        <p>Trash Siswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('mapel.trash') }}" class="nav-link" id="TrashMapel">
                                        <i class="fas fa-book nav-icon"></i>
                                        <p>Trash Mapel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('user.trash') }}" class="nav-link" id="TrashUser">
                                        <i class="fas fa-user nav-icon"></i>
                                        <p>Trash User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                    @endif
                    <li class="nav-item has-treeview" id="liNilai">
                        <a href="#" class="nav-link" id="Nilai">
                            <i class="nav-icon fas fa-file-signature"></i>
                            <p>
                                Nilai
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            {{-- <li class="nav-item">
                                <a href="{{ route('ulangan-kelas') }}" class="nav-link" id="Ulangan">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Nilai Ulangan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sikap-kelas') }}" class="nav-link" id="Sikap">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Nilai Sikap</p>
                                </a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{ route('rapor') }}" class="nav-link" id="Rapor">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Nilai Rapor</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('predikat') }}" class="nav-link" id="Deskripsi">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Deskripsi Predikat</p>
                                </a>
                            </li> --}}
                        </ul>
                    </li>
                    <li class="nav-item has-treeview" id="liViewLog">
                        <a href="#" class="nav-link" id="ViewLog">
                            <i class="nav-icon fas fa-archive"></i>
                            <p>
                                Tabel Log
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            <li class="nav-item">
                                <a href="{{ route('log_guru.index') }}" class="nav-link" id="LogGuru">
                                    <i class="fas fa-calendar-alt nav-icon"></i>
                                    <p>Log Guru</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('log_siswa.index') }}" class="nav-link" id="LogSiswa">
                                    <i class="fas fa-calendar-alt nav-icon"></i>
                                    <p>Log Siswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('log_rapor.index') }}" class="nav-link" id="LogRapor">
                                    <i class="fas fa-calendar-alt nav-icon"></i>
                                    <p>Log Rapor</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('log_wali_kelas.index') }}" class="nav-link" id="LogWaliKelas">
                                    <i class="fas fa-calendar-alt nav-icon"></i>
                                    <p>Log Wali Kelas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('log_kelas_siswa.index') }}" class="nav-link" id="LogKelasSiswa">
                                    <i class="fas fa-calendar-alt nav-icon"></i>
                                    <p>Log Pembagian Kelas</p>
                                </a>
                            </li>
                        </ul>
                    </li>    
                    <li class="nav-item has-treeview" id="liViewPassword">
                        <a href="#" class="nav-link" id="ViewPassword">
                            <i class="nav-icon fas fa-archive"></i>
                            <p>
                                Passowrd
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            <li class="nav-item">
                                <a href="{{ route('password.edit') }}" class="nav-link" id="changePassword">
                                    <i class="fas fa-calendar-alt nav-icon"></i>
                                    <p>Change Password</p>
                                </a>
                            </li>
                    {{-- <li class="nav-item">
                        <a href="{{ route('admin.pengumuman') }}" class="nav-link" id="Pengumuman">
                            <i class="nav-icon fas fa-clipboard"></i>
                            <p>Pengumuman</p>
                        </a>
                    </li> --}}
                @elseif (Auth::user()->role == 'Guru' && Auth::user()->guru(Auth::user()->id_card_guru))
                    <li class="nav-item has-treeview">
                        <a href="{{ url('/home') }}" class="nav-link" id="Home">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('jadwal.guru') }}" class="nav-link" id="JadwalGuru">
                            <i class="fas fa-calendar-alt nav-icon"></i>
                            <p>Jadwal</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview" id="liNilaiGuru">
                        <a href="#" class="nav-link" id="NilaiGuru">
                            <i class="nav-icon fas fa-file-signature"></i>
                            <p>
                                Nilai
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            {{-- <li class="nav-item">
                                <a href="{{ route('ulangan.index') }}" class="nav-link" id="UlanganGuru">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Entry Nilai Ulangan</p>
                                </a>
                            </li> --}}
                            @if (
                                Auth::user()->guru(Auth::user()->id_card_guru)->mapel->nama_mapel == "Pendidikan Agama dan Budi Pekerti" ||
                                Auth::user()->guru(Auth::user()->id_card_guru)->mapel->nama_mapel == "Pendidikan Pancasila dan Kewarganegaraan"
                            )
                                {{-- <li class="nav-item">
                                    <a href="{{ route('sikap.index') }}" class="nav-link" id="SikapGuru">
                                        <i class="fas fa-file-alt nav-icon"></i>
                                        <p>Entry Nilai Sikap</p>
                                    </a>
                                </li> --}}
                            @else
                            @endif
                            <li class="nav-item">
                                <a href="{{ route('rapot.index') }}" class="nav-link" id="RapotGuru">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Entry Nilai Rapot</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('nilai.index') }}" class="nav-link" id="DesGuru">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Deskripsi Predikat</p>
                                </a>
                            </li> --}}
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pelanggaran.index') }}" class="nav-link" id="DataPelanggaran">
                            <i class="fas fa-exclamation-triangle nav-icon"></i>
                            <p>Pelanggaran</p>
                        </a>
                    </li>
                @elseif (Auth::user()->role == 'Siswa' && Auth::user()->siswa(Auth::user()->no_induk))
                    <li class="nav-item has-treeview">
                        <a href="{{ url('/') }}" class="nav-link" id="Home">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('jadwal.siswa') }}" class="nav-link" id="JadwalSiswa">
                            <i class="fas fa-calendar-alt nav-icon"></i>
                            <p>Jadwal</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ulangan.siswa') }}" class="nav-link" id="UlanganSiswa">
                            <i class="fas fa-file-alt nav-icon"></i>
                            <p>Ulangan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sikap.siswa') }}" class="nav-link" id="SikapSiswa">
                            <i class="fas fa-file-alt nav-icon"></i>
                            <p>Sikap</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('rapot.siswa') }}" class="nav-link" id="RapotSiswa">
                            <i class="fas fa-file-alt nav-icon"></i>
                            <p>Rapor</p>
                        </a>
                    </li>
                @else
                    <li class="nav-item has-treeview">
                        <a href="{{ url('/') }}" class="nav-link" id="Home">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>