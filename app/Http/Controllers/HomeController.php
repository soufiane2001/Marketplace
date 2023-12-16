<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::id();
        $Annonce=DB::select("
        SELECT users.name,users.name,annonces.*,photos.img from  users,annonces,photos  WHERE users.id=annonces.user_id and annonces.id=photos.annonce_id and 
        users.id <>  $id 
        "); 

        return view('home',['annonces' =>$Annonce ]);
    }


    public function filter(Request $request)
    {

        $city='%';
        $cat='%';
        $prices='%';

         if($request->city){
            $city=$request->city;
         }
         if($request->category){
            $cat=$request->category;
         }
         if($request->price){
            $prices=$request->price;
         }
         $id = Auth::id();
         if($prices=='-'){
            $Annonce=DB::select("
            SELECT users.name,users.name,annonces.*,photos.img from  users,annonces,photos  WHERE users.id=annonces.user_id and annonces.id=photos.annonce_id  AND
users.city like '$city' and annonces.category like '$cat' and 
users.id <>  $id  ORDER by annonces.prix asc;
            ");    
      /*  $Annonce=DB::table('users')->join('annonces','users.id','=','annonces.user_id')->join('photos','id','=','annonce_id')
        ->select('users.*','annonces.*','photos.*')->where([['users.city','like',$city],['annonces.category','like',$cat]])->orderBy('prix', 'asc')->get();
    */

    
    }
    else if($prices=='+'){
        $Annonce=DB::select("
            SELECT users.name,users.name,annonces.*,photos.img from  users,annonces,photos  WHERE users.id=annonces.user_id and annonces.id=photos.annonce_id  AND
users.city like '$city' and annonces.category like '$cat' and 
users.id <>  $id  ORDER by annonces.prix desc;
            ");   

            
          //  dd($Annonce);
    } 
    else{
        $Annonce=DB::select("
            SELECT users.name,users.name,annonces.*,photos.img from  users,annonces,photos  WHERE users.id=annonces.user_id and annonces.id=photos.annonce_id  AND
users.city like '$city' and annonces.category like '$cat' and 
users.id <>  $id ;
            ");  
            
           // dd($Annonce); 
    }  
         
        return view('home',['annonces' =>$Annonce ]);
    }
}
