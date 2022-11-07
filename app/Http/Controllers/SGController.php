<?php

namespace App\Http\Controllers;
use App\calendrier;
use App\Section;
use App\Niveau;
use App\SG;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SGController extends Controller
{
       
    public function __construct()
    {
        $this->middleware('auth:admin'); 
    }
   
     
       public function Ajouter()

       { $contacts=\App\Contact::all();
     $pointages=\App\Pointage::all();
   $admins=\App\Admin::all();
    $salle_g_s=\App\SalleG::all();
    $sections=\App\Section::all();
    $a= DB::table('contacts')->count();
    $x= DB::table('pointages')->count();
            return view('admin.ajoutersallertgroupe',compact('sections','niveaux','calendriers','emploi','a','x','contacts','groupes','plageshoraires','salle_g_s','matieres','pointages'));
       }
       public function AjouterE(Request $request)
   {  
       
      


      $emploi = new \App\SG();
      $emploi->salle=$request['salle'];
      $emploi->hd=$request['hd'];
      $emploi->groupe=$request['groupe'];
      $emploi->hf=$request['hf'];
      $emploi->date=$request['date'];
      $emploi->jour=$request['jour'];


      
      
        $emploi->save();

        $emploi=\App\SG::all();
        return redirect()->route('Ajouter',compact('emploi'))->with('success','le prof a bien été ajouté');
   }
      }