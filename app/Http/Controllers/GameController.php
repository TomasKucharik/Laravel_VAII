<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\News;
use App\Models\Pokedex;
use App\Models\Stadion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        if (!Auth::check()) {
            $this->function_alert("najskor sa prihlas ! ");
            return view('home');
        } elseif (Auth::user()->name == 'admin') {
            return view('game.index', compact('games'));
        } else {
            $this->function_alert("Nie si admin, nemas tu co robit!");
            return view('home');
        }
    }

    public function indexUser()
    {
        $games = Game::all();
        return view('game.userGame', compact('games'));
    }

    public function create()
    {
        return view('game.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:games',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
            'release' => 'required|integer|between :1990,2022',
            'description' => 'required|string'
        ]);


        $game = new Game;
        $game->name = $request->input('name');
        $game->description = $request->input('description');
        $game->release = $request->input('release');


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . ' . ' . $extention;
            $file->move('public/images/', $filename);
            $game->image = $filename;
        }
        $game->save();
        return redirect()->route('game.index');


    }

    public function edit($id)
    {
        $game = Game::find($id);
        return view('game.edit', compact('game'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|unique:games',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
            'release' => 'required|integer|between :1990,2022',
            'description' => 'required|string'
        ]);

        $game = Game::find($id);
        $game->name = $request->input('name');
        $game->description = $request->input('description');
        $game->trainer = $request->input('release');


        if ($request->hasfile('image')) {
            $destination = 'public/images/' . $game->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('public/images/', $filename);
            $game->image = $filename;
        }

        $game->update();
        return redirect()->route('game.index');
    }

    public function destroy($id)
    {
        $game = Stadion::find($id);
        $destination = 'public/images/' . $game->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $game->delete();
        return redirect()->route('game.index');
    }


    function function_alert($message)
    {
        echo "<script>alert('$message');</script>";
    }


}
