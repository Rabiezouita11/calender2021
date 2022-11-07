<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
// niveau


/* Route::get('/niveaux_{id}', 'HomeController@affiche')->name('affcat');
 */
// 




// admin contact 

Route::get('/contact', 'ContactController@index')->name('contact');
route::get('/logouta', 'LogoutController@index');

Route::namespace('Admin')->group(function()  {

Route::get('/admin/login','Auth\LoginController@showLoginForm')->name('admin.login');
    
Route::post('/admin/login','Auth\LoginController@Login');
 
// // reset password admin 
// Route::get('/admin/password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
// Route::post('/admin/password/reset','Auth\ForgotPasswordController@sendResetLinkEmail');

// // notification sur mailtrap
// Route::get('/admin/password/reset/notification','Auth\ResetPasswordController@showResetForm')->name('password.show');
// Route::get('/admin/password/reset/notification','Auth\ResetPasswordController@reset');

//admin register

Route::get('/admin/register','Auth\RegisterController@showRegistrationForm')->name('admin.register');    
Route::post('/admin/register','Auth\RegisterController@register');

//

Route:: get ('/admin/home','AdminController@index')->name('admin.index');
Route::get('/contactadmin', 'AdminController@index1')->name('contactadmin');



    
});
// section admin
route::get('/section','SectionController@index')->name('section');


//ajouter Groupe
Route::GET('/ShowAddSection',[
    'uses' => 'SectionController@ShowAddSection',
    'as' => 'ShowAddSection'
]);

Route::POST('/AjoutSection',[
    'uses' => 'SectionController@AjoutSection',
    'as' => 'AjoutSection'
]);
//delete Groupe

Route::GET('/DeleteGroupe/{id}',[
    'uses' => 'SectionController@DeleteGroupe',
    'as' => 'DeleteGroupe'
]);

Route::POST('/deleteG',[
    'uses' => 'SectionController@deleteG',
    'as' => 'deleteG'

]);

//modifier Groupe

Route::GET('/modifierGroupe/{id}',[
    'uses' => 'SectionController@modifierGroupe',
    'as' => 'modifierGroupe'
]);


Route::POST('/modifierG',[
    'uses' => 'SectionController@modifierG',
    'as' => 'modifierG'
]);

// ajoute contact

Route::POST('/AjoutContact',[
    'uses' => 'ContactController@AjoutContact',
    'as' => 'AjoutContact'
]);

//ajout salle 

Route::get('/salleG', 'SallegController@salle')->name('salleG');
//boutton ajouter salle
Route::POST('/AjouterS',[
    'uses' => 'SallegController@AjouterS',
    'as' => 'AjouterS'
]);
//afficher formulaire salle 
Route::GET('/Ajoutersalle',[
    'uses' => 'SallegController@Ajoutersalle',
    'as' => 'Ajoutersalle'
]);
//afficher form supprission salle 
Route::GET('/supprimerSalle/{id}',[
    'uses' => 'SallegController@supprimerSalle',
    'as' => 'supprimerSalle'
]);
//boutton supprimer salle
Route::POST('/supprimerS',[
    'uses' => 'SallegController@supprimerS',
    'as' => 'supprimerS'
]);
// modifier salle 

Route::GET('/modifierSalle/{id}',[
    'uses' => 'SallegController@modifierSalle',
    'as' => 'modifierSalle'
]);

Route::POST('/modifierS',[
    'uses' => 'SallegController@modifierS',
    'as' => 'modifierS'
]);



//ajout enseignant

Route::get('/enseignant', 'UserController@yossra')->name('enseignant')->middleware('auth:admin');
//boutton ajouter enseignant
Route::POST('/AjouterE',[
    'uses' => 'UserController@AjouterE',
    'as' => 'AjouterE'
]);
//afficher formulaire enseignant
Route::GET('/Ajouterens',[
    'uses' => 'UserController@Ajouterens',
    'as' => 'Ajouterens'

]);
// modifier enseignant

