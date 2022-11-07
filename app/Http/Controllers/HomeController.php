<?php

namespace App\Http\Controllers;
use app\Pointage;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       

        return view('home');
    }




    public function affiche($id){

        $niveaux = Niveau::all();

        return view('admin.section')->with('cat', Niveau::find($id))->with('niveaux',$niveaux);





    }
}
