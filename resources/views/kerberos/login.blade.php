@extends('kerberos.layouts.main')
@section('header')
	@include('kerberos.partials.htmlheader')
@endsection

@section('body')
<body class="text-center">
    <form class="form-signin" method="post" action="{{ route('login') }}">
      @csrf
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" 
      	name="email"
      	value={{ old('email') }}
      	required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" 
      	name="password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      @if ($errors->has('email'))
	        <span class="invalid-feedback" role="alert">
	            <strong>{{ $errors->first('email') }}</strong>
	        </span>
	    @endif
	    @if ($errors->has('password'))
	        <span class="invalid-feedback" role="alert">
	            <strong>{{ $errors->first('password') }}</strong>
	        </span>
	    @endif
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
    </form>
  </body>
@endsection


