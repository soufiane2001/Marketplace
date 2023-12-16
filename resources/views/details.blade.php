<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400&display=swap');
* {
    padding: 0;
    margin: 0;
  }

  nav {
  background-color: rgb(255, 255, 255);
  display: flex;
  justify-content: space-between;
  }



  nav div img {
    width: 150px;
    margin-left: 50px;
  }

  nav div  {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }


  nav div h3 {
   margin-left: 35px;
   font-family: 'Karla', sans-serif;
   letter-spacing: 1px;
   font-size: 15px;
   color: #404040;
  }
  nav div h3 a{

color: #404040;
font-weight: 600;
text-decoration:none;
font-size: 17px;
}s
  nav div h3 a :hover{
text-decoration:none;

}

  div button {
    border: 0;
    text-align: center;
    display: inline-block;
    padding: 5px;
    width: 80px;
    margin: 7px;
    color: #ffffff;
    background-color: #36a2eb;
    border-radius: 18px;
    font-family: 'Karla', sans-serif;
    font-weight: 600;
    text-decoration: none;
    transition: box-shadow 200ms ease-out;
   
  }

  div button a {
    text-decoration: none;
color: whitesmoke;
font-size:15px;
font-family: 'Karla', sans-serif;
    letter-spacing: 1px;
  }
 .details {
        background-color: #FDFDFD;
        
        width: 75%;
        margin-left: 10%;
        margin-top: 100px;
        padding: 25px;
        display: flex;
        justify-content: space-between;
    /*    flex-wrap: wrap;*/
        box-shadow: 26px 1px 119px -30px rgba(0,0,0,0.75);

      }
      .info{
     border-left:1px solid #E3E3E3;
     padding:25px;
      
    }
      .details div {
       width:50%;

      
      }
      .details div img {
        width: 75%;
     
       }
       .details div h1 {
        font-size: 60px;
        font-family: 'Karla', sans-serif;
        font-family: 'Rubik', sans-serif;
        letter-spacing: 1px;
        color: #212020;
        padding:25px;
        border-bottom:1px solid #E2E0DF;
       }
       .details div sub {
        font-size: 15px;
        margin-left:2%;
        font-family: 'Karla', sans-serif;
        letter-spacing: 1px;
       }
       .details div h3 {
        font-size: 20px;
        margin-top: 5%;
        font-family: 'Karla', sans-serif;
        letter-spacing: 1px;
   
       }
       .details div span {
        font-size: 20px;
        margin-top: 15%;
        font-family: 'Karla', sans-serif;
        letter-spacing: 1px;
        font-weight:600;
   
       }
       .details div p {
        font-size: 18px;
      
        margin-top:15px ;
        font-family: 'Karla', sans-serif;
        font-family: 'Signika Negative', sans-serif;
        letter-spacing: 1px;
        line-height: 25px;  
        font-weight: 500; 
        padding:15px;
        border-radius:10px;
      
        border:1px solid #E2E0DF;
        }
        .details div button {
            font-size: 15px;
            margin-top:35px ;
        }  
