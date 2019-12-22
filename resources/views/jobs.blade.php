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
        JOBS|Print Zone
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

input[type=text], input[type=password] ,input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=submit]{
  background-color:#e8c400;
  font-size:20px;
  border:2px solid #e8c400;
  font-weight:bold;
  width:200px;
  color:white;
  height:40px;
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
  <h1 class="hd"><br>JOBS</h1>
      </div>
      </div>
          </div>
  <div class="container-fluid skewedBox" style="background-color:white;">
      <div class="row con">
          <div class="col-sm-12">
              <h1  style="font-size:45px;font-family: 'Josefin Sans', sans-serif;font-weight: bold;color:black;">Apply Now !</h1>
          </div>
         </div>
         <div class="container con " >
           <div class="row ">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-4" >
             <form action="{{url('/create')}}" method="post">
             {{csrf_field()}}
  <div class="container" style="border:5px solid #D9DDDC;">
    <input type="text" placeholder="Enter Name" name="name" required>

    <input type="text" placeholder="Enter Email" name="email" required>
    <input type="text" placeholder="Gender" name="gender" required>

        
    <input type="text" placeholder="Phone Number" name="phone" required>

    <input type="text" placeholder="Education" name="edu" required>

    <input type="text" placeholder="Nationality" name="nal" required>

   
  </div>

  <div class="container" style="background-color:#D9DDDC;">
    <input type="submit" value="Submit">
  </div>
</form>

            </div> <div class="col-sm-4">
              </div>
         </div>
         </div>
         </div>

         <div class="container-fluid skewedBox" style="background-color:black">
                            <div class="row con">
                              <div class="col-sm-12">
                                <h3 class="last">	
                                  <img class="img-fluid" src="images\logo.jpg" width="50px" height="60px"> Print Zone | Printing press</h3>
                            </div>
                            </div>
                            <br><br><br>
                            <div class="container con">
                              <div class="row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-2">
                              <h6  style="font-weight: bolder;">Address</h6>
                              <p style="font-size:14px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" >Shop # 12, City Center Plaza, St.2New City Ph-1, G.T Road, Wah Cantt</p>
                                </div>
                                <div class="col-sm-2" style="border-left: 1px solid grey">
                                <h6 style="font-weight: bolder;">Socials</h6> 
                                
                                </br>
                              <i class="fa fa-google" style="color:white;font-size:24px"></i>
                                &nbsp;   &nbsp;
                                  <i class="fa fa-facebook-official" style="color:white;font-size:24px"></i>
                                  &nbsp;   &nbsp;
                                <i class="fa fa-pinterest" style="color:white;font-size:24px"></i>
                                &nbsp;  
                                
                      </div>
                                <div class="col-sm-2" style="border-left: 1px solid grey">
                                <h6 style="font-weight: bolder;"> Contacts</h6>
                                
                                <p></p>
                                <p style="font-size:14px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">051-4255546 <br>0336-6012340
                                </div></p>
                                                                          
                                <div class="col-sm-3">
                                
                                </div>
                              </div>
                              </div>
                            </div>
    </body>
    </html>