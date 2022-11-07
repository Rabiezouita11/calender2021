<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section ;
use Illuminate\Support\Facades\DB;




use Illuminate\Support\Facades\Validator;
class SectionController extends Controller
{
    
     public function __construct()
     {
         $this->middleware('auth:admin');
     }
    
    
    
    public function index(){  
     $pointages=\App\Pointage::all();

        $sections=\App\Section::all();
        $contacts=\App\Contact::all();
        $groupes=\App\Groupe::all();
        $a= DB::table('contacts')->count();
        $x= DB::table('pointages')->count();
        return view('admin.section',compact('sections','contacts','groupes','a','x','pointages'));



    }
    public function ShowAddSection()
    {

     $sections=\App\Section::all();
     $niveaux=\App\Niveau::all();

         return view('section.ShowAddSection',compact('sections','niveaux'));
    }

    public function AjoutSection(Request $request)
    {  
        
        $this->validate($request, [

            'nom' => 'required|string|max:255',
            ]);


       $groupes = new \App\Groupe();
       $groupes->nom=$request['nom'];
       $groupes->section=$request['section'];
       $groupes->niveaux=$request['niveaux'];
         $groupes->save();

         $groupes=\App\Groupe::all();
         return redirect()->route('section',compact('groupes'))->with('success','Groupe a bien été ajouté');
       }

      
   
public function DeleteGroupe(Request $request)
{
     $id=$request['id'];
     $groupes=\App\Groupe::find($id);
     return view('section.Delete',compact('groupes'));
}

public function deleteG(Request $request)
{
     $id=$request['id'];
     $groupes=\App\Groupe::find($id);

     $groupes->delete();

     $groupes=\App\Groupe::all();
     return redirect()->route('section',compact('groupes'))->with('xxx','les informations bien été supprimer');
}
public function modifierGroupe(Request $request)
{
     $sections=\App\Section::all();
     $niveaux=\App\Niveau::all();
     $id=$request['id'];
     $groupes=\App\Groupe::find($id);
     return view('section.Update',compact('groupes','sections','niveaux'));
}

public function modifierG(Request $request)
{
    
     $id=$request['id'];
     $groupes=\App\Groupe::find($id);
     $groupes->nom=$request['nom'];
     $groupes->section=$request['section'];
     $groupes->niveaux=$request['niveaux'];

     $groupes->update();

     $groupes=\App\Groupe::all();
     return redirect()->route('section',compact('groupes'))->with('tak','Modification avec succés');

}
     }