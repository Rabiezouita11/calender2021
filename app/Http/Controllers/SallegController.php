<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section ;
use Illuminate\Support\Facades\DB;


use app\SalleG;

class SallegController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth:admin');
     }
  public function salle(){
     $pointages=\App\Pointage::all();

    $salle_g_s=\App\SalleG::all();
    $sections=\App\Section::all();
    $contacts=\App\Contact::all();
    $a= DB::table('contacts')->count();
    $x= DB::table('pointages')->count();
   
      return view('admin.salleG',compact('sections','salle_g_s','contacts','a','x','pointages'));
  }

  public function Ajoutersalle()
  {
       return view('salle.ajouter');
  }
  public function AjouterS(Request $request)
    {  
        
       


       $salle_g_s = new \App\SalleG();
       $salle_g_s->numsalle=$request['numsalle'];
    
       
         $salle_g_s->save();

         $salle_g_s=\App\SalleG::all();
         return redirect()->route('salleG',compact('salle_g_s'))->with('success','la salle a bien été ajouté');
       }



public function supprimerSalle(Request $request)
{
     $id=$request['id'];
     $salle_g_s=\App\SalleG::find($id);
     return view('salle.supprimer',compact('salle_g_s'));
}

public function supprimerS(Request $request)
{
     $id=$request['id'];
     $salle_g_s=\App\SalleG::find($id);

     $salle_g_s->delete();

     $salle_g_s=\App\SalleG::all();
     return redirect()->route('salleG',compact('salle_g_s'))->with('xxx','la salle bien été supprimer');
}
public function modifierSalle(Request $request)
{

     $id=$request['id'];
     $salle_g_s=\App\SalleG::find($id);
     return view('salle.modifier',compact('salle_g_s'));
}

public function modifierS(Request $request)
{
    
     $id=$request['id'];
     $salle_g_s=\App\SalleG::find($id);
     $salle_g_s->numsalle=$request['numsalle'];
  
     $salle_g_s->update();

     $salle_g_s=\App\SalleG::all();
     return redirect()->route('salleG',compact('salle_g_s'))->with('tak','la salle  a bien été modifier');

}

}
