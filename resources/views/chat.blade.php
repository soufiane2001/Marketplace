<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
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
  }
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

  

</style>
   <title>Document</title>
   @livewireStyles
</head>
<body>

<nav>
        <div><img src="{{ asset('assets/logo.png') }}" alt="" srcset=""></div>
     <div> <h3><a href="{{ url('/') }}">Home</a> </h3> <h3><a href="{{ url('/home') }}">MarketPlace</h3></a></div>


     <div>
        
     @if (Route::has('login'))
     @auth
                       <button><a href="{{ url('/profile') }}" class="text-sm text-gray-700 underline">   {{ Auth::user()->name }}</a></button> 
                      
       
     @else

     <button><a href="{{ route('login') }}">Login</a> </button>
     @if (Route::has('register'))
     <button><a href="{{ route('register') }}">Registre</a> </button> 
     @endif
                    @endif
    
    
    </div>
    @endif
    </nav>


<livewire:message :chat="$Chats"  :iduser="$iduser"   :idannonceur="$idannonceur" :idannonce="$idannonce"   />

   

@livewireScripts
</body>
</html>