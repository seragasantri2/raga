
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Disini Gratis</title>
	<link rel="stylesheet" href="{{asset('css/daftar.css')}}">
		<meta name="viewreport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="col-sm-10">
	<div class="container">
		<form class="" action="{{ route('register') }}" method="post">
        @csrf
			<h2>Daftar Disini</h2>
			<label for="">Nama Depan</label>
			<input id="first_name" type="text" class="txtb @error('name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

            @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="">Nama Belakang</label>
            <input id="last_name" type="text" class="txtb @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

            @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
			<label for="">Email</label>
			<input id="email" type="email" class="txtb @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
			<label for="">No.Telpon</label>
            <input id="no_telpon" type="text" class="txtb @error('no_telpon') is-invalid @enderror" name="no_telpon" value="{{ old('no_telpon') }}" required autocomplete="no_telpon" autofocus>

            @error('no_telpon')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
			<label for="">Password</label>
            <input id="password" type="password" class="txtb @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
			<label for="">Masukkan Ulang Password</label>
			<input id="password-confirm" type="password" class="txtb" name="password_confirmation" required autocomplete="new-password">
            <label for="">'Alamat</label>
            <input id="alamat" type="text" class="txtb @error('alamat') is-invalid @enderror" name="alamat" required autocomplete="new-password">
            @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <br>
            <button type="submit" class="button">Register</button>
		</form>
		<p class="akun">Sudah memiliki akun? Masuk <a href="{{Route('login')}}">Disini</a></p>
	</div>
	</div>
	</div>



</body>
</html>
		<!-- <form class="" action="login" method="post"> 
			<h2>Daftar</h2>
			
		<p class="login">Sudah punya akun? Silahkan <a href="login.html">Masuk</a></p>-->
		
	