Route::GET('/modifierens/{id}',[
    'uses' => 'UserController@modifierens',
    'as' => 'modifierens'
]);

Route::POST('/modifierE',[
    'uses' => 'UserController@modifierE',
    'as' => 'modifierE'
]);
//afficher form enseignant 
Route::GET('/supprimerens/{id}',[
    'uses' => 'UserController@supprimerens',
    'as' => 'supprimerens'
]);
//boutton supprimer enseignant
Route::POST('/supprimerE',[
    'uses' => 'UserController@supprimerE',
    'as' => 'supprimerE'
]);
//affiche page temps
Route::get('/date', 'TempsController@temps')->name('date');
// affiche page pointage de l'enseignant
Route::get('/pointage', 'PointageController@index')->name('pointage')->middleware('auth');
// pointer ici 
Route::GET('/AffichePointage/{id}',[
    'uses' => 'PointageController@AffichePointage',
    'as' => 'AffichePointage'
]);
//boutton pointer Prof
Route::POST('/pointagee',[
    'uses' => 'PointageController@pointagee',
    'as' => 'pointagee'
]);

//ajout plageshoraires

Route::get('/date', 'TempsController@date')->name('date');
//boutton ajouter plages horaires
Route::POST('/AjouterT',[
    'uses' => 'TempsController@AjouterT',
    'as' => 'AjouterT'
]);
//afficher formulaire plages horaires 
Route::GET('/Ajouterdate',[
    'uses' => 'TempsController@Ajouterdate',
    'as' => 'Ajouterdate'
]);
// modifier plages horaires

Route::GET('/modifierTemps/{id}',[
    'uses' => 'TempsController@modifierTemps',
    'as' => 'modifierTemps'
]);

Route::POST('/modifierT',[
    'uses' => 'TempsController@modifierT',
    'as' => 'modifierT'
]);
//afficher form supprission plages horaires 
Route::GET('/supprimerTemps/{id}',[
    'uses' => 'TempsController@supprimerTemps',
    'as' => 'supprimerTemps'
]);
//boutton supprimer salle
Route::POST('/supprimerT',[
    'uses' => 'TempsController@supprimerT',
    'as' => 'supprimerT'
]);
//admin poinatge
Route::get('/adminpointage', 'PointageController@pointer')->name('adminpointage')->middleware('auth:admin');
//profil enseignants 
Route::get('/profile','UserController@profil')->name('profile');


Route:: get ('/affichechangermotdepasse','UserController@changemdp')->name('changemdp')->middleware('auth');
Route:: post ('/update-password','UserController@update_password')->name('update_password');


Route:: get ('/affichechangermotdepasseadmin','UserController@changemdpadmin')->name('changemdpadmin')->middleware('auth:admin');
Route:: post ('/update-passwordadmin','UserController@update_passwordadmin')->name('update_passwordadmin');


//modifier le profil de l'enseignant

Route::GET('/modifierEnseignant/{id}',[
    'uses' => 'UserController@modifierEnseignant',
    'as' => 'modifierEnseignant'
]);

Route::POST('/modifierP',[
    'uses' => 'UserController@modifierP',
    'as' => 'modifierP'
]);
//profil admin 
Route::get('/profilA','ProfilController@profil')->name('profilA');
//register admin

    
Route::POST('/create',[
    'uses' => 'RegisteraController@create',
    'as' => 'create'
]);
//modifier le profil de l'admin



Route::POST('/modifier',[
    'uses' => 'ProfilController@modifier',
    'as' => 'modifier'
]);
//affiche matiere

route::get('/matiere','MatiereController@affiche')->name('matiere');

//ajouter matiere
Route::GET('/ajoutermatiere',[
    'uses' => 'MatiereController@ajoutermatiere',
    'as' => 'ajoutermatiere'
]);

