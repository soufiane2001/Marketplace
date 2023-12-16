<?php

namespace App\Http\Livewire;
use App\Models\Chat;
use Livewire\Component;
use App\Models\Annonce;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Message extends Component
{
    public $messageText;

    public $post;
  //  public $chat;
    public $iduser ;
    public $idannonceur ;
    public $idannonce;
    public function render()
    {
        
      $messages = DB::select("SELECT * FROM `chats` WHERE chats.annonce_id='$this->idannonce' and chats.user_id= '$this->iduser' 
       and chats.idAnnonceur='$this->idannonceur';"); 

    

    //$chats=Chat::where('annonce_id','=',25407);

        return view('livewire.message', ['chat' =>$messages ,'auth'=>Auth::id()]);
    
    }
   
    public function sendMessage(Request $request)
    {
        $type = $request->input('iduser');
       Chat::create([
            'Message' => $this->messageText,
            'annonce_id'=>$this->idannonce,
            'idAnnonceur'=>$this->idannonceur,
            'user_id'=>$this->iduser,
            'Msgpar'=>Auth::id()
        ]);


        $this->reset('messageText');
    }
}
