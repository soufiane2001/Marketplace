<div wire:poll>
    <div class="container shadow-lg mt-5 pt-3" style="height:710px">
   
                    <div id="chat" class="p-3"  style="height:88%;">
                        @foreach ($chat as $message)

                           
                                    <div class="msg"style="display:flex;justify-content:@if ($message->user_id==$auth) flex-end @else flex-start ; @endif" >
                                            <p style="background-color:@if ($message->user_id==$auth) #2D78F3 @else #F06B09; @endif;display: inline-block;padding:0.3%;padding-left:1%;padding-right:1%;font-size:20px;color:white;border-radius:10px;">
                                            {{ $message->Message }} {{ $message->user_id }}</p>
                                         </div>
                                   
                                        @endforeach
                                </div>
                             
               
                            <form  style="margin-top:1%;margin-left:10%;width:80%;height:8%;"   wire:submit.prevent="sendMessage">
                                <input onkeydown='scrollDown()' wire:model.defer="messageText" type="text"
                                    style="width:85%;height:90%;padding-left:2%;font-size:20px;
                                    border-color:#E8E8E8" placeholder="votre message ici" />
                                <button class="msg_send_btn" type="submit">ارسال</button>
                            </form>
                  

              
        </div>
    </div>
</div>