/*****************************************/

  #center-text {          
    display: flex;
    flex: 1;
    flex-direction:column; 
    justify-content: center;
    align-items: center;  
    height:100%;
    
  }
  #chat-circle {
    position: fixed;
    bottom: 50px;
    right: 50px;
    background: #116bfb;
    width: 80px;
    height: 80px;  
    border-radius: 50%;
    color: white;
    padding: 28px;
    cursor: pointer;
    box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, 0.6), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
  }
  
  .btn#my-btn {
       background: white;
      padding-top: 13px;
      padding-bottom: 12px;
      border-radius: 45px;
      padding-right: 40px;
      padding-left: 40px;
      color: #5865C3;
  }
  #chat-overlay {
      background: rgba(255,255,255,0.1);
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: 50%;
      display: none;
  }
  
  
  .chat-box {
    display:none;
    background: #efefef;
    position:fixed;
    right:30px;
    bottom:50px;  
    width:350px;
    max-width: 85vw;
    max-height:100vh;
    border-radius:5px;  
  /*   box-shadow: 0px 5px 35px 9px #464a92; */
    box-shadow: 0px 5px 35px 9px #ccc;
  }
  .chat-box-toggle {
    float:right;
    margin-right:15px;
    cursor:pointer;
  }
  .chat-box-header {
    background: #193bfd;
    height:70px;
    border-top-left-radius:5px;
    border-top-right-radius:5px; 
    color:white;
    text-align:center;
    font-size:20px;
    padding-top:17px;
  }
  .chat-box-body {
    position: relative;  
    height:370px;  
    height:auto;
    border:1px solid #ccc;  
    overflow: hidden;
  }
  .chat-box-body:after {
    content: "";
    background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTAgOCkiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PGNpcmNsZSBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMS4yNSIgY3g9IjE3NiIgY3k9IjEyIiByPSI0Ii8+PHBhdGggZD0iTTIwLjUuNWwyMyAxMW0tMjkgODRsLTMuNzkgMTAuMzc3TTI3LjAzNyAxMzEuNGw1Ljg5OCAyLjIwMy0zLjQ2IDUuOTQ3IDYuMDcyIDIuMzkyLTMuOTMzIDUuNzU4bTEyOC43MzMgMzUuMzdsLjY5My05LjMxNiAxMC4yOTIuMDUyLjQxNi05LjIyMiA5LjI3NC4zMzJNLjUgNDguNXM2LjEzMSA2LjQxMyA2Ljg0NyAxNC44MDVjLjcxNSA4LjM5My0yLjUyIDE0LjgwNi0yLjUyIDE0LjgwNk0xMjQuNTU1IDkwcy03LjQ0NCAwLTEzLjY3IDYuMTkyYy02LjIyNyA2LjE5Mi00LjgzOCAxMi4wMTItNC44MzggMTIuMDEybTIuMjQgNjguNjI2cy00LjAyNi05LjAyNS0xOC4xNDUtOS4wMjUtMTguMTQ1IDUuNy0xOC4xNDUgNS43IiBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMS4yNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIi8+PHBhdGggZD0iTTg1LjcxNiAzNi4xNDZsNS4yNDMtOS41MjFoMTEuMDkzbDUuNDE2IDkuNTIxLTUuNDEgOS4xODVIOTAuOTUzbC01LjIzNy05LjE4NXptNjMuOTA5IDE1LjQ3OWgxMC43NXYxMC43NWgtMTAuNzV6IiBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMS4yNSIvPjxjaXJjbGUgZmlsbD0iIzAwMCIgY3g9IjcxLjUiIGN5PSI3LjUiIHI9IjEuNSIvPjxjaXJjbGUgZmlsbD0iIzAwMCIgY3g9IjE3MC41IiBjeT0iOTUuNSIgcj0iMS41Ii8+PGNpcmNsZSBmaWxsPSIjMDAwIiBjeD0iODEuNSIgY3k9IjEzNC41IiByPSIxLjUiLz48Y2lyY2xlIGZpbGw9IiMwMDAiIGN4PSIxMy41IiBjeT0iMjMuNSIgcj0iMS41Ii8+PHBhdGggZmlsbD0iIzAwMCIgZD0iTTkzIDcxaDN2M2gtM3ptMzMgODRoM3YzaC0zem0tODUgMThoM3YzaC0zeiIvPjxwYXRoIGQ9Ik0zOS4zODQgNTEuMTIybDUuNzU4LTQuNDU0IDYuNDUzIDQuMjA1LTIuMjk0IDcuMzYzaC03Ljc5bC0yLjEyNy03LjExNHpNMTMwLjE5NSA0LjAzbDEzLjgzIDUuMDYyLTEwLjA5IDcuMDQ4LTMuNzQtMTIuMTF6bS04MyA5NWwxNC44MyA1LjQyOS0xMC44MiA3LjU1Ny00LjAxLTEyLjk4N3pNNS4yMTMgMTYxLjQ5NWwxMS4zMjggMjAuODk3TDIuMjY1IDE4MGwyLjk0OC0xOC41MDV6IiBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMS4yNSIvPjxwYXRoIGQ9Ik0xNDkuMDUgMTI3LjQ2OHMtLjUxIDIuMTgzLjk5NSAzLjM2NmMxLjU2IDEuMjI2IDguNjQyLTEuODk1IDMuOTY3LTcuNzg1LTIuMzY3LTIuNDc3LTYuNS0zLjIyNi05LjMzIDAtNS4yMDggNS45MzYgMCAxNy41MSAxMS42MSAxMy43MyAxMi40NTgtNi4yNTcgNS42MzMtMjEuNjU2LTUuMDczLTIyLjY1NC02LjYwMi0uNjA2LTE0LjA0MyAxLjc1Ni0xNi4xNTcgMTAuMjY4LTEuNzE4IDYuOTIgMS41ODQgMTcuMzg3IDEyLjQ1IDIwLjQ3NiAxMC44NjYgMy4wOSAxOS4zMzEtNC4zMSAxOS4zMzEtNC4zMSIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utd2lkdGg9IjEuMjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIvPjwvZz48L3N2Zz4=');
    opacity: 0.1;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    height:100%;
    position: absolute;
    z-index: -1;   
  }
  #chat-input {
    background: #f4f7f9;
    width:100%; 
    position:relative;
    height:47px;  
    padding-top:10px;
    padding-right:50px;
    padding-bottom:10px;
    padding-left:15px;
    border:none;
    resize:none;
    outline:none;
    border:1px solid #ccc;
    color:#888;
    border-top:none;
    border-bottom-right-radius:5px;
    border-bottom-left-radius:5px;
    overflow:hidden;  
  }
  .chat-input > form {
      margin-bottom: 0;
      width: 285px;
  }
  #chat-input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    color: #ccc;
  }
  #chat-input::-moz-placeholder { /* Firefox 19+ */
    color: #ccc;
  }
  #chat-input:-ms-input-placeholder { /* IE 10+ */
    color: #ccc;
  }
  #chat-input:-moz-placeholder { /* Firefox 18- */
    color: #ccc;
  }
  .chat-submit {  
    position:absolute;
    bottom:3px;
    right:10px;
    background: transparent;
    box-shadow:none;
    border:none;
    border-radius:50%;
    color:#1033fa;
    width:35px;
    height:35px;  
  }
  .chat-logs {
    padding:15px; 
    height:370px;
    overflow-y:scroll;
  }
  
  .chat-logs::-webkit-scrollbar-track
  {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      background-color: #F5F5F5;
  }
  
  .chat-logs::-webkit-scrollbar
  {
      width: 5px;  
      background-color: #F5F5F5;
  }
  
  .chat-logs::-webkit-scrollbar-thumb
  {
      background-color: #125bf8;
  }
  
  
  
  @media only screen and (max-width: 500px) {
     .chat-logs {
          height:40vh;
      }
  }
  
  .chat-msg.user > .msg-avatar img {
    width:45px;
    height:45px;
    border-radius:50%;
    float:left;
    width:15%;
  }
  .chat-msg.self > .msg-avatar img {
    width:45px;
    height:45px;
    border-radius:50%;
    float:right;
    width:15%;
  }
  .cm-msg-text {
    background:white;
    padding:10px 15px 10px 15px;  
    color:#666;
    max-width:75%;
    float:left;
    margin-left:10px; 
    position:relative;
    margin-bottom:20px;
    border-radius:30px;
  }
  .chat-msg {
    clear:both;    
  }
  .chat-msg.self > .cm-msg-text {  
    float:right;
    margin-right:10px;
    background: #0d5aff;
    color:white;
  }
  .cm-msg-button>ul>li {
    list-style:none;
    float:left;
    width:50%;
  }
  .cm-msg-button {
      clear: both;
      margin-bottom: 70px;
  }




























        /**********************************************/

        @media screen and (max-width: 800px) {
            body {
              background-color: lightgreen;
            }
            .details {
                background-color: #fafafa;
                width: 80%;
                margin-left: 5%;
                margin-top: 50px;
                padding: 25px;
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
        
              }
              .details div {
                width: 100%;
               
               }
               .details div img {
                width: 70%;
                margin-left: 10%;
                
               }
               .details div h1 {
                font-size: 35px;
                font-family: 'Karla', sans-serif;
                letter-spacing: 1px;
               }
               .details div sub {
                font-size: 12px;
                font-family: 'Karla', sans-serif;
                letter-spacing: 1px;
               }
               .details div h3 {
                font-size: 15px;
                margin-top:5%;
                font-family: 'Karla', sans-serif;
                letter-spacing: 1px;
               }
               .details div p {
                font-size: 13px;
                font-family: 'Karla', sans-serif;
                letter-spacing: 1px;
                line-height: 20px;   
                }
                .details div button {
                    font-size: 15px;
                  
                } 
          }
 













