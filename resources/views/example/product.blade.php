<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Page</title>
    <link rel="stylesheet" href="css/product-side.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body >
    @include('layout.header')
    <div class="container">
        @foreach ($product as $prod )
            @if ($prod['rating'] == "Rare")
                <a href="description/{{$prod['id']}}" class="product-card-rare">
                    <div class="product-body">
                        <h5 class="product-name">{{ $prod['name'] }}</h5>
                        <p class="product-rating">{{ $prod['rating'] }}</p>
                        <p class="product-price">{{ $prod['price'] }}</p>
                    </div>
                </a>
            @elseif ($prod['rating'] == "S-Rare")
                <a href="description/{{$prod['id']}}" class="product-card-srare">
                    <div class="product-body">
                        <h5 class="product-name">{{ $prod['name'] }}</h5>
                        <p class="product-rating">{{ $prod['rating'] }}</p>
                        <p class="product-price">{{ $prod['price'] }}</p>
                    </div>
                </a>
            @else
                <a href="description/{{$prod['id']}}" class="product-card-ssrare">
                    <div class="product-body">
                        <h5 class="product-name">{{ $prod['name'] }}</h5>
                        <p class="product-rating">{{ $prod['rating'] }}</p>
                        <p class="product-price">{{ $prod['price'] }}</p>
                    </div>
                </a>
            @endif
        @endforeach
    </div>
</body>
</html>
