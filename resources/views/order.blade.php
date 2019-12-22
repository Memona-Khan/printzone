<!DOCTYPE html>
 <html>
 
 <head>    
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="images\logo.jpg" >
      <link rel="stylesheet" href="css/printcs.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Saira+Condensed&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
 
 
     <title>
        Order|Print Zone
      </title>
     <style>
       div.trans {
        width:100%;
height:400px;
background-color:#e8c400;
opacity: 0.8;
transform:translateY(-60px);

}

      div.background{
	
	background-color:black;
	background:url('images/1.jpg') ;
	background-size: cover;
	}
	

.skewedBox{

padding:100px 0;
transform:skew(0deg,-5deg) translateY(-100px);
color:white;

}

a{
		color:white;
	font-size:25px;
	font-weight: bolder;
	font-family: 'Cinzel', serif;
}
a:hover 
{
	 
 color:black;
     text-decoration:none; 
     cursor:pointer;  
}
body {font-size:15px;font-family: 'Josefin Sans', sans-serif;font-weight: bold;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color:#e8c400;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.6;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #e8c400;
}



.container {
  padding: 15px;
}

span.psw {
  float: right;
  padding-top: 16px;
  
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
    </head>
    <body>
		
      <div class="container-fluid background skewedBox" style="height:420px;">
        <div class="trans">
<div class="row con" style="padding-top:50px;" >
            <div class="col-md-5" style="padding-top:20px;" >
                <h3 style="font-size:20x;font-family:'Cinzel', serif;font-weight:bold;text-align:center;color:white;">	
              <img class="img-fluid" src="images\logo.jpg" width="40px" height="50px"> Print Zone | Printing press</h3>
          </div>
          <div class="col-sm-2"></div>
          <div class="col-md-5">


              <nav class="navbar navbar-expand-sm bg-transparent">
                  <ul class="navbar-nav " >
                    <li class="nav-item active ">
                    <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/sread">Services</a>
                    </li>
                    <li class="nav-item  " >
                      <a class="nav-link" href="/jo">Jobs</a>
                      </li>
                    <li class="nav-item " >
                    <a class="nav-link" href="/contact">Contact</a>
                    </li>

                    <li class="nav-item " >
                      <a class="nav-link" href="/about">About</a>
                      </li>
                  </ul>
                </nav>
              </div>
  </div> 
 <div class="row con">
  <h1 class="hd"><br>Place Order</h1>
      </div>
      </div>
          </div>
  <div class="container-fluid skewedBox" style="background-color:white;">
    <div class="row con">

            <div class="col-sm-1"></div>
            <div class="col-sm-10">

                <form action="{{url('/ord')}}" method="POST">
                    {{csrf_field()}}
        <div class="container">

            <input type="text" name="page_id" value="{{$iddatashow->id}}" >
          <input type="text" name="pname" value="{{$iddatashow->name}}" readonly>
          <input type="text" placeholder="Your name" name="name" required>

            <input type="text" placeholder="Enter Email" name="email" required>
          <input type="text" placeholder="Quantity" name="quantity" required>
          <input type="text" placeholder="Phone Number" name="phone" required>



      
         
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          <input type="submit" class="btn btn-danger" style="width:300px;" value="submit">
        </div>
      </form>
</div>
<div class="col-sm-1"></div>

    </div>
</div>
    </body>
    </html>