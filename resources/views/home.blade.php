<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title', 'Train Departures')</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1 class="ms-2">Train Departures:</h1>
    </header>
    
    <main class="container d-flex justify-content-around">
            @foreach ($trains as $train)
                <div class="card d-flex flex-column" style="width: 18rem;">
                    <div class="card-body col-12">
                      <h5 class="card-title"><strong>Azienda:</strong> {{ $train->azienda }}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary"><strong>Stazione partenza:</strong> {{ $train->stazione_partenza }}</h6>
                      <h6 class="card-subtitle mb-2 text-body-secondary"><strong>Stazione arrivo:</strong> {{ $train->stazione_arrivo }}</h6>
                      <p class="card-text"><strong>Orario partenza:</strong> {{ $train->orario_partenza }}</p>
                      <p class="card-text"><strong>Orario arrivo:</strong> {{ $train->orario_arrivo }}</p>
                      <span><strong>Codice treno:</strong> {{ $train->codice_treno }}</span><br>
                      <span><strong>Numero carrozze:</strong> {{ $train->numero_carrozze }}</span><br>
                      <span><strong>In orario:</strong> {{ $train->in_orario ? 'Si' : 'No' }}</span><br>
                      <span><strong>Cancellato:</strong> {{ $train->cancellato ? 'Si' : 'No' }}</span>
                    </div>
                  </div>
            @endforeach
        </ul>
    </main>
    @vite('resources/js/app.js')
</body>
