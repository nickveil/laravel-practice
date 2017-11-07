<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = \App\Game::all();
        return view('games.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Create a new game
        $game = new \App\Game;
        $game->user_id = \Auth::user()->id;
        $game->save();

        // Create day 1 for the new game
        $day = new \App\Day;
        $day->day = 1;
        $day->game_id = $game->id;
        $day->condition_id = 3;
        $day->temperature = 75;
        $day->save();

        // Redirect to day 1 for the new game
        return redirect('/days/' . $day->id);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = \App\Game::find($id);
        if ($game->is_done) {
            return view('games.show', compact('game'));
        }
        else {
            $day = $game->current_day();
            return view('days.edit', compact('game', 'day'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = \App\Game::find($id);
        $game->delete();
        return redirect('home');
    }
}