/***********************************************************/

      @media screen and (max-width:630px) {
      
        nav div img {
          width: 119px;
          margin-left: 20px;
        }
      
        nav div  {
          display: flex;
          justify-content: space-between;
          align-items: center;
        }
      
      
        nav div h3 {
         margin-left: 35px;
         font-family: 'Karla', sans-serif;
         letter-spacing: 1px;
         font-size: 13px;
         color: #404040;
        }
      
        div button {
          border: 0;
          text-align: center;
          display: inline-block;
          padding: 6px;
          width: 70px;
          margin: 7px;
          color: #ffffff;
          background-color: #36a2eb;
          border-radius: 18px;
          font-family: 'Karla', sans-serif;
          font-weight: 600;
          
          text-decoration: none;
          transition: box-shadow 200ms ease-out;
         
        }
        div button a {
          text-decoration: none;
      color: whitesmoke;
      font-family: 'Karla', sans-serif;
          letter-spacing: 1px;
          font-size: 12px;
        }
      }

      
      
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    </head>

<body>
<nav>
    <div><img src="{{ asset('assets/logo.png') }}" alt="" srcset=""></div>
    <div> <h3><a href="{{ url('/') }}">Home</a> </h3> <h3><a href="{{ url('/home') }}">MarketPlace</h3></a></div>

    <div> <button><a href="{{ route('logout') }}">logout</a> </button></div>

    </nav>
    
