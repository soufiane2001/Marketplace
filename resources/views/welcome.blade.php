<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
 

        <style>
            body {
                font-family: 'Nunito';
            }
            @import url('https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap');
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
     font-weight: 700;
     letter-spacing: 1px;
     font-size: 15px;
     color: #404040;
    }
  
    div button {
      border: 0;
      text-align: center;
      display: inline-block;
      padding: 10px;
      width: 90px;
      margin: 7px;
      color: #ffffff;
      background-color: #36a2eb;
      border-radius: 18px;
      font-family: 'Karla', sans-serif;
      font-weight: 600;
      text-decoration: none;
      transition: box-shadow 200ms ease-out;
     
    }
  


    /********************************************/
    div button a {
      text-decoration: none;
  color: whitesmoke;
  font-family: 'Karla', sans-serif;
      letter-spacing: 1px;
  
    }




    .header {
display: flex;
justify-content: space-between;
padding-bottom: 35px;
border-bottom: 1px solid rgb(228, 228, 228);
    }




    .hero1{
   margin-left: 50px;
   margin-top: 100px;
     }












    .hero1 h1 {
       color: rgb(1, 32, 174);
       font-size: 70px;
       letter-spacing: 3px;
       margin-top: 8%;
       font-family: 'Fira Sans', sans-serif;
    }

    .hero1 p {
        color: rgb(56, 56, 56);
        font-size: 15px;
        letter-spacing: 1px;
        width: 600px;
        margin-top: 2.5%;
       
        
     }


    .hero2 {
    margin-left: 100px;
        width:666px; 
     /* width has to be 70% of height */
     /* could use width:70%; in a square container */
        height:500px;
    
     margin-top: 50px;
     /* beware that Safari needs actual
      px for border radius (bug) */
      
        /* fails in Safari, but overwrites in Chrome */
        border-radius:50% 50% 50% 50%/60% 60% 40% 40%;
     }

     #img0 {
      width: 800px;
      position: absolute;
      margin-left:-150px;
      z-index: 0;
       }

     #img1 {
     width: 400px;
     position: absolute;
     margin-left:150px;
     z-index: 5;
      }
      
     #img2 {
        position: absolute;
        margin-top: 10px;
        margin-left: -220px;
        width: 495px;
        z-index: 5;
      }
         
     #img3 {
        position: absolute;
        margin-top: 10px;
        margin-left: -250px;
        width: 570px;
      }

      #img4 {
        position: absolute;
        margin-top: 300px;
        margin-left: -50px;
        width: 200px;
        z-index: 10;
      }

/**********listcard******************/
.annonce{
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  padding: 50px;
}

.card {
width: 250px;
margin-top: 25px;
background-color: #eae9f0;
padding: 0px;
border-top-left-radius: 35px;
border-top-right-radius: 35px;
border: 1px solid rgb(216, 216, 216);
}
.card img {
  width: 150px;
height: 150px;
 padding: 5px;
 margin-left: 45px;
 
  }
  .card div{
    background-color: white;
    padding: 5px;
       }

  .card div h1,h3 {
 font-size: 14px;
margin-top: 0px;
 font-family: 'Fira Sans', sans-serif;
 font-weight: 100;
   
    }
    .card div button {
      border: 0;
      text-align: center;
      display: inline-block;
      padding: 5px;
      width: 90px;
      margin-left: 110px;
      margin-top: -105px;
      color: #ffffff;
      background-color: #36a2eb;
      border-radius: 18px;
      font-family: 'Karla', sans-serif;
      font-weight: 600;
      text-decoration: none;
      transition: box-shadow 200ms ease-out;
        
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

  div button {
    border: 0;
    text-align: center;
    display: inline-block;
    padding: 5px;
    width: 90px;
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
    font-size:14px;
  }
  a{
text-decoration:none;
color: black;
  font-family: 'Karla', sans-serif;
  font-weight:600;
}
a:hover{
text-decoration:none;
color: black;
  font-family: 'Karla', sans-serif; 
}
form label,form input,textarea{
    font-size:19px;
    letter-spacing: 1px;
    font-family: 'Fira', sans-serif;
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

      /*****************************************/

      @media screen and (max-width:1500px) {
      
        #img0 {
          width: 700px;
          position: absolute;
          margin-left:-50px;
          z-index: 0;
           }
    
         #img1 {
         width: 350px;
         position: absolute;
         margin-left:190px;
         z-index: 5;
          }
          
         #img2 {
            position: absolute;
            margin-top: 10px;
            margin-left: -110px;
            width: 425px;
            z-index: 5;
          }
             
         #img3 {
            position: absolute;
            margin-top: 10px;
            margin-left: -140px;
            width: 490px;
          }
    
          #img4 {
            position: absolute;
            margin-top: 300px;
            margin-left: 30px;
            width: 150px;
            z-index: 10;
          }
          
    .hero1 h1 {
      color: rgb(1, 32, 174);
      font-size: 60px;
      letter-spacing: 3px;

      font-family: 'Fira Sans', sans-serif;
   }

   .hero1 p {
       color: rgb(56, 56, 56);
       font-size: 12px;
       letter-spacing: 1px;
       width: 500px;
       margin-top: 2.5%;
      
       
    }

    
      }




















