<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\medicines;

class MedController extends Controller
{
    public function findMed(){
        $user = DB::table('medicine')->where('MedicineName', '$name')->first();
 
         $id= $user->S.NO;
 
         
         $medicine= medicine::find($id);
 
        return view('med',['medicine'=>$medicine]);
     }
     public function display()
     {
         $medicine=medicine::all();
         return view('med',['medicine'=>$medicine]);
     }
}
