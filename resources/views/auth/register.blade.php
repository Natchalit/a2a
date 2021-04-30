<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A2A - Register</title>

    {{-- <link href="{{ asset('assets/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

    @include('components.header.header')
    @include('components.homepage.menu.menu')

    <div class="Content">
        <div class="register">
            <h1>Register</h1> <br>

            <form action="{{ route('auth.create') }}" method="post">
                @csrf

                <div class="form-control">
                    <label for="inputUsername" class="">Username:</label>
                    <input type="text" name="username" id="inputUsername" autocomplete="username" autofocus>
                    <span class="text-danger"><br>@error('username'){{ $message }} @enderror</span>
                </div>
                <div class="form-control">
                    <label for="inputPassword" class="">Password:</label>
                    <input type="password" name="password" id="inputPassword" autocomplete="password" autofocus>
                    <span class="text-danger"><br>@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="form-control">
                    <label for="inputFname" class="">First Name:</label>
                    <input type="text" name="fname" id="inputFname" autocomplete="fname" autofocus>
                    <span class="text-danger"><br>@error('fname'){{ $message }} @enderror</span>
                </div>
                <div class="form-control">
                    <label for="inputLname" class="">Last Name:</label>
                    <input type="text" name="lname" id="inputLname" autocomplete="lname" autofocus>
                    <span class="text-danger"><br>@error('lname'){{ $message }} @enderror</span>
                </div>
                <div class="form-control">
                    <label for="inputAddress" class="">Address:</label>
                    <input type="text" name="address" id="inputAddress" autocomplete="address" autofocus>
                    <span class="text-danger"><br>@error('address'){{ $message }} @enderror</span>
                </div>
                <div class="form-control">
                    <label for="inputTel" class="">Phone Number:</label>
                    <input type="text" name="tel" id="inputTel" autocomplete="tel" autofocus>
                    <span class="text-danger"><br>@error('tel'){{ $message }} @enderror</span>
                </div>
                <div class="form-control">
                    <label for="inputLine" class="">Line ID:</label>
                    <input type="text" name="line" id="inputLine" autocomplete="line" autofocus>
                    <span class="text-danger"><br>@error('line'){{ $message }} @enderror</span>
                </div>

                <div class="form-control">
                    <button class="button-g" type="submit">Register</button>
                </div>
                <br>
                <a href="login">I already have account</a>
            </form>
        </div>
    </div>

    @include('components.footer.footer')

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>