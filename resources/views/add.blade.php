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
    <title>Document</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap');
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


.alert  {
  font-size:15px;
  padding: 10px;
    letter-spacing: 1px;
    font-family: 'Fira', sans-serif;
    margin-left:20%;
    
  }



</style>
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




<section class="myprofile p-5">
           <h1>Add  Annonce</h1>
          
           @if(count($errors))
             @foreach( $errors->all() as  $message )
                   
                    <div class="alert alert-danger alert-dismissible w-50">
   
    {{ $message }}
  </div>
                    @endforeach 
                    @endif 
                    
                 
           <form  style="padding-left:10%;padding-right:10%" method="POST" action="{{route('store') }}"
           enctype="multipart/form-data"
           >
           @csrf
           <label for="pwd" class="mt-3">Title:</label>
            <input type="text" class="form-control w-50"  name="title"  value="{{ old('title')}}"  id="pwd">
                               
            <label for="email" class="mt-3">Script:</label>
            <textarea name="script" value="{{ old('script')}}" class="form-control w-75"  id="" cols="10" rows="4" >
            {{old('script')}}
            </textarea><br>
    
            <label for="pwd">prix:</label>
            <input type="number" class="form-control w-25" name="price"  placeholder="Enter price" >
            <div class="form-group mt-5">
      <input type="file" class="form-control-file border w-25" name="photo">
    </div> 
    <div class="form-group">
  <label for="sel1">Select Categorie:</label>
  <select class="form-control w-25" id="sel1" name="category">
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



            <button type="submit" class="btn btn-primary">Add</button>
          </form>








</body>
</html>