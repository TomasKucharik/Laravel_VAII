<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Pokedex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index()
    {
        $newses = News::all();
//        $newses = DB::table('newses')->paginate(5);
//        if (Auth::user()->getAuthIdentifierName() == 'admin') {
            return view('news.index', compact('newses'));
//        } else {
//            return view('news.userNews', compact('newses'));
//        }
    }

    public function indexUser(){
        $newses = News::all();
        return view('news.userNews', compact('newses'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required|unique:newses',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg ',
            'text' => 'required'
        ]);


        $news = new News;
        $news->title = $request->input('title');
        $news->text = $request->input('text');


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . ' . ' . $extention;
            $file->move('public/images/', $filename);
            $news->image = $filename;
        }
        $news->save();
        return redirect()->route('news.index');


    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|unique:newses',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg | max 10000',
            'text' => 'required | min 10 | max 255'
        ]);

        $news = News::find($id);
        $news->title = $request->input('title');
        $news->text = $request->input('text');


        if ($request->hasfile('image')) {
            $destination = 'public/images/' . $news->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('public/images/', $filename);
            $news->image = $filename;
        }

        $news->update();
        return redirect()->route('news.index');
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $destination = 'public/images/' . $news->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $news->delete();
        return redirect()->route('news.index');
    }

}
