<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN ACCOUNT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @if(Session::has('Success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('Success') }}
        </div>
    @endif
    <form class="row g-3" action="{{ route('loginadminaction') }}" method="post">
        @csrf
        <div>
            <ul class="nav justify-content-center">
                <h2>Library Website</h2>
            </ul>
            <ul class="nav justify-content-center">
                <h4>Login Admin</h4>
            </ul>
        </div>
        @if (session('Error'))
        <div class="alert alert-danger">
            <b>Mohon Maaf Email,Password,Admin ID Anda Salah</b> {{ session('Error') }}
        </div>
        @endif
            <div class="col-md-6">
                <label for="inputAddress2" class="form-label">Admin ID</label>
                <input name="adminid" type="text" class="form-control" id="AdminID" placeholder="MRID*****" required>
              </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input name="email" type="email" class="form-control" id="inputUsername4"  placeholder="name@example.com" required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Pass******" required>
            </div>
        <div>
          <button type="submit" class="btn btn-primary btn-block">Login As Admin</button>
        </div>
      </form>

  </body>
</html>
