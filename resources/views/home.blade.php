<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

       font-family: 'Fira Sans', sans-serif;
    }

    .hero1 p {
        color: rgb(56, 56, 56);
        font-size: 15px;
        letter-spacing: 1px;
        width: 600px;
        margin-top: -50px;
       
        
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

/**********listcard******************/
.annonce{
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  padding: 50px;
}

.card {
width: 300px;
margin-top: 25px;
background-color: #eae9f0;
padding: 0px;
border-top-left-radius: 35px;
border-top-right-radius: 35px;
border: 1px solid rgb(216, 216, 216);
}
.card img {
  width: 200px;
height: 200px;
 padding: 5px;
 margin-left: 45px;
 
  }
  .card div{
    background-color: white;
    padding: 5px;
       }

  .card div h1,h3 {
 font-size: 17px;
margin-top: 5px;
margin-left:10px ;
 font-family: 'Montserrat', sans-serif;
 font-weight:50;
   
    }

    .card div sub{
      font-size: 12px;
      margin-left:5px ;
       }
    .card div button {
      border: 0;
      text-align: center;
      display: inline-block;
      padding: 5px;
      width: 90px;
      margin-left: 180px;
      margin-top: -105px;
      color: #ffffff;
      background-color: #36a2eb;
      border-radius: 18px;
      font-family: 'Karla', sans-serif;
      font-weight: 600;
      text-decoration: none;
      transition: box-shadow 200ms ease-out;
        
         }





         header form {
            display: flex;
          }










         .custom-select {
            position: relative;
            font-family: Arial;
            margin-left: 35px;
          }
          
          .custom-select select {
            display: none; /*hide original SELECT element:*/
         
          }
          
          .select-selected {
          
            background-color: #2598e4;
            border-radius: 25px;
            height: 20px;
          }
          
          /*style the arrow inside the select element:*/
          .select-selected:after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #fff transparent transparent transparent;
          }
          
          /*point the arrow upwards when the select box is open (active):*/
          .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 7px;
          }
          
          /*style the items (options), including the selected item:*/
          .select-items div,.select-selected {
            color: #ffffff;
            padding: 8px 16px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
            user-select: none;
          }
          
          /*style items (options):*/
          .select-items {
            position: absolute;
            background-color:#1e8ad2;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
          }
          
          /*hide the items when the select box is closed:*/
          .select-hide {
            display: none;
          }
          
          .select-items div:hover, .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
          }
.search{
            background:#ED7F02;
            border:none;
            padding-top:5px;
            padding-bottom:5px;
            padding-left:15px;
            padding-right:15px;
            font-size:18px;
            border-radius:20px;
            font-family: 'Karla', sans-serif;
            color:#F3F3F2;
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
       margin-top: -50px;
      
       
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
 margin-top: -40px;

 
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
 margin-top: -30px;

 
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
margin-top: -30px;


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
margin-top: -25px;


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
margin-top: -25px;


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
margin-top: -20px;


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
margin-top: -20px;


}


}


    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


    
<header>


<form  style="margin-top: 50px;width:50%;display:flex;justify-content:space-around;
flex-wrap:wrap;align-items:center"method="get" action="{{route('homes') }}">
   @csrf

    <div class="custom-selects" style="width:25%;">
    
    <select name="city" style="width:100%;height:35px;border-width:1px;border-color:#E5E2E2;font-family: 'Montserrat', sans-serif;">
    
            <option value="" style="font-size:16px;font-family: 'Montserrat', sans-serif;">Ville</option>
         
            <option value="Agadir">Agadir</option>
<option value="Al Hoceima">Al Hoceima</option>
<option value="Azilal">Azilal</option>
<option value="Beni Mellal">Beni Mellal</option>
<option value="Ben Slimane">Ben Slimane</option>
<option value="Boulemane">Boulemane</option>
<option value="Casablanca">Casablanca</option>
<option value="Chaouen">Chaouen</option>
<option value="El Jadida">El Jadida</option>
<option value="El Kelaa des Sraghna">El Kelaa des Sraghna</option>
<option value="Er Rachidia">Er Rachidia</option>
<option value="Essaouira">Essaouira</option>
<option value="Fes">Fes</option>
<option value="Figuig">Figuig</option>
<option value="Guelmim">Guelmim</option>
<option value="Ifrane">Ifrane</option>
<option value="Kenitra">Kenitra</option>
<option value="Khemisset">Khemisset</option>
<option value="Khenifra">Khenifra</option>
<option value="Khouribga">Khouribga</option>
<option value="Laayoune">Laayoune</option>
<option value="Larache">Larache</option>
<option value="Marrakech">Marrakech</option>
<option value="Meknes">Meknes</option>
<option value="Nador">Nador</option>
<option value="Ouarzazate">Ouarzazate</option>
<option value="Oujda">Oujda</option>
<option value="Rabat-Sale">Rabat-Sale</option>
<option value="Safi">Safi</option>
<option value="Settat">Settat</option>
<option value="Sidi Kacem">Sidi Kacem</option>
<option value="Tangier">Tangier</option>
<option value="Tan-Tan">Tan-Tan</option>
<option value="Taounate">Taounate</option>
<option value="Taroudannt">Taroudannt</option>
<option value="Tata">Tata</option>
<option value="Taza">Taza</option>
<option value="Tetouan">Tetouan</option>
<option value="Tiznit">Tiznit</option>
        </select>
        
    
    </div>



    <div class="custom-selects" style="width:25%;">
 
        <select name="category" style="width:100%;height:35px;border-width:1px;border-color:#E5E2E2;font-family: 'Montserrat', sans-serif;">
            <option value="" style="font-size:14px;font-family: 'Montserrat', sans-serif;" >Type</option>
            <option>Vehicles</option>
    <option>Clothing</option>
    <option>Electronics</option>
    <option>Family</option>
    <option>Hobbies</option>
    <option>Toys & games</option>
    <option>Sporting goods</option>
    <option>Musical instruments</option>
    <option>Home</option>
        </select>
   
      </div>
      


      <div class="custom-selects" style="width:25%">
   
        <select name="price" style="width:100%;height:35px;border-width:1px;border-color:#E5E2E2;font-family: 'Montserrat', sans-serif;">
            <option value="" style="font-size:14px;font-family: 'Montserrat', sans-serif;">Price</option>
            <option value="-" style="font-size:16px;font-family: 'Montserrat', sans-serif;">- expensive</option>
            <option value="+" style="font-size:16px;font-family: 'Montserrat', sans-serif;">+ expensive</option>
    
        </select>

      </div>

 <button type="submit" class="search">Search <i class="fa fa-search"></i></button>



  

</div>






</header>















<section class="annonce">

@foreach($annonces as $key=>$annonce)
<div class="card">
   <img src="{{ asset('./uploads/'.$annonce->img)}}" alt="" srcset="">
   <div>
    <h1>{{ $annonce->Titre}}<sub> By {{ $annonce->name}}</sub></h1>
    <h3>{{ $annonce->prix}} DH</h3>
    <button><a href="{{ url('/AnnonceDetails/'.$annonce->id) }}">Acheter</a> </button>
   </div>

</div>
@endforeach




 



</section>



    
</body>
</html>