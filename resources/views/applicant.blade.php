@extends('layo')
@section('content')
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
 
		
      <div class="container-fluid background skewedBox" style="height:420px;">
        <div class="trans">
<div class="row con" style="padding-top:50px;" >
            <div class="col-md-5" style="padding-top:20px;" >
                <h3 style="font-size:20x;font-family:'Cinzel', serif;font-weight:bold;text-align:center;color:white;">	
              <img class="img-fluid" src="images\logo.jpg" width="40px" height="50px"> Print Zone | Printing press</h3>
          </div>
          <div class="col-md-6">


              <nav class="navbar navbar-expand-sm bg-transparent">
              <ul class="navbar-nav " >
                    <li class="nav-item active ">
                    <a class="nav-link" href="/admin">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/add_data">ADD</a>
                    </li>
                    <li class="nav-item  " >
                      <a class="nav-link" href="/reads">Feedback</a>
                      </li>
                    <li class="nav-item " >
                    <a class="nav-link" href="/read">Applicants</a>
                    </li>
                    <li class="nav-item " >
                      <a class="nav-link" href="/vie">Orders</a>
                      </li>
                      <li class="nav-item " >
                          <a class="nav-link" href="/showcheck">Checkout</a>
                      </li>

                  </ul>
              </nav>
              </div>
  </div> 
 <div class="row con">
  <h1 class="hd"><br>Applicants</h1>
      </div></div>
          </div>
  <div class="container-fluid skewedBox" style="background-color:white;">
        <div class="container con">
                <div class="row" >
                    @foreach($pages as $page)
                <div class="col-md-4">
                        <div class="card" style="height:335px;">
                          <div class="card-body" >
                            <h1 class="card-title" style="color:black;font-size:24px;font-family:'Calistoga', cursive;">{{$page->name}}</h1>
                           <p style="color: #1b1e21;font-size:20px;">{{$page->email}}</p>
                              <p style="color: #1b1e21;font-size:20px;">{{$page->gender}}</p>
                              <p style="color: #1b1e21;font-size:16px;">{{$page->edu}}</p>
                              <p style="color: #1b1e21;font-size:20px;">{{$page->phone}}</p>
                              <p style="color: #1b1e21;font-size:20px;">{{$page->nal}}</p>

                          </div>
                        </div>

                </div>
                    @endforeach
                </div>

</div>
@endsection