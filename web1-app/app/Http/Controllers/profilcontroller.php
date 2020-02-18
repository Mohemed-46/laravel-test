<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
class profilcontroller extends Controller{

function formu(){
    return view ('formulair');
}
function Eng(Request $request){
    $profile= new Profile;
    $profile->nom=$request->nom;
    $profile->prenom=$request->prenom;
   
    $profile->email=$request->email;
 $profile->save();
 return redirect('/');

    
}
}