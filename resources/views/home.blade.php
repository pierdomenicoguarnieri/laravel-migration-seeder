@extends('layout.main')

@section('content')
  <main>
    <div class="pg-main-wrapper px-5 py-5">
      <h1 class="text-center">Lista dei treni</h1>

      <div class="pg-table-container mt-5">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#ID</th>
              <th scope="col">Compagnia</th>
              <th scope="col">Stazione di partenza</th>
              <th scope="col">Stazione di arrivo</th>
              <th scope="col">Orario di partenza</th>
              <th scope="col">Orario di arrivo</th>
              <th scope="col">Codice treno</th>
              <th scope="col">Numero di carrozze</th>
              <th scope="col">Stato del treno</th>
              <th scope="col">Cancellato</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($trains as $train)
            <tr>
              <th scope="row">{{$train->id}}</th>
              <td>{{$train->company}}</td>
              <td>{{$train->starting_station}}</td>
              <td>{{$train->arriving_station}}</td>
              <td>{{$train->starting_time}}</td>
              <td>{{$train->arriving_time}}</td>
              <td>{{$train->train_code}}</td>
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
