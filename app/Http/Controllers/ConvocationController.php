<?php

namespace App\Http\Controllers;
use App\Convocation ;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConvocationController extends Controller
{
     
    public function index(){
        $pointages=\App\Pointage::all();

        $contacts=\App\Contact::all();
        $sections=\App\Section::all();
        $a= DB::table('contacts')->count();
        $x= DB::table('pointages')->count();

        return view ('convocation.covAdmin',compact('contacts','sections','a','x','pointages'));
        
        
            }
        
            public function AjoutConv(Request $request)
            {
                $this->validate($request, [
        
                    'name' => 'string|nullable|max:255',
                    'email' => 'email|nullable|max:255',
                    'message' => 'string|nullable',
                    'Fullname' => 'string|nullable|max:255',
                    'date' => 'string|nullable|max:255',
                    'time' => 'string|nullable|max:255',

        
                    ]);
             
               $convocations = new \App\Convocation();
                 $convocations->name=$request['name'];
                 $convocations->email=$request['email'];
                 $convocations->message=$request['message'];
                 $convocations->Fullname=$request['Fullname'];
                 $convocations->date=$request['date'];
                 $convocations->time=$request['time'];

                 $convocations->save();
        
                 $convocations=\App\Convocation::all();
                 return redirect()->route('convocationAdmin',compact('convocations'))->with('success','le message a été bien envoyé');
            }
            public function index1()
{   $convocations=\App\Convocation::all();
    return view('convocation.conv',compact('convocations'));




}

public function convocation (Request $request) 
{
    $c=\App\Convocation::all();
    $id=$request['id'];
    $convocations=\App\Convocation::find($id);
 



    return view('convocation.conv',compact('convocations','c'));
}
public function Historique()
{  $pointages=\App\Pointage::all();

    $contacts=\App\Contact::all();
    $sections=\App\Section::all();
    $a= DB::table('contacts')->count();
    $x= DB::table('pointages')->count();


   
    $convocations=\App\Convocation::all();



    return view('convocation.historique',compact('convocations','a','x','contacts','pointages','sections'));}
  
  
    public function voirhistorique (Request $request) 
{     $pointages=\App\Pointage::all();

    $contacts=\App\Contact::all();
    $sections=\App\Section::all();
    $a= DB::table('contacts')->count();
    $x= DB::table('pointages')->count();


    $id=$request['id'];
    $convocations=\App\Convocation::find($id);



    return view('convocation.hisconv',compact('convocations','a','x','contacts','pointages','sections')); }

    















        
}
