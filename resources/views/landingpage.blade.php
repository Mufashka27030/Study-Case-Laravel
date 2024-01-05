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
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form  class="row g-3">
        <div>
            <ul class="nav justify-content-center">
                <h2>Libary Website</h2>
              </ul>
        </div>
        <div class="nav justify-content-center">
          <a class="btn btn-primary" href="{{ url('loginadmin') }}">Login As Admin</a>
        </div>
        <div class="nav justify-content-center">
            <a class="btn btn-primary" href="{{ url('loginmember') }}">Login As Member</a>
          </div>
      </form>
  </body>
</html>
