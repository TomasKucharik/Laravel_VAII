<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Pokedex;
use App\Models\Stadion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class StadionController extends Controller
{
    public function index()
    {
        $stadions = Stadion::all();
        if (!Auth::check()) {
            $this->function_alert("najskor sa prihlas ! ");
            return view('home');
        } elseif (Auth::user()->name == 'admin') {
            return view('stadion.index', compact('stadions'));
        } else {
            $this->function_alert("Nie si admin, nemas tu co robit!");
            return view('home');
        }


    }

    public function indexUser()
    {
        $stadions = Stadion::all();
        return view('stadion.userStadion', compact('stadions'));
    }

    public function create()
    {
        return view('stadion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:stadions',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
            'description' => 'required|string',
            'trainer' => 'required|string'
        ]);


        $stadion = new Stadion;
        $stadion->name = $request->input('name');
        $stadion->description = $request->input('description');
        $stadion->trainer = $request->input('trainer');


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . ' . ' . $extention;
            $file->move('public/images/', $filename);
            $stadion->image = $filename;
        }
        $stadion->save();
        return redirect()->route('stadion.index');


    }

    public function edit($id)
    {
        $stadion = Stadion::find($id);
        return view('stadion.edit', compact('stadion'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|unique:stadions',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
            'description' => 'required|string',
            'trainer' => 'required|string'
        ]);

        $stadion = Stadion::find($id);
        $stadion->name = $request->input('name');
        $stadion->description = $request->input('description');


        if ($request->hasfile('image')) {
            $destination = 'public/images/' . $stadion->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('public/images/', $filename);
            $stadion->image = $filename;
        }

        $stadion->update();
        return redirect()->route('stadion.index');
    }

    public function destroy($id)
    {
        $stadion = Stadion::find($id);
        $destination = 'public/images/' . $stadion->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $stadion->delete();
        return redirect()->route('stadion.index');
    }

    function function_alert($message)
    {
        echo "<script>alert('$message');</script>";
    }

}
