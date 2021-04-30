<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A2A - Contact</title>

    <link href="{{ asset('assets/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

    @include('components.header.header')
    @include('components.homepage.menu.menu')
    @include('components.checkorder.checkorder')
    @include('components.footer.footer')

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js')}}"></script>
</body>

</html>