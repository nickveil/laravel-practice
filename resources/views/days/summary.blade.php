@extends('layouts.app-panel')

@section('title')
  Summary: Day {{ $day->day }}
@endsection


@section('content')

<form class="form-horizontal" method="get" action="/days/create">

@component('components.summary', [
  'fieldname' => 'staticCups',
  'name' => 'Cups of lemonade sold',
  'description' => $day->cups_sold
])
@endcomponent  

@component('components.summary', [
  'fieldname' => 'staticPrice',
  'name' => 'Price charged per cup',
  'description' => $day->price
])
@endcomponent  

@component('components.summary', [
  'fieldname' => 'staticStartingBalance',
  'name' => 'Starting balance',
  'description' => $day->starting_balance
])
@endcomponent  

@component('components.summary', [
  'fieldname' => 'staticEndingBalance',
  'name' => 'Ending balance',
  'description' => $day->ending_balance
])
@endcomponent  

{!! $day->resource_table() !!}

  <div class="form-group">
    <div class="col-sm-12 text-center">
      <button class="btn btn-sm btn-default" type="submit">Start a new day!</button>    
    </div>
  </div>

</form>

@endsection