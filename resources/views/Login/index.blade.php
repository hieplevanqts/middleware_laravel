<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="/">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="container">
        <div  style="display:block; margin: 0 auto">
        <div class="col-sm-6">
           @if(count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <strong>{{ $error }}</strong>
                @endforeach
           @endif
            <form class="form-signin" action="/login" method="post">
                @csrf
                <h2 class="form-signin-heading">Please sign in</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                @if ($errors->has("username"))
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first("username") }}</strong>
                    </div>
                @endif
                <input name="username" type="email" id="inputEmail" class="form-control" placeholder="Email address" autofocus>
                <hr>
                <label for="inputPassword" class="sr-only">Password</label>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password">
                <hr>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <hr>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              </form>
        </div>
    </div>
      </div> <!-- /container -->
</body>
</html>
