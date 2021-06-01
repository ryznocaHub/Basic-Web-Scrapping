<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ secure_asset('css/styles.css') }}">
    <title>Praktikum Pwl 02</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h2 class="title-header">Praktikum PWL 02</h2>
        </div>
        <div class="row pb-3">
            @foreach ($beritas as $berita)
            <div class="col-md-3 mt-3">
                <div class="card p-2 border-info" style="width: 16rem;">
                    <img class="card-img-top" src="{{$berita->foto}}" alt="Card image cap">
                    <div class="card-body border-info">
                        <a href="{{$berita->link}}" class="fw-bold"><h5 class="card-title text-info">{{$berita->judul}}</h5></a>
                        <p class="title-source">{{$berita->source}}</p>
                        <p class="title-time">{{$berita->waktu}}</p>
                        <a href="{{$berita->link}}" class="text-info fs-1 fw-bold">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>