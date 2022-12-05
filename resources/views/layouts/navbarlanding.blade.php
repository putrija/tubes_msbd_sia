<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/landingpage.css">
  </head>
  <body>
      <!-- Navbar -->
      <section class="Navbar" id="Navbar">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
      <div class="container">
        <h3 class="navbar-brand" href="#">
          <img src="/img//landingimg/logosman14.png" alt="" width="43" class="d-inline-block align-text-center">
          SMA NEGERI 14 MEDAN
        </h3>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="halamanutama">Utama</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/berita">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="artikel">Dokumentasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Kontak</a>
            </li>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
           @php
           session_start();
           if (empty($_SESSION["name"])){
             echo "<a href='login'><button class='btn btn-success me-2' type='button' >Login</button></a>";

           } else if($_SESSION["name"] == true) {
             echo $_SESSION["name"];
           }
           @endphp
  {{-- <button class="btn btn-danger me-2" type="button">Keluar</button> --}}
</div>
          </ul>
        </div>
      </div>
    </nav>
</section>
        <!-- Navbar -->
        <div class="container mt-4">
        @yield('container')
        </div>

    <script src="https://cdn.jsdelivr.net/npm/boopwebtstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>