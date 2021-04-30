<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A2A - Login</title>

    {{-- <link href="{{ asset('assets/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

    @include('components.header.header')
    @include('components.homepage.menu.menu')

    <div class="Content">
        <div class="login">
            <h1>Sign In</h1> <br>
            <form action="{{ Route('auth.check') }}" method="post">
                @csrf
                <div class="form-control">
                    <label for="inputUsername" class="">Username:</label>
                    <input type="text" name="username" id="inputUsername" autocomplete="username" autofocus value="{{ old('username') }}">
                    <span class="text-danger"><br>@error('username'){{ $message }} @enderror</span>
                </div>
                <div class="form-control">
                    <label for="inputPassword" class="">Password:</label>
                    <input type="password" name="password" id="inputPassword" autocomplete="password" autofocus>
                    <span class="text-danger"><br>@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="form-control">
                    <button class="button-g" type="submit" >Login</button>
                </div>
            </form>
            <h3>Create an new Account <a href="register">Register</a></h3>
        </div>
    </div>

    @include('components.footer.footer')

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>