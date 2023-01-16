<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container py-5">
            <h1 class="fw-bold text-center mb-5">Movies</h1>
            <div class="row justify-content-center">
                @foreach ($movies as $movie)
                    <div class="col-auto">
                        <div class="card mb-4" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title fw-bold">{{$movie->title}}</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item">Original Title: {{$movie->original_title}}</li>
                            <li class="list-group-item">Nationality: {{$movie->nationality}}</li>
                            <li class="list-group-item">Date: {{$movie->date}}</li>
                            <li class="list-group-item">Vote: {{$movie->vote}}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>