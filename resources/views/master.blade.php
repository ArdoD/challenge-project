<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
</head>
<body >
    @include('layout.header')
    <h4 style="margin-top: 3vw; margin-bottom: 1vw; margin-left: 1vw">@yield('judul')</h4>
    @yield('konten')
</body>
</html>
