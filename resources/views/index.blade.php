<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>All Train List</title>
        @vite('resources/js/app.js')
    </head>
    <body>

        <h1>LISTA DI TUTTI I TRENI</h1>
        <button><a href="/today">Treni in partenza Oggi</a></button>

        <ul class="cards">

            @foreach($trains as $train)
                <li>

                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            {{ $train->company }} <br> Treno codice: {{ $train->train_code }}
                        </div>
                        <ul class="list-group list-group-flush">
                            {{-- <li class="list-group-item">Train code:{{ $train->train_code }}</li> --}}
                            <li class="list-group-item">Luogo partenza: {{ $train->departure_station }}</li>
                            <li class="list-group-item">Luogo arrivo: {{ $train->arrival_station }}</li>
                            <li class="list-group-item">Data partenza: {{ $train->departure_date }}</li>
                            <li class="list-group-item">Ora partenza: {{ $train->departure_time }}</li>
                            <li class="list-group-item">Data arrivo: {{ $train->arrival_date }}</li>
                            <li class="list-group-item">Ora arrivo: {{ $train->arrival_time }}</li>
                            <li class="list-group-item">Numero carrozza: {{ $train->number_of_carriages }}</li>
                            <li class="list-group-item">In orario:
                                @if($train->on_time)
                                    In orario
                                @else
                                    Ritardo
                                @endif
                            </li>
                            <li class="list-group-item">Cancellato:
                                @if($train->deleted)
                                    Sì
                                @else
                                    No
                                @endif
                            </li>
                        </ul>
                    </div>

                </li>
            @endforeach

        </ul>

    </body>
</html>
