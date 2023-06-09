@extends('layout.main')

@section('content')
  <main>
    <div class="pg-main-wrapper px-5 py-5 bg-dark text-white">
      <h1 class="text-center mb-4">Lista dei treni</h1>

      <h2 class="text-center">Treni non cancellati</h2>

      <div class="pg-table-container rounded-3 border border-secondary shadow text-center my-5">
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">Codice treno</th>
              <th scope="col">Compagnia</th>
              <th scope="col">Stazione di partenza</th>
              <th scope="col">Stazione di arrivo</th>
              <th scope="col">Data | orario di partenza</th>
              <th scope="col">Data | orario di arrivo</th>
              <th scope="col">Numero di carrozze</th>
              <th scope="col">Stato ritardo</th>
              <th scope="col">Stato del treno</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($trains_not_cancelled as $train)
            <tr>
              <th scope="row">{{$train->train_code}}</th>
              <th class="text-primary">{{$train->company}}</th>
              <td>{{$train->starting_station}}</td>
              <td>{{$train->arriving_station}}</td>
              <td>{{str_replace(' ', ' | ', $train->starting_time)}}</td>
              <td>{{str_replace(' ', ' | ', $train->arriving_time)}}</td>
              <td>{{$train->number_of_carriages}}</td>
              <td class="{{$train->is_in_time === 0 ? 'text-danger' : 'text-success'}}">{{$train->is_in_time === 0 ? 'In ritardo' : 'In orario'}}</td>
              <td class="{{$train->is_cancelled === 0 ? 'text-danger' : 'text-success'}}">{{$train->is_cancelled === 0 ? 'Cancellato' : 'Non cancellato'}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <h2 class="text-center">Treni cancellati</h2>

      <div class="pg-table-container rounded-3 border border-secondary text-center shadow my-5">
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">Codice treno</th>
              <th scope="col">Compagnia</th>
              <th scope="col">Stazione di partenza</th>
              <th scope="col">Stazione di arrivo</th>
              <th scope="col">Data | orario di partenza</th>
              <th scope="col">Data | orario di arrivo</th>
              <th scope="col">Numero di carrozze</th>
              <th scope="col">Stato ritardo</th>
              <th scope="col">Stato del treno</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($trains_cancelled as $train)
            <tr>
              <th scope="row">{{$train->train_code}}</th>
              <th class="text-primary">{{$train->company}}</th>
              <td>{{$train->starting_station}}</td>
              <td>{{$train->arriving_station}}</td>
              <td>{{str_replace(' ', ' | ', $train->starting_time)}}</td>
              <td>{{str_replace(' ', ' | ', $train->arriving_time)}}</td>
              <td>{{$train->number_of_carriages}}</td>
              <td class="{{$train->is_in_time === 0 ? 'text-danger' : 'text-success'}}">{{$train->is_in_time === 0 ? 'In ritardo' : 'In orario'}}</td>
              <td class="{{$train->is_cancelled === 0 ? 'text-danger' : 'text-success'}}">{{$train->is_cancelled === 0 ? 'Cancellato' : 'Non cancellato'}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </main>
@endsection
