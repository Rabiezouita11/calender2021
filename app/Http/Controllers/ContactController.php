<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
   
    
    public function contact(){
$users=\App\User::all();
$pointages=\App\Pointage::all();
$a= DB::table('contacts')->count();
$x= DB::table('pointages')->count();
        $sections=\App\Section::all();
        $contacts=\App\Contact::all();
return view ('admin.contact',compact('sections','users','a','x','pointages'),compact('contacts'));



    }
    
    public function index(){
   

return view ('contact');


    }

    public function AjoutContact(Request $request)
    {
        $this->validate($request, [

            'name' => 'string|nullable|max:255',
            'email' => 'email|nullable|max:255',
            'message' => 'string|nullable|max:255',
            'subject' => 'string|nullable|max:255',


            ]);
     
       $contacts = new \App\Contact();
         $contacts->name=$request['name'];
         $contacts->email=$request['email'];
         $contacts->message=$request['message'];
         $contacts->subject=$request['subject'];
         $contacts->save();

         $contacts=\App\Contact::all();
         return redirect()->route('contact',compact('contacts'))->with('azer','le message a été bien envoyé');
    }


    public function Supp(Request $request)
    {
         $id=$request['id'];
         $contacts=\App\Contact::find($id);
         return view('suppcontact',compact('contacts'));
    }
    
    public function supprimerC(Request $request)
    {
         $id=$request['id'];
         $contacts=\App\Contact::find($id);
    
         $contacts->delete();
    
         $contacts=\App\Contact::all();
         return redirect()->route('contactadmin',compact('contacts'))->with('xxx','les informations ont bien été supprimer');
    }



}
