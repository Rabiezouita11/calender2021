<?php

namespace App\Http\Controllers;
use App\Matiere ;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class MatiereController extends Controller
{
public function __construct()
{
    $this->middleware('auth:admin');
}

    public function affiche(){
      $pointages=\App\Pointage::all();

      $contacts=\App\Contact::all();
      $sections=\App\Section::all();
      $a= DB::table('contacts')->count();
      $x= DB::table('pointages')->count();
        $matieres=\App\Matiere::all();
      return view('admin.matiere',compact('contacts','sections','a','x','pointages'),compact('matieres')); 
    }
    
    public function ajoutermatiere()
    {

     $sections=\App\Section::all();
     $niveaux=\App\Niveau::all();

         return view('matieres.ajouter',compact('sections','niveaux'));
    }

    public function AjouterM(Request $request)
    {  
        
        $this->validate($request, [

            'nom' => 'required|string|max:255',
            ]);


       $matieres = new \App\Matiere();
       $matieres->nom=$request['nom'];
       $matieres->section=$request['section'];
         $matieres->save();

         $matieres=\App\Matiere::all();
         return redirect()->route('matiere',compact('matieres'))->with('success','matiere a bien été ajouté');
       }
       public function modifiermatiere(Request $request)
{   $sections=\App\Section::all();
  $niveaux=\App\Niveau::all();


     $id=$request['id'];
     $matieres=\App\Matiere::find($id);
     return view('matieres.modifier',compact('matieres','sections','niveaux'));
}

public function modifierM(Request $request)
{
    
     $id=$request['id'];
     $matieres=\App\Matiere::find($id);
     $matieres->nom=$request['nom'];
     $matieres->section=$request['section'];

     $matieres->update();

     $matieres=\App\Matiere::all();
     return redirect()->route('matiere',compact('matieres'))->with('tak','Modification avec succés');

}

public function SupprimerMatiere(Request $request)
{
     $id=$request['id'];
     $matieres=\App\Matiere::find($id);
     return view('matieres.supprimer',compact('matieres','niveaux','sections'));
}

public function supprimerM(Request $request)
{
     $id=$request['id'];
     $matieres=\App\Matiere::find($id);

     $matieres->delete();

     $matieres=\App\Matiere::all();
     return redirect()->route('matiere',compact('matieres'))->with('xxx','les informations sont bien été supprimer');
}

}