<section class="details">
<div><img src="{{ asset('./uploads/'.$annonce->photo[0]->img)}}" alt="" srcset=""></div>
        <div class="info">
            <h1>{{ $annonce->Titre}}<sub>By {{ $annonce->user->name}}</sub></h1>
            <h3>Price : {{ $annonce->prix}} DH</h3><br>
         <span class="mt-5">Description :</span> 
         <p> 
            {{ $annonce->script}}
            </p>
            <button><a href="{{ url('/Message/'.$id.'/'.$annonce->user->id.'/'.$idlink) }}">Contact</a></button>
        </div>
     </section>



   
   

<script>
    $(function() {
  var INDEX = 0; 
  $("#chat-submit").click(function(e) {
    e.preventDefault();
    var msg = $("#chat-input").val(); 
    if(msg.trim() == ''){
      return false;
    }
    generate_message(msg, 'self');
    var buttons = [
        {
          name: 'Existing User',
          value: 'existing'
        },
        {
          name: 'New User',
          value: 'new'
        }
      ];
    setTimeout(function() {      
      generate_message(msg, 'user');  
    }, 1000)
    
  })
  
  function generate_message(msg, type) {
    INDEX++;
    var str="";
    str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"https:\/\/image.crisp.im\/avatar\/operator\/196af8cc-f6ad-4ef7-afd1-c45d5231387c\/240\/?1483361727745\">";
    str += "          <\/span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msg;
    str += "          <\/div>";
    str += "        <\/div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);    
  }  
  
  function generate_button_message(msg, buttons){    
    /* Buttons should be object array 
      [
        {
          name: 'Existing User',
          value: 'existing'
        },
        {
          name: 'New User',
          value: 'new'
        }
      ]
    */
    INDEX++;
    var btn_obj = buttons.map(function(button) {
       return  "              <li class=\"button\"><a href=\"javascript:;\" class=\"btn btn-primary chat-btn\" chat-value=\""+button.value+"\">"+button.name+"<\/a><\/li>";
    }).join('');
    var str="";
    str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg user\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"https:\/\/image.crisp.im\/avatar\/operator\/196af8cc-f6ad-4ef7-afd1-c45d5231387c\/240\/?1483361727745\">";
    str += "          <\/span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msg;
    str += "          <\/div>";
    str += "          <div class=\"cm-msg-button\">";
    str += "            <ul>";   
    str += btn_obj;
    str += "            <\/ul>";
    str += "          <\/div>";
    str += "        <\/div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);   
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);
    $("#chat-input").attr("disabled", true);
  }
  
  $(document).delegate(".chat-btn", "click", function() {
    var value = $(this).attr("chat-value");
    var name = $(this).html();
    $("#chat-input").attr("disabled", false);
    generate_message(name, 'self');
  })
  
  $("#chat-circle").click(function() {    
    $("#chat-circle").toggle('scale');
    $(".chat-box").toggle('scale');
  })
  
  $(".chat-box-toggle").click(function() {
    $("#chat-circle").toggle('scale');
    $(".chat-box").toggle('scale');
  })
  
})
</script>

</body>
</html>