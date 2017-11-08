@extends('layouts.app-panel')

@section('title')
  Show Game {{ $game->id }}
@endsection

@section('content')

  <dl>

  @foreach($game->days as $day)

  <p><strong>Day: </strong> {{ $day->day }}</p>
  <ul>
      <li>Ending Balance: {{ $day->ending_balance }}</li>
      <li>Starting Balance: {{ $day->starting_balance }}</li>
      <li>Condition: {{ $day->condition->name }}</li>
      <li>Temperature: {{ $day->temperature }}</li>
  </ul>

  @endforeach

@endsection