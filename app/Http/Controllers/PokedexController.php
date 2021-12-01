<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PokedexController extends Controller
{
    public function index()
    {
        $pokedexes = Pokedex::all();
        return view('pokedex.index', compact('pokedexes'));
    }

    public function create()
    {
        return view('pokedex.create');
    }

    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|unique:pokedexes,name',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
            'hp' => 'required | integer | between:1,10',
            'attack' => 'required | integer | between:1,10',
            'defense' => 'required | integer | between:1,10'


        ]);


        $pokedex = new Pokedex;
        $pokedex->name = $request->input('name');
        $pokedex->hp = $request->input('hp');
        $pokedex->attack = $request->input('attack');
        $pokedex->defense = $request->input('defense');


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . ' . ' . $extention;
            $file->move('public/images/', $filename);
            $pokedex->image = $filename;
        }
        $pokedex->save();
        return redirect()->route('pokedex.index');
        //return view('pokedex . index');


    }

    public function edit($id)
    {
        $pokedex = Pokedex::find($id);
        return view('pokedex.edit', compact('pokedex'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
            'hp' => 'required | integer | between:1,10',
            'attack' => 'required | integer | between:1,10',
            'defense' => 'required | integer | between:1,10'

        ]);

        $pokedex = Pokedex::find($id);
        $pokedex->name = $request->input('name');
        $pokedex->hp = $request->input('hp');
        $pokedex->attack = $request->input('attack');
        $pokedex->defense = $request->input('defense');


        if ($request->hasfile('image')) {
            $destination = 'public/images/' . $pokedex->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extention;
            $file->move('public/images/', $filename);
            $pokedex->image = $filename;
        }

        $pokedex->update();
        return redirect()->route('pokedex.index');
    }

    public function destroy($id)
    {
        $pokedex = Pokedex::find($id);
        $destination = 'public/images/' . $pokedex->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $pokedex->delete();
        return redirect()->route('pokedex.index');
    }

}
