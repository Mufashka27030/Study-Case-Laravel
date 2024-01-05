<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <form class="row g-3" action="{{ route('loginmemberaction') }}" method="post">
        @csrf
        <div>
            <ul class="nav justify-content-center">
                <h2>Library Website</h2>
              </ul>
              <ul class="nav justify-content-center">
                <h4>Login Member</h4>
            </ul>
        </div>
        @if (session('error'))
        <div class="alert alert-danger">
            <b>Mohon Maaf Email,Password,Member ID Anda Salah</b> {{ session('Error') }}
        </div>
        @endif
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Member ID</label>
            <input name="memberid" type="text" class="form-control" id="MemberID" placeholder="MRID*****" required>
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
            <label class="form-check-label" for="gridCheck">
              Not Have Account Yet?<a href="{{ url('registermember') }}">Register Here!</a>
            </label>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-primary btn-block">Login As Member</button>
          </div>
      </form>
  </body>
</html>
