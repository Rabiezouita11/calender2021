<?php

namespace App\Http\Controllers;
use App\Section ;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PointageController extends Controller

{
    public function index(){
        $c=\App\Convocation::all();

        $plageshoraires=\App\plageshoraires::all();
        $salle_g_s=\App\SalleG::all();
        $sections=\App\Section::all();
        $contacts=\App\Contact::all();
        $groupes=\App\Groupe::all();
return view ('education.pageprofs.pointage',compact('plageshoraires','c','sections','groupes','salle_g_s'));


    }

    public function AffichePointage(Request $request)
{        $c=\App\Convocation::all();

     $id=$request['id'];
     $plageshoraires=\App\plageshoraires::find($id);
     return view('education.pageprofs.pointerici',compact('plageshoraires','c'));
}

public function pointagee(Request $request)
{
    $this->validate($request, [

        'Fullname' => 'string|unique:pointages|max:255',
        ]);

   
        $id=$request['id'];
        $plageshoraires =\App\plageshoraires::find($id);
        if   ( $nmbreprof = $plageshoraires->nmbreprof > 0) 
        $nmbreprof = $plageshoraires->nmbreprof - 1 ;
        else  
        $nmbreprof = $plageshoraires->nmbreprof * 0 ;
     
        $plageshoraires->update(['nmbreprof' => $nmbreprof]);
     
   $pointages = new \App\Pointage();
   $pointages->jour=$request['jour'];
   $pointages->date=$request['date'];
   $pointages->Fullname=$request['Fullname'];
   $pointages->user_id=$request['user_id'];
   
   
   $pointages->save();
  
   
     $pointages=\App\Pointage::all();
     return redirect()->route('pointage',compact('pointages'))->with('success','VOUS AVEZ POINTEZ');
}



public function pointer()
{ 
    
    
    $a= DB::table('contacts')->count();
    $x= DB::table('pointages')->count();
    $pointages=\App\Pointage::all();
    $sections=\App\Section::all();

    $contacts=\App\Contact::all();
    return view ('admin.pointage',compact('pointages','contacts','x','a','sections'));



}
     
public function supprimerpointage(Request $request)
{
     $id=$request['id'];
     $pointages=\App\Pointage::find($id);
     return view('admin.pointagesupp',compact('pointages'));
}

public function pointsupp (Request $request)
{
     $id=$request['id'];
     $pointages=\App\Pointage::find($id);

     $pointages->delete();

     $pointages=\App\Pointage::all();
     return redirect()->route('pointage',compact('pointages'))->with('xxx','les informations bien été supprimer');
}


}
