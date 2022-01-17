<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PaginationController extends Controller
{
    function index()
    {
        $data = DB::table('stadions')->paginate(5);
        return view('stadion.pagination', compact('data'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('stadions')->paginate(5);
            return view('stadion.pagination_data', compact('data'))->render();
        }
    }
}
?>
