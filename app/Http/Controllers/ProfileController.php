<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Annonce;
use App\Models\Chat;
use Illuminate\Support\Facades\DB;
class ProfileController extends Controller
{
    //
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
        $user=User::find($id);
        $annonces=Auth::user()->annonce;
       // echo $annonces;
        $chat=Chat::where('idAnnonceur',Auth::id())->distinct()->get();
         
       
        $boites= DB::select("SELECT * FROM `boites`,users,annonces,photos WHERE users.id=boites.iduser and boites.idannonce=annonces.id and photos.annonce_id=annonces.id;");
    return view('profile',['user' =>$user ,'annonces'=>$annonces,'boites'=>$boites]);
    }

    

    public function edit(Request $request)
    {
       $id = Auth::id();
        $user=User::find($id);
        $user->city=$request->city;
        $user->name=$request->name;
        $user->age=$request->age;
        $user->save();
    return redirect('/profile');
   
}







}
