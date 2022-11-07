<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Ordre;
use App\Contact;
use App\Admin;

use App\Section;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()

{     $pointages=\App\Pointage::all();

    $x= DB::table('pointages')->count();
    $a = DB::table('contacts')->count();
    $contacts = Contact::all();
    $sections = Section::all();
    return view('admin.index',compact('a','x','pointages'))->with('sections',$sections)->with('contacts',$contacts);
}
public function index1()
{   $pointages=\App\Pointage::all();

    $x= DB::table('pointages')->count();
    $a = DB::table('contacts')->count();

    $b = DB::table('contacts')->count();
    $contacts = Contact::all();
    $sections = Section::all();
    return view('admin.contact',compact('b','a','x','pointages'))->with('sections',$sections)->with('contacts',$contacts);




}



}

