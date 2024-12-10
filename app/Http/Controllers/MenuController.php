<?php

namespace App\Http\Controllers;

use App\Models\DishModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        return view('menu');
    }

    public function get_menu(Request $request,DishModel $dishModel)
    {
        if($request->has('tag'))
        {
            return response()->json($dishModel::where('tag',$request->input('tag'))->get());
        }

        return response()->json($dishModel::all());
    }

    public function checkAuth()
    {
        return response()->json(['status_check'=>Auth::check()]);
    }
}
