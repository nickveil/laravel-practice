@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Home
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<h2>My Games</h2>

<p><a href="/games/create">Start a new game</a></p>

<p><strong>Active Games</strong></p>
<ul>
    @foreach ($active_games as $game)
        <li>
            <form method="post" action="/games/{{ $game->id }}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button class="btn btn-xs btn-default space-right" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                <a href="/games/{{ $game->id }}">Game {{ $game->id }}</a>
            </form>
        </li>
    @endforeach
</ul>

<p><strong>Finished Games</strong></p>
<ul>
    @foreach ($finished_games as $game)
        <li>
            <form method="post" action="/games/{{ $game->id }}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button class="btn btn-xs btn-default space-right" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                <a href="/games/{{ $game->id }}">Game {{ $game->id }}</a>
            </form>
        </li>
    @endforeach
</ul>

<h2>Leader Board</h2>

<ul>
    <li>Heath - $25,000</li>
    <li>Mario - $12,000</li>
    <li>Luigi - $8,000</li>
</ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
