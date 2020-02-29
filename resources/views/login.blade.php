<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="{{ asset('/image/LOGO_KOMDA.PNG') }}" />
    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/login.css') }}" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="{{ route('login')}}">
        {{ csrf_field() }}
      <img class="mb-4" src="{{asset('/image/LOGO_KOMDA.PNG')}}" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Login {{ config('app.name')}}</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail"  name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
