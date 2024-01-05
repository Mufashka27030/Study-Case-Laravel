<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="nav justify-content-end">
        <a type="button" class="btn btn-primary position-relative" href="{{ url('/') }}">
            Log Out
        </a>
    </div>
    <div>
        <ul class="nav justify-content-center">
            <h2>Library Website</h2>
          </ul>
    </div>
    <div>
        <ul class="nav justify-content-center nav-underline">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('peminjamanadmin') }}">Peminjaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('member') }}">Member</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Master</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ url('buku/index') }}">BUKU</a></li>
                </ul>
              </li>
          </ul>
    </div>

    </div>
    <div><br></div>

    <div class="container">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>
</html>
