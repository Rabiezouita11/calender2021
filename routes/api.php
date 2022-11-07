<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Calendrier;
use App\Section;
use App\Niveau;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* DB::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();


}); */

Route::get('/cal', function(){
        $calendriers = DB::table('calendrier')->get();
        foreach($calendriers as $calendrier){
            $data [] = DB::table('matiere')->where('calendrier_id' , $calendrier->cal_id)->get();
        }
            return $data;
});
