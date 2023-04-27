<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

  <body>

    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><i class="bi bi-phone-flip logo"></i> PENDAFTARAN</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>

          <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo01" >
                    @if (Auth::user()->role_id == 1)
                        <li><a href="dashboard" @if (request()->Route()->uri == 'dashboard' || request()->Route()->uri == 'Edit-siswa/{id}')
                            class="active"
                             @endif>Dashboard</a></li>

                        <li><a href="datauser" @if (request()->Route()->uri == 'datauser' || request()->Route()->uri == 'User-add'|| request()->Route()->uri == 'edituser'|| request()->Route()->uri == 'tambahuser'|| request()->Route()->uri == 'edituser/{id}')
                            class="active"
                             @endif>Data Pengguna</a></li>

                        <li><a href="datapendaftar" @if (request()->Route()->uri == 'datapendaftar')
                            class="active"
                             @endif>Tambah Pendaftar</a></li>

                        <li><a href="tambahsiswa"  @if (request()->Route()->uri == 'tambahsiswa')
                            class="active"
                             @endif>Tambah Siswa</a></li>

                        <li><a href="logout">Logout</a></li>
                    @endif
                    @if (Auth::user()->role_id == 2)
                    <li><a href="verifikasi" @if (request()->route()->uri == 'verifikasi') class = "active"

                        @endif>Verifikasi Pendaftar</a></li>
                    <li><a href="logout">Logout</a></li>
                    @endif
                    @if (Auth::user()->role_id == 3)
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="logout">Logout</a></li>
                    @endif
                </div>
                <div class="content col-lg-10 p-5">
                    @yield('content')
                </div>
              </div>
            </div>
    </div>








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
  </body>

</html>
