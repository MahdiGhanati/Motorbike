<?php

namespace App\Http\Controllers;

use App\Bike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        return view('user.home');
    }

    public function bikelist()
    {
        $bikes = Bike::sortable()->paginate(5);
        return view('user.bikelist', compact('bikes'));
    }

    public function filterbike(Request $request)
    {
        $color = $request->color;
        $bikes = Bike::sortable()->where('color', '=', $color)->paginate(5);
        return view('user.bikelist', compact('bikes'));
    }

    public function showbike($request)
    {
        $id = $request;
        $bike = DB::table('bikes')->where('id', '=', $id)->get();
        return view('user.showbike', compact('bike'));
    }

}