Route::POST('/AjouterM',[
    'uses' => 'MatiereController@AjouterM',
    'as' => 'AjouterM'
]);
//afficher form matiere 
Route::GET('/supprimerMatiere/{id}',[
    'uses' => 'MatiereController@supprimerMatiere',
    'as' => 'supprimerMatiere'
]);
//boutton supprimer matiere
Route::POST('/supprimerM',[
    'uses' => 'MatiereController@supprimerM',
    'as' => 'supprimerM'
]);
//modifier matiere

Route::GET('/modifierMatiere/{id}',[
    'uses' => 'MatiereController@modifierMatiere',
    'as' => 'modifierMatiere'
]);


Route::POST('/modifierM',[
    'uses' => 'MatiereController@modifierM',
    'as' => 'modifierM'
]);

// welcome enseignant
Route::get('/index2','UserController@index2')->name('index2');    


//admin convocation
Route::get('/convocation', 'ConvocationController@index')->name('convocationAdmin')->middleware('auth:admin');

// ajoute conv

Route::POST('/AjoutConv',[
    'uses' => 'ConvocationController@AjoutConv',
    'as' => 'AjoutConv'
]);

//conv enseignant

Route::get('/convo_{id}','ConvocationController@convocation')->name('convo');

//calendrier affichage
Route::get('/calendrier', 'CalendrierController@index')->name('calendrier');
//calendrier affichage
Route::get('/sallegroupe', 'CalendrierController@SG')->name('sallegroupe');
//historiqueadmin
Route::get('/historique', 'ConvocationController@historique')->name('historique')->middleware('auth:admin');

//historiqueconv
Route::get('/ConvHis_{id}', 'ConvocationController@voirhistorique')->name('HistoriqueConv')->middleware('auth:admin');


// ajoute calendrier
Route::GET('/ajouterCal',[
    'uses' => 'CalendrierController@ajouterCal',
    'as' => 'ajouterCal'
]);

Route::POST('/AjoutCalender',[
    'uses' => 'CalendrierController@AjoutCalender',
    'as' => 'AjoutCalender'
]);

// reset Administrateur 



Route::post('admin-password/email','Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\Auth\ResetPasswordController@reset')->name('admin.password.update');
Route::get('admin-password/reset/{token}','Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');







route::get('/sh', 'CalendrierController@calendrier')->name('sh');

// affichage salle et groupe 

route::get('/mm','CalendrierController@sallegroupe')->name('mm');

// ajoute salle et groupe
Route::GET('/ajoutergroupe',[
    'uses' => 'CalendrierController@ajouterS',
    'as' => 'ajoutergroupe'
]);

Route::POST('/Emploi',[
    'uses' => 'CalendrierController@Ajouter',
    'as' => 'Emploi'
]);
//afiche calendder prof
route::get('/aa', 'EmploiController@emploi')->name('aa');
//afficher form supprission contact 
Route::GET('/supp/{id}',[
    'uses' => 'ContactController@supp',
    'as' => 'supp'
]);
//boutton supprimer contact
Route::POST('/supprimerC',[
    'uses' => 'ContactController@supprimerC',
    'as' => 'supprimerC'
]);
//afficher form supprission SALEETGROUP 
Route::GET('/supprimerSG/{id}',[
    'uses' => 'EmploiController@supprimerSG',
    'as' => 'supprimerSG'
]);
//boutton supprimer SALEETGROUP
Route::POST('/suppSG',[
    'uses' => 'EmploiController@suppSG',
    'as' => 'suppSG'
]);
//afficher form supprission pointage 
Route::GET('/supprimerpointage/{id}',[
    'uses' => 'PointageController@supprimerpointage',
    'as' => 'supprimerpointage'
]);
//boutton supprimer SALEETGROUP
Route::POST('/pointsupp',[
    'uses' => 'PointageController@pointsupp',
    'as' => 'pointsupp'
]);

