@extends('layouts.auth')

@section('content')
<div class="container">
		<form class="" action="{{ route('login') }}" method="post">
        {{ csrf_field() }}
			<h2>Login Dahulu</h2>
			<label for="">Email/No.Tlp :</label>
			<input id="email" type="email" class="txtb" name="email" value="{{ old('email') }}" required autofocus>
            
            @if ($errors->has('email'))
                <span class="help-block">
                 <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
			<br>
			<label for="">Password :</label>
			<input id="password" type="password" class="txtb form-password" name="password" required>
            @if ($errors->has('password'))
              <span class="help-block">
                 <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif

		<div class="check">
        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
			<span>Ingat Saya</span>
		</div>
            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Masuk</button>
		</form>
		<p class="akun">Belum memiliki akun? Daftar <a href="{{ route('register') }}">Disini</a></p>
	</div>

    
  

@endsection
