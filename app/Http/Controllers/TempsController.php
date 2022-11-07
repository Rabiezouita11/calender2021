<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TempsController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth:admin');
     }
    public function date()
    {        $sections=\App\Section::all();
        $contacts=\App\Contact::all();
        $pointages=\App\Pointage::all();

        $plageshoraires=\App\plageshoraires::all();
        $a= DB::table('contacts')->count();
        $x= DB::table('pointages')->count();
        return view('admin.plageshoraires',compact('plageshoraires','contacts','sections','a','x','pointages')); 
    }
    public function Ajouterdate()
  {
       return view('temps.ajouter');
  }
  public function AjouterT(Request $request)
    {  
       $plageshoraires = new \App\plageshoraires();
       $plageshoraires->jour=$request['jour'];
       $plageshoraires->heure_debut=$request['heure_debut'];
       $plageshoraires->heure_fin=$request['heure_fin'];
       $plageshoraires->date=$request['date'];
       $plageshoraires->nmbreprof=$request['nmbreprof'];


       
         $plageshoraires->save();

         $plageshoraires=\App\plageshoraires::all();
         return redirect()->route('date',compact('plageshoraires'))->with('success',' les informations ont bien été ajouté');
       }
       public function modifierTemps (Request $request)
       {

            $id=$request['id'];
            $plageshoraires=\App\plageshoraires::find($id);
            return view('temps.modifier',compact('plageshoraires'));
       }
    
       public function modifierT(Request $request)
       {
           
            $id=$request['id'];
            $plageshoraires=\App\plageshoraires::find($id);
            $plageshoraires->jour=$request['jour'];
            $plageshoraires->heure_debut=$request['heure_debut'];
            $plageshoraires->heure_fin=$request['heure_fin'];
            $plageshoraires->date=$request['date'];
            $plageshoraires->nmbreprof=$request['nmbreprof'];
         
     


            $plageshoraires->update();

            $plageshoraires=\App\plageshoraires::all();
            return redirect()->route('date',compact('plageshoraires'))->with('tak','Modification avec succés');

  }

  public function supprimerTemps(Request $request)
  {
       $id=$request['id'];
       $plageshoraires=\App\plageshoraires::find($id);
       return view('temps.supprimer',compact('plageshoraires'));
  }
  
  public function supprimerT(Request $request)
  {
       $id=$request['id'];
       $plageshoraires=\App\plageshoraires::find($id);
  
       $plageshoraires->delete();
  
       $plageshoraires=\App\plageshoraires::all();
       return redirect()->route('date',compact('plageshoraires'))->with('xxx', 'supprission avec succés');
  }

}
