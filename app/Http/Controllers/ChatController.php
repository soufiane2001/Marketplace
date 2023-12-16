<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ChatController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
       
        $iduser=$request->iduser;
        $idannonceur=$request->idannonceur;
        $idannonce=$request->idannonce;
//echo $iduser;
//echo $idannonceur;
//echo $idannonce;
        $Chats=DB::select("SELECT * FROM `chats` WHERE chats.annonce_id=$idannonce and chats.user_id= $iduser and chats.idAnnonceur=$idannonceur;"); 
 //dd($Chats);
       return view('chat',['Chats'=>$Chats,'iduser' =>$iduser ,'idannonceur'=> $idannonceur,'idannonce'=>$idannonce ]);
    }


  









}
