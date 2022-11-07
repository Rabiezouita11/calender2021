<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
 function index(){


    $m = DB::table('calendriers')->where('section', '=', 'lfsi')->get();


return view ('test',compact('m'));

    
 }
}
