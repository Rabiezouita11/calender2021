<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\calendrier;
use App\Section;
use App\Niveau;

class EmploiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    public function calendrier(){
        $contacts=\App\Contact::all();
        $pointages=\App\Pointage::all();

        $plageshoraires=\App\plageshoraires::all();
        $a= DB::table('contacts')->count();
        $x= DB::table('pointages')->count();
        $sections = Section::get(['id', 'nom']);
        $niveaux = niveau::get(['id', 'nom']);
        foreach($sections as $section){
          foreach($niveaux as $niv){
              $data[]=[
                  $section->nom => [
                      $niv->nom => Calendrier::where('section' , $section->nom )->where('niveaux' , $niv->nom)->first(),
                  ], 
              ]; 
          }
        }
              
         return view('affich_calendrier' , compact('data','sections' , 'niveaux','a','x','contacts','pointages'));
            
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
           
          
//    $request-> validateData([
//            'dateD'  =>  'required|date:(y,m,d)|after:now',
//            'dateF'  =>  'required|date|after:dateD'
//    ]);
   
          $calendriers = new \App\Calendrier();
          $calendriers->niveaux=$request['niveaux'];
          $calendriers->section=$request['section'];
          $calendriers->matiere=$request['matiere'];
          $calendriers->dateD=$request['dateD'];
          $calendriers->jour=$request['jour'];
          $calendriers->hd=$request['hd'];
          $calendriers->hf=$request['hf'];
        // $calendriers->request['dateD']=\App\Calendrier::wh('id', '=' )
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

     return view('admin.emploi',compact('emplois','niveaux','plageshoraires','matieres','salle_g_s','groupes'));
}

public function Ajouter(Request $request)
{  
    
   
//    $request-> validateData([
//            'dateD'  =>  'required|date:(y,m,d)|after:now',
//            'dateF'  =>  'required|date|after:dateD'
//    ]);
   $grp="";
   foreach($request['groupe'] as $g){
       $grp=$grp."   ".$g;
   }
   $emplois = new \App\Emploi();
   $emplois->jour=$request['jour'];
   $emplois->date=$request['date'];
   $emplois->hd=$request['hd'];
   $emplois->hf=$request['hf'];
   $emplois->Groupe=$grp;
   $emplois->Salle=$request['salle'];

 // $emplois->request['dateD']=\App\Calendrier::wh('id', '=' )
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
   
          
     return view('education.affichecalender' , compact('c','sections' , 'niveaux','a','x','contacts','pointages'));
        
  }
  public function supprimerSG(Request $request)
{
     $id=$request['id'];
     $emplois=\App\Emploi::find($id);
     return view('admin.SGsupp',compact('emplois'));
}

public function suppSG(Request $request)
{
     $id=$request['id'];
     $emplois=\App\Emploi::find($id);

     $emplois->delete();

     $emplois=\App\Emploi::all();
     return redirect()->route('mm',compact('emplois'))->with('xxx','les informations bien été supprimer');
}



}
