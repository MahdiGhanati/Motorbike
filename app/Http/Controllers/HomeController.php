<?php

namespace App\Http\Controllers;

use App\Bike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function add()
    {
        return view('addbike');
    }

    public function addbike(Request $request)
    {
        //return $request->all();
        $bike = new Bike;
        $bike->model = $request->model;
        $bike->company = $request->company;
        $bike->color = $request->color;
        $bike->weight = $request->weight;
        $bike->price = $request->price;

        if ($request->hasFile('image')) {
            $data = $request->input('image');
            $photo = $request->file('image')->getClientOriginalName();
            $destination = public_path() . '/bike_image/';
            $request->file('image')->move($destination, $photo);
            $path = '/bike_image/'.$photo;
            $bike->image = $path;
        }

        $check = $bike->save();
        if($check)
        {
            $success = "Information saved successfully.";
            return redirect('/home')->with('success', $success);//->route('home')
;
        }

    }

    public function bikelist()
    {
        //$sort = request()->sort;->orderBy($sort,'desc')
        ///$bikes = DB::table('bikes')->paginate(5);//->get();
        $bikes = Bike::sortable()->paginate(5);
        return view('bikelist', compact('bikes'));
    }

    public function filterbike(Request $request)
    {
        $color = $request->color;
        //echo $color;
        $bikes = Bike::sortable()->where('color', '=', $color)->paginate(5);
        return view('bikelist', compact('bikes'));
    }

}
