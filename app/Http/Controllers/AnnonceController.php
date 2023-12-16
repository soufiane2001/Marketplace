<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Annonce;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\annonceRequest;
use Illuminate\Support\File;
use Illuminate\Support\Facades\Storage;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AnnonceController extends Controller
{
    //
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
    public function index(Request $request)
    {
        $idlink=$request->id;
        $id =Auth::id();
        $Annonce=Annonce::find($idlink);

        return view('details',['annonce' =>$Annonce ,'id'=>$id ,'idlink'=> $idlink]);
    }


    public function add()
    {
        return view('add');
    }



    public function store(annonceRequest $request)
    { 
        $Annonce = new Annonce;
        $photo = new Photo;
        $rn=mt_rand(1, 99999);
        $Annonce->id=$rn;
        $Annonce->script=$request->script;
        $Annonce->prix=$request->price;
        $Annonce->Titre=$request->title;
        $Annonce->category=$request->category;
        $Annonce->user_id=Auth::id();
        $Annonce->save();
        $photo->annonce_id=$rn;
        $filename=time().'_'.$request->photo->getClientOriginalName();
        $photo->img=$filename;
        $request->photo->move(public_path('uploads'),$filename);
      //$uploadedFileUrl = Cloudinary::upload($request->photo->getRealPath())->getSecurePath();
  
        $photo->save();
        $request->session()->flash('status','product add successuful');
       
       return redirect('/profile');
        


}


public function delete(Request $request)
{
 
$res=Annonce::find($request->id)->delete();
$request->session()->flash('delete','product was delete successuful');
return redirect('/profile');
}


public function update(Request $request)
{
 
$Annonce=Annonce::find($request->id);

return view('update',['annonce' =>$Annonce ]);
}

public function edit(Request $request)
{
   // $photo = DB::table('photos')->where('annonce_id','=',$request->id)->get();
  
    $Annonce=Annonce::find($request->id);
    $photo=Photo::find($request->idf);
//  dd($photo);
  if($request->photo){
        $filename=time().'_'.$request->photo->getClientOriginalName();
        $photo->img=$filename;
        $request->photo->move(public_path('uploads'),$filename);
        $photo->save();
    }
    if($request->prix){
        $Annonce->prix=$request->prix;
        $Annonce->save();  
    }
        $Annonce->script=$request->script;
     
        $Annonce->Titre=$request->title;
        $Annonce->category=$request->category;
        $Annonce->save();
        $request->session()->flash('update','product was update successuful');
        return redirect('/profile');
}










   


}