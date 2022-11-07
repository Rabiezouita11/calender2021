<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Section ;
use Illuminate\Support\Facades\DB;
use app\SalleG;
use App\Admin ;


class ProfilController extends Controller

{
    public function __construct()
{
    $this->middleware('auth:admin');
}
  

    public function profil(){
        $pointages=\App\Pointage::all();
        $admins=\App\Admin::all();

        $sections=\App\Section::all();
        $contacts=\App\Contact::all();
        $groupes=\App\Groupe::all();
        $a= DB::table('contacts')->count();
        $x= DB::table('pointages')->count();

        return view('admin.profiladmin',compact('sections','contacts','groupes','a','x','pointages','admins'));
        
    }
   
    public function modifier(Request $request)
{
    $id=$request['id'];
    $admins=\App\Admin::find($id);
 

     $admins->Fullname = $request['Fullname'];
     $admins->email=$request['email'];
     $admins->Age=$request['Age'];
     $admins->Telephone=$request['Telephone'];
     if($request->hasFile('image')){
        $admins->image=$request->image->store('images');
    }
 
     $admins->update();

 
     return redirect()->route('profilA',compact('admins'))->with('vert','Modification avec succés');

   }
}

