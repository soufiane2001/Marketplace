<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <style>
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

  .myprofile form{
  margin-top: 2.5%;
    }

  .myprofile ,.myannonce,.mycontact{
    padding: 25px;
    margin-top: 2.5%;
    padding-bottom: 5%;
    border-bottom: 1px solid rgb(220, 220, 220);
    }
  .myprofile h1,.myannonce h1,.mycontact h1{
font-size: 40px;           
font-family: 'Karla', sans-serif;
font-weight: 600;
color: #0381ff;
}


.card {
    width: 300px;
    margin-top: 45px;
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
     margin-left: 50px;
     
      }
      .card div{
        background-color: white;
        padding: 5px;
           }
    
      .card div h1,h3 {
     font-size: 20px;
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
    
    
             .listcontact{
              padding-top: 2.5%;
             padding-left: 15%;
             padding-right: 15%;
              }
              .listcontact a{
                text-decoration: none;
                color: #0e16fd;
               
                }
              .conv{
                border-top:1px solid rgb(227, 227, 227) ;
                
                padding-top: 2%;
                padding-bottom: 2%;
                display: flex;
                
                flex-wrap: wrap;
                }
                .conv h2{
                  margin-left: 8%;
                  color: #404040;
                  font-family: 'Karla', sans-serif;
             
                }
                .conv p{
                 max-width: 800px;
                 margin-left: 8%;
                 font-family: 'Karla', sans-serif;
                 font-weight: 500;
                  }

                .conv img{
                 width: 110px;
                  }
   </style>
    <title>Document</title>
</head>
<body>


    <nav>
    <div><img src="{{ asset('assets/logo.png') }}" alt="" srcset=""></div>
    <div> <h3><a href="{{ url('/') }}">Home</a> </h3> <h3><a href="{{ url('/home') }}">MarketPlace</h3></a></div>

<div> <button><a href="{{ route('logout') }}">logout</a> </button></div>

    </nav>
    



  <section class="myprofile">
           <h1>My Profile</h1>
           <form class="form-inline d-flex justify-content-around"  method="get" action="{{route('edite') }}">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Enter Name" id="email">
            <label for="pwd">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Enter password" id="pwd">
            <label for="pwd">Age:</label>
            <input type="number" class="form-control" name="age"  value="{{$user->age}}" placeholder="Age" id="pwd">
            <label for="pwd">City:</label>
        
<select id="city" class="form-control"  name="city">
    <option value="{{$user->city}}">{{$user->city}}</option>
    <option value="Azemmour">Azemmour</option>
    <option value="Benslimane">Benslimane</option>
    <option value="Berrechid">Berrechid</option>
    <option value="Berrechid Province">Berrechid Province</option>
    <option value="Boulaouane">Boulaouane</option>
    <option value="Bouskoura">Bouskoura</option>
    <option value="Bouznika">Bouznika</option>
    <option value="Casablanca">Casablanca</option>
    <option value="El Jadid">El Jadid</option>
    <option value="El-Jadida">El-Jadida</option>
    <option value="Mediouna">Mediouna</option>
    <option value="Mohammedia">Mohammedia</option>
    <option value="Nouaceur">Nouaceur</option>
    <option value="Oualidia">Oualidia</option>
    <option value="Oulad Frej">Oulad Frej</option>
    <option value="Settat">Settat</option>
    <option value="Settat Province">Settat Province</option>
    <option value="Sidi Bennour">Sidi Bennour</option>
    <option value="Sidi Smai’il">Sidi Smai’il</option>
    <option value="Tit Mellil">Tit Mellil</option>
    <option value="Zawyat an Nwaçer">Zawyat an Nwaçer</option>
</select>

            <button type="submit" class="btn btn-primary">Update</button>
          </form>

  </section>



  <section class="myannonce">
          <h1>My Annonce</h1>
          @if(session()->has('status'))
          <div class="alert alert-success alert-dismissible w-25">
   
   {{session()->get('status')}}
   
          @endif;
          @if(session()->has('update'))
          <div class="alert alert-success alert-dismissible w-25">
   
   {{session()->get('update')}}
 </div>
 @endif;

 @if(session()->has('delete'))
          <div class="alert alert-success alert-dismissible w-25">
   
   {{session()->get('delete')}}
 </div>
 @endif;






          <button class="btn btn-success"><a style="color:white" href="{{ route('Addannonce') }}">Add Annonce</a> </button>
          <div class="annonces d-flex justify-content-around flex-wrap">
     
          @foreach($annonces as $key=>$annonce)
            <div class="card">
                <img src="{{ asset('./uploads/'.$annonce->photo[0]->img) }}" alt="" srcset="">
                <div>
                 <h1> {{ $annonce->Titre}}</h1>
                 <h3>{{ $annonce->prix}}DH </h3>
                 <button><a href="{{url('/deleteAnnonce/'.$annonce->id)}}"><i class="fa fa-trash-o" style="font-size:20px"></i> Delete</a></button>
                 <button><a href="{{url('/Update/'.$annonce->id)}}"><i class="fa fa-edit" style="font-size:20px"></i> Edit</a> </button>
                </div>
             
             </div>
             @endforeach
             
             
          
             
             
          </div>

  </section>




  <section class="mycontact">
          <h1>My contact</h1>

           <div class="listcontact">
           @foreach($boites as $key=>$boite)
              <a href="{{ url('/Message/'.$boite->iduser.'/'.$boite->idannonceur.'/'.$boite->idannonce) }}">
                 <div class="conv">
                     <div>
                        <img src="{{ asset('uploads/'.$boite->img) }}" alt="">
                     </div>
                  
                      <div>
                         <h2>{{ $boite->name}}</h2>
                          <p>{{ $boite->Titre}} </p>
                      </div> 
                  </div>
               </a>
               @endforeach
 
  
            
  
  
  
  
  </section>



</body>
</html>