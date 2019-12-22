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
         Print Zone|Printing Press
     </title>
    </head>
<body>

<div class="continer">
@yield('content')
</div>

@section('footer')

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
@show


</body>

</html>
