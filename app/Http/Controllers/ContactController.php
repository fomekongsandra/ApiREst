<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    //affiche tout les contact
    public function getcontact(){
        return response()->json(contact::all(),200);
    }

    // un contact particulier avec l'id
    public function getContactById($id){
        $contact = contact::find($id);
        if(is_null($contact)){
            return response()->json(['message' =>'Produit introuvable'],404);
        }
        return response()->json(contact::find($id),200);
    }

    //ajouter un contaact 
    public function addcontact(Request $request ){
        $contact = contact::insert($request->all());
        return response($contact,201);
    }

     // update un contact
     public function updateContact(Request $request, $id){
        $contact = contact::find($id);
        if(is_null($contact)){
            return response()->json(['message' =>'Produit introuvable'],404);
        }
        $contact ->update($request->all());
        return response($contact,200);
    }

     // delete un contact
     public function deleteContact(Request $request, $id){
        $contact = contact::find($id);
        if(is_null($contact)){
            return response()->json(['message' =>'Produit introuvable'],404);
        }
        $contact ->delete();
        return response(null,200);
    }
}
