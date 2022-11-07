<?php

namespace App\Http\Controllers;
use App\calendrier;
use App\Section;
use App\Niveau;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CalendrierController extends Controller
{
       
    public function __construct()
    {
        $this->middleware('auth:admin'); 
    }
   
      public function calendrier(){
        $contacts=\App\Contact::all();
        $pointages=\App\Pointage::all();

        $plageshoraires=\App\plageshoraires::all();
        $a= DB::table('contacts')->count();
        $x= DB::table('pointages')->count();
        $sections = Section::get(['id', 'nom','type']);
        $niveaux = niveau::get(['id', 'nom']);
       
              
         return view('affich_calendrier' , compact('sections' , 'niveaux','a','x','contacts','pointages'));
            
      }


       public function index()
       {  $contacts=\App\Contact::all();
            $pointages=\App\Pointage::all();

            $groupes=\App\Groupe::all();
            $a= DB::table('contacts')->count();
            $x= DB::table('pointages')->count();
            $sections=\App\Section::all();
            $niveaux=\App\Niveau::all();
            $matieres=\App\Matiere::all();
            $salle_g_s=\App\SalleG::all();
            $plageshoraires=\App\plageshoraires::all();
            $calendriers=\App\Calendrier::all();
            return view('admin.calendrier',compact('sections','niveaux','calendriers','a','x','contacts','groupes','plageshoraires','salle_g_s','matieres','pointages'));

        }
        
       public function SG()
       {  $contacts=\App\Contact::all();
        $pointages=\App\Pointage::all();
        $emploi=\App\Emploi::all();
        $groupes=\App\Groupe::all();
        $a= DB::table('contacts')->count();
        $x= DB::table('pointages')->count();
        $sections=\App\Section::all();
        $niveaux=\App\Niveau::all();
        $matieres=\App\Matiere::all();
        $salle_g_s=\App\SalleG::all();
        $plageshoraires=\App\plageshoraires::all();
        $calendriers=\App\Calendrier::all();
            return view('admin.tabsalle',compact('emploi','sections','niveaux','calendriers','a','x','contacts','groupes','plageshoraires','salle_g_s','matieres','pointages'));
       }

       public function ajouterCal()
       {        $calendriers=\App\Calendrier::all();

        $matieres=\App\Matiere::all();
        $sections=\App\Section::all();
        $niveaux=\App\Niveau::all();
        $plageshoraires=\App\plageshoraires::all();

            return view('admin.ajoutercalender',compact('sections','niveaux','plageshoraires','matieres'));
       }
   
       public function AjoutCalender(Request $request)
       {  
           
 
   
          $calendriers = new \App\Calendrier();
          $calendriers->niveaux=$request['niveaux'];
          $calendriers->section=$request['section'];
          $calendriers->matiere=$request['matiere'];
          $calendriers->dateD=$request['dateD'];
          $calendriers->jour=$request['jour'];
          $calendriers->hd=$request['hd'];
          $calendriers->hf=$request['hf'];
          $calendriers->type=$request['type'];

            $calendriers->save();
  
         $calendriers=\App\Calendrier::all();
            return redirect()->route('calendrier',compact('calendriers'))->with('success','ligne bien été ajouté');
          }

       public function affiche (Request $request) 
{

    $id=$request['id'];
    $calendriers=\App\Calendrier::find($id);



    return view('admin.affichecalendrier',compact('sections','niveaux','calendriers','a','x','contacts','groupes','plageshoraires','salle_g_s','matieres','pointages'));
}
public function sallegroupe()
{
    $emplois=\App\Emploi::all();
    $contacts=\App\Contact::all();
    $pointages=\App\Pointage::all();

    $groupes=\App\Groupe::all();
    $a= DB::table('contacts')->count();
    $x= DB::table('pointages')->count();
    $sections=\App\Section::all();
    $niveaux=\App\Niveau::all();
    $matieres=\App\Matiere::all();
    $salle_g_s=\App\SalleG::all();
    $plageshoraires=\App\plageshoraires::all();
    $calendriers=\App\Calendrier::all();
    return view('admin.ajoutersalleetgroupe',compact('emplois','sections','niveaux','calendriers','a','x','contacts','groupes','plageshoraires','salle_g_s','matieres','pointages'));

}
public function ajouterS()
{     
    $emplois=\App\Emploi::all();
    $salle_g_s=\App\SalleG::all();
    $groupes=\App\Groupe::all();



 $plageshoraires=\App\plageshoraires::all();

     return view('admin.emploi',compact('emplois','plageshoraires','salle_g_s','groupes'));
}

public function Ajouter(Request $request)
{  
    
   

   $grp="";
   foreach($request['groupe'] as $g){
       $grp=$grp." ".$g;
   }
   $emplois = new \App\Emploi();
   $emplois->jour=$request['jour'];
   $emplois->date=$request['date'];
   $emplois->hd=$request['hd'];
   $emplois->hf=$request['hf'];
   $emplois->Groupe=$grp;
   $emplois->Salle=$request['salle'];

     $emplois->save();

 
     return redirect()->route('mm',compact('emplois'))->with('success','ligne bien été ajouté');
   }
   public function emploi(){
    $contacts=\App\Contact::all();
    $pointages=\App\Pointage::all();
    $c=\App\Convocation::all();


    $plageshoraires=\App\plageshoraires::all();
    $a= DB::table('contacts')->count();
    $x= DB::table('pointages')->count();
    $sections = Section::get(['id', 'nom']);
    $niveaux = niveau::get(['id', 'nom']);
    foreach($sections as $section){
      foreach($niveaux as $niv){
          if(($section->type=="master" && $niv->nom=="3")){
          $data[]=[
              $section->nom => [
                  $niv->nom => Calendrier::where('section' , $section->nom )->where('niveaux' , $niv->nom)->first(),
              ], 
          ]; 
        }
      }
    }
          
     return view('education.affichecalender' , compact('c','data','sections' , 'niveaux','a','x','contacts','pointages'));
        
  }


}

