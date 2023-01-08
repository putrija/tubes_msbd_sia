<?php 

$variabelnya = $_GET['nisn'];

$conn = mysqli_connect('localhost', 'root', '', 'sman14mdn_sia');

$cari_id_kelas_siswa = "SELECT kelas_id FROM siswa WHERE nisn = '$variabelnya'";
$id_kelas_siswa = mysqli_query($conn, $cari_id_kelas_siswa);
$row = $id_kelas_siswa->fetch_assoc();
$id_kelas_siswa = $row['kelas_id'];

$cari_kelas = "SELECT * FROM kelas WHERE id = '$id_kelas_siswa'";
$kelas_siswa = mysqli_query($conn, $cari_kelas);

$row = $kelas_siswa->fetch_assoc();
$kelas_siswa = $row['jurusan_id'];



?>

<?php if($kelas_siswa == 1) : ?>

    <table summary="This table shows how to create responsive tables using RWD-Table-Patterns' functionality" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Nomor</th>
              <th data-priority="1">Mapel</th>
              <th data-priority="2">Nilai Pengetahuan</th>
              <th data-priority="3">Nilai Keterampilan</th>
            </tr>
          </thead>
          <tbody>
          <tr>
              <td>1</td>
              <td>Pendidikan Agama</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_agama" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_agama" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Pendidikan Kewarganegaraan</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_kewarganegaraan" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_kewarganegaraan" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Bahasa Indonesia</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_bahasa_indonesia" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_bahasa_indonesia" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Fisika</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_fisika" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_fisika" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Kimia</td>
              <td>
                <div class="col-auto">
                  <input name="pengetahuan_kimia" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_kimia" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Biologi</td>
              <td>
                <div class="col-auto">
                  <input name="pengetahuan_biologi" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_biologi" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>Matematika Peminatan</td>
              <td>
                <div class="col-auto">
                  <input name="pengetahuan_matematika_peminatan" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_matematika_peminatan" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>Matematika Wajib</td>
              <td>
                <div class="col-auto">
                  <input name="pengetahuan_matematika_wajib" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_matematika_wajib" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>9</td>
              <td>Bahasa Inggris</td>
              <td>
                <div class="col-auto">
                  <input name="pengetahuan_bahasa_inggris" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_bahasa_inggris" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>10</td>
              <td>Sejarah Indonesia</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_sejarah_indonesia" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_sejarah_indonesia" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>11</td>
              <td>Prakarya</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_prakarya" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_prakarya" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>12</td>
              <td>Pendidikan Jasmani</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_pendidikan_jasmani" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_pendidikan_jasmani" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>13</td>
              <td>Ekonomi</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_ekonomi" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_ekonomi" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
          </tbody>

<?php else :  ?>

          <table summary="This table shows how to create responsive tables using RWD-Table-Patterns' functionality" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Nomor</th>
              <th data-priority="1">Mapel</th>
              <th data-priority="2">Nilai Pengetahuan</th>
              <th data-priority="3">Nilai Keterampilan</th>
            </tr>
          </thead>
          <tbody>
          <tr>
              <td>1</td>
              <td>Pendidikan Agama</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_agama" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_agama" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Pendidikan Kewarganegaraan</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_kewarganegaraan" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_kewarganegaraan" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Bahasa Indonesia</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_bahasa_indonesia" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_bahasa_indonesia" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Sejarah Indonesia</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_sejarah_indonesia" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_sejarah_indonesia" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Prakarya</td>
              <td>
                <div class="col-auto">
                  <input name="pengetahuan_prakarya" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_prakarya" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Pendidikan Jasmani</td>
              <td>
                <div class="col-auto">
                  <input name="pengetahuan_pendidikan_jasmani" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_pendidikan_jasmani" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>Matematika Wajib</td>
              <td>
                <div class="col-auto">
                  <input name="pengetahuan_matematika_wajib" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_matematika_wajib" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>Geografi</td>
              <td>
                <div class="col-auto">
                  <input name="pengetahuan_geografi" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_geografi" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>9</td>
              <td>Sosiologi</td>
              <td>
                <div class="col-auto">
                  <input name="pengetahuan_sosiologi" name="testing" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_sosiologi" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>10</td>
              <td>Sejarah Peminatan</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_sejarah_peminatan" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_sejarah_peminatan" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>11</td>
              <td>Ekonomi</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_ekonomi" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_ekonomi" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
            <tr>
              <td>12</td>
              <td>Bahasa Inggris</td>
              <td>  
                <div class="col-auto">
                <input name="pengetahuan_bahasa_inggris" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
              </div>
            </td>
              <td>
                <div class="col-auto">
                  <input name="keterampilan_bahasa_inggris" type="number" required max="100" min="0" class="form-control" placeholder="Input Nilai">
                </div>
              </td>
            </tr>
          </tbody>
    
<?php endif; ?>
