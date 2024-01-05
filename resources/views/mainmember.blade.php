<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  </head>
  <body>
    <div class="row">
        <div class="col">
            <div class="col">
            <form class="nav justify-content-end" action="{{ route('logoutaction') }}" method="Post" class="d-flex" role="search">
             @csrf
              <ul>
                <div>
                    <a type="button" class="btn btn-primary position-relative" href="{{ url('/') }}">
                        Log Out
                    </a>
                </div>
            </ul>
            </form>
            </div>
        </div>
    </div>
    <h2 class="nav justify-content-center">Library Website</h2>
    <div><br></div>
    <div>
        <ul class="nav justify-content-center nav-underline">
            <li class="nav-item">
              <a class="nav-link disabled" aria-current="page" href="{{ url('') }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="">Peminjaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="{{ url('') }}">Member</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link disabled dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Master</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ url('') }}">BUKU</a></li>
                </ul>
              </li>
          </ul>
    </div>

    <div><br></div>

    <div class="container">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
    $(document).ready(function(){
        $('.nama_buku').select2();
    })
    </script>
</body>
</html>
