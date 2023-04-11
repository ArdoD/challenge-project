<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Description</title>
    {{-- <link rel="stylesheet" href="css/product-side.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body style="margin-left: 1vw">
    @include('layout.header')
    <br>
    <br>
    <div class="container-desc">
        @foreach ($product as $prod)
            @if ($prod['id'] == $id)
            <img class="product-img" style="width : 15vw; height : 15vw; margin-bottom: 3vw; margin-left: 1vw" src="{{ asset('images/' . $prod['Image']) }}"
            alt="{{ $prod['name'] }}">
            <p style="font-size: 20px;">Name :  <b>{{$prod['name']}}</b></p>
            <p style="font-size: 20px;">Rarity :  <b>{{$prod['rating']}}</b></p>
            <p style="font-size: 20px;">Price :  <b>{{$prod['price']}}</b></p>
            <p style="font-size: 20px;">Description :  <b>{{$prod['Description']}}</b></p>
            @endif
        @endforeach
    </div>
</body>
</html>