/****************************/
@media screen and (max-width:1300px) {

  #img0 {
    width: 700px;
    position: absolute;
    margin-left:-50px;
    z-index: 0;
     }

   #img1 {
   width: 350px;
   position: absolute;
   margin-left:190px;
   z-index: 5;
    }
    
   #img2 {
      position: absolute;
      margin-top: 10px;
      margin-left: -110px;
      width: 425px;
      z-index: 5;
    }
       
   #img3 {
      position: absolute;
      margin-top: 10px;
      margin-left: -140px;
      width: 490px;
    }

    #img4 {
      position: absolute;
      margin-top: 300px;
      margin-left: 30px;
      width: 150px;
      z-index: 10;
    }
    
.hero1 h1 {
color: rgb(1, 32, 174);
font-size: 50px;
letter-spacing: 3px;

font-family: 'Fira Sans', sans-serif;
}

.hero1 p {
 color: rgb(56, 56, 56);
 font-size: 12px;
 letter-spacing: 1px;
 width: 400px;
 margin-top: 2.5%;

 
}


}

/******************************/

@media screen and (max-width:1100px) {

  #img0 {
    width: 600px;
    position: absolute;
    margin-left:-50px;
    z-index: 0;
     }

   #img1 {
   width: 300px;
   position: absolute;
   margin-left:170px;
   z-index: 5;
    }
    
   #img2 {
      position: absolute;
      margin-top: 10px;
      margin-left: -70px;
      width: 375px;
      z-index: 5;
    }
       
   #img3 {
      position: absolute;
      margin-top: 10px;
      margin-left: -110px;
      width: 440px;
    }

    #img4 {
      position: absolute;
      margin-top: 270px;
      margin-left: 60px;
      width: 120px;
      z-index: 10;
    }
    
.hero1 h1 {
color: rgb(1, 32, 174);
font-size: 45px;
letter-spacing: 3px;

font-family: 'Fira Sans', sans-serif;
}

.hero1 p {
 color: rgb(56, 56, 56);
 font-size: 11px;
 letter-spacing: 1px;
 width: 400px;
 margin-top: 2.5%;

 
}


}

/***************************/


@media screen and (max-width:1000px) {

  

#img0 {
  width: 500px;
  position: absolute;
  margin-left:-110px;
  z-index: 0;
   }

 #img1 {
 width: 220px;
 position: absolute;
 margin-left:120px;
 z-index: 5;
  }
  
 #img2 {
    position: absolute;
    margin-top: 10px;
    margin-left: -110px;
    width: 335px;
    z-index: 5;
  }
     
 #img3 {
    position: absolute;
    margin-top: 10px;
    margin-left: -150px;
    width: 400px;
  }

  #img4 {
    position: absolute;
    margin-top: 250px;
    margin-left: 10px;
    width: 100px;
    z-index: 10;
  }
  
.hero1 h1 {
color: rgb(1, 32, 174);
font-size: 40px;
letter-spacing: 3px;

font-family: 'Fira Sans', sans-serif;
}

.hero1 p {
color: rgb(56, 56, 56);
font-size: 11px;
letter-spacing: 1px;
width: 400px;
margin-top: 2.5%;


}


}




@media screen and (max-width:900px) {



#img0 {
  width: 500px;
  position: absolute;
  margin-left:-110px;
  z-index: 0;
   }

 #img1 {
 width: 220px;
 position: absolute;
 margin-left:120px;
 z-index: 5;
  }
  
 #img2 {
    position: absolute;
    margin-top: 10px;
    margin-left: -110px;
    width: 335px;
    z-index: 5;
  }
     
 #img3 {
    position: absolute;
    margin-top: 10px;
    margin-left: -150px;
    width: 400px;
  }

  #img4 {
    position: absolute;
    margin-top: 250px;
    margin-left: 10px;
    width: 100px;
    z-index: 10;
  }
  
