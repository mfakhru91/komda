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
    <form class="form-signin" method="post" action="{{ route('register') }}">
        {{ csrf_field() }}
      <img class="mb-4" src="{{ asset('/image/LOGO_KOMDA.PNG') }}" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Register {{ config('app.name')}}</h1>
      <label for="Name" class="sr-only">Name</label>
      <input type="text" id="inputEmail" name="name" class="form-control {{ $errors->has('name')? 'is-invalid' : ''}}" placeholder="name" value="{{ old('name') }}" required autofocus>
      @if($errors->has('name'))
            <div class="invalid-feedback">  
                {{ $errors->first('name') }}
            </div>
        @endif
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control {{ $errors->has('email')? 'is-invalid' : '' }}" placeholder="Email address" value="{{ old('email') }}" required >
      @if($errors->has('email'))
            <div class="invalid-feedback">  
                {{ $errors->first('email') }}
            </div>
        @endif
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control {{ $errors->has('password')? 'is-invalid' : '' }}" placeholder="Password" required>
      @if($errors->has('password'))
            <div class="invalid-feedback">  
                {{ $errors->first('password') }}
            </div>
        @endif
      <label for="inputPassword_confirmation" class="sr-only">Password</label>
      <input type="password" id="inputPassword_confirmation" name="password_confirmation" class="password-confirmation form-control {{ $errors->has('password_confirmation')? 'is-invalid' : '' }}" placeholder="Password Confirmation" required>
      @if($errors->has('password_confirmation'))
            <div class="invalid-feedback">  
                {{ $errors->first('password_confirmation') }}
            </div>
        @endif
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
