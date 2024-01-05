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
    @if(Session::has('Error'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('Error') }}
    </div>
    @endif
    <form class="row g-3" action="{{ route('registermemberaction') }}" method="Post" class="d-flex" role="search">
        @csrf
        <div>
            <ul class="nav justify-content-center">
                <h2>Library Website</h2>
            </ul>
            <ul class="nav justify-content-center">
                <h4>Create Account Member</h4>
            </ul>
        </div>
        <div class="col-md-6">
            <label for="inputName4" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="inputName4"  placeholder="Name" required>
          </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input name="email" type="email" class="form-control" id="inputEmail4"  placeholder="@gmail.com" required>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Pass*****" required>
        </div>
        <div class="col-md-6">
          <label for="inputMemberID" class="form-label">Member ID</label>
          <input name="memberid" type="text" class="form-control" id="MemberID" placeholder="MRID*****" required>
        </div>
        <div class="col-12">
            <label class="form-check-label" for="gridCheck">
              Do You Have a Account? <a href="{{ url('loginmember') }}"> Log In!</a>
            </label>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block">Sign in As Member</button>
        </div>
      </form>
  </body>
</html>