.hero1 h1 {
color: rgb(1, 32, 174);
font-size: 37px;
letter-spacing: 3px;

font-family: 'Fira Sans', sans-serif;
}

.hero1 p {
color: rgb(56, 56, 56);
font-size: 11px;
letter-spacing: 1px;
width: 350px;
margin-top:2.5%;


}


}

/**********************/


@media screen and (max-width:800px) {

#img0 {
  width: 450px;
  position: absolute;
  margin-left:-130px;
  z-index: 0;
   }

 #img1 {
 width: 200px;
 position: absolute;
 margin-left:70px;
 z-index: 5;
  }
  
 #img2 {
    position: absolute;
    margin-top: 10px;
    margin-left: -110px;
    width: 275px;
    z-index: 5;
  }
     
 #img3 {
    position: absolute;
    margin-top: 10px;
    margin-left: -150px;
    width: 320px;
  }

  #img4 {
    position: absolute;
    margin-top: 200px;
    margin-left:-20px;
    width: 90px;
    z-index: 10;
  }
  
.hero1 h1 {
color: rgb(1, 32, 174);
font-size: 33px;
letter-spacing: 3px;

font-family: 'Fira Sans', sans-serif;
}

.hero1 p {
color: rgb(56, 56, 56);
font-size: 10px;
letter-spacing: 1px;
width: 350px;
margin-top:2.5%;


}


}

/*********************************/


@media screen and (max-width:750px) {

  

#img0 {
  width: 450px;
  position: absolute;
  margin-left:-130px;
  z-index: 0;
   }

 #img1 {
 width: 200px;
 position: absolute;
 margin-left:70px;
 z-index: 5;
  }
  
 #img2 {
    position: absolute;
    margin-top: 10px;
    margin-left: -110px;
    width: 275px;
    z-index: 5;
  }
     
 #img3 {
    position: absolute;
    margin-top: 10px;
    margin-left: -150px;
    width: 320px;
  }

  #img4 {
    position: absolute;
    margin-top: 200px;
    margin-left:-20px;
    width: 90px;
    z-index: 10;
  }
  
.hero1 h1 {
color: rgb(1, 32, 174);
font-size: 30px;
letter-spacing: 3px;

font-family: 'Fira Sans', sans-serif;
}

.hero1 p {
color: rgb(56, 56, 56);
font-size: 10px;
letter-spacing: 1px;
width: 300px;
margin-top:2.5%;


}


}




@media screen and (max-width:700px) {


#img0 {
 display: none;
   }

 #img1 {
  display: none;
  }
  
 #img2 {
  display: none;
  }
     
 #img3 {
  display: none;
  }

  #img4 {
    display: none;
  }
  
.hero1 h1 {
color: rgb(1, 32, 174);
font-size: 45px;
letter-spacing: 3px;

font-family: 'Fira Sans', sans-serif;
}

.hero1 p {
color: rgb(56, 56, 56);
font-size: 13px;
letter-spacing: 1px;
max-width: 700px;
margin-top: 2.5%;


}


}







        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            

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

    
            
<section class="header">

<div class="hero1">
    <h1>SoufMarketPlace</h1>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto praesentium illo soluta placeat 
        quisquam optio amet temporibus fugit accusantium, 
        </p>

        <button>Get Start</button>

</div>


<div class="hero2">
 <div>
    <img src="{{ asset('assets/shap.png') }}" id="img0"> 
    <img src="{{ asset('assets/1045175_1_1-removebg-preview.png') }}"  id="img1">
    <img src="{{ asset('assets/girlshop.png')}}" id="img2">
    <img src="{{ asset('assets/Apple.png') }}" id="img3">
    <img src="{{ asset('assets/ballon.png') }}" id="img4"> 
</div>

</div>

</section>


<section class="annonce">
   
@foreach($annonces as $key=>$annonce)
<div class="card">
<img src="{{ asset('./uploads/'.$annonce->photo[0]->img)}}" alt="" srcset="">
  <div>
    <h1>{{ $annonce->Titre}} <sub>By {{ $annonce->user->name}}</sub></h1>
    <h3>{{ $annonce->prix}} DH</h3>
    <button><a href="{{ url('/AnnonceDetails/'.$annonce->id) }}">Acheter</a> </button>
   </div>
</div>
@endforeach




</section>
           



        </div>
    </body>
</html>
