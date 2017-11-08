@extends('layouts.app-panel')

@section('title')
  Summary: Day {{ $day->day }}
@endsection


@section('content')

<form class="form-horizontal" method="get" action="/days/create">

@component('components.static', [
  'fieldname' => 'staticLemonadeSold',
  'name' => 'Lemonade sold',
  'description' => 'XYZ cups'
])
@endcomponent  

@component('components.static', [
  'fieldname' => 'staticStartingBalance',
  'name' => 'Starting balance',
  'description' => $day->starting_balance
])
@endcomponent  

@component('components.static', [
  'fieldname' => 'staticEndingBalance',
  'name' => 'Ending balance',
  'description' => $day->ending_balance
])
@endcomponent  

@component('components.static', [
  'fieldname' => 'staticResources',
  'name' => 'Resources',
  'description' => '???'
])
@endcomponent  

@component('components.static', [
  'fieldname' => 'staticExpired',
  'name' => 'Expired',
  'description' => '??? (ice)'
])
@endcomponent  

  <div class="form-group">
    <div class="col-sm-12 text-center">
      <button class="btn btn-sm btn-default" type="submit">Start a new day!</button>    
    </div>
  </div>

</form>

@endsection