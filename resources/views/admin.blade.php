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

button {
  background-color:#e8c400;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  font-size: 35px;
  font-family: 'Open Sans Condensed';
  font-weight:bold;
}

button:hover {
  opacity: 0.6;
}

</style>

		
      <div class="container-fluid background skewedBox" style="height:420px;">
        <div class="trans">
<div class="row con" style="padding-top:50px;" >
            <div class="col-md-5" style="padding-top:20px;" >
                <h3 style="font-size:20x;font-family:'Cinzel', serif;font-weight:bold;text-align:center;color:white;">	
              <img class="img-fluid" src="images\logo.jpg" width="40px" height="50px"> Print Zone | Printing press</h3>
          </div>
                    <div class="col-md-7">
          
            
              <nav class="navbar navbar-expand-sm bg-transparent" >
                  <ul class="navbar-nav" >
                    <li class="nav-item active " >
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
                    


                      <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">

                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="navbar-nav ml-auto"> -->
                        <!-- Authentication Links -->
                        <!-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> -->
                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        <!-- @else  -->
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                <!-- </div> -->
                            </li>
                        @endguest
                    </ul>
                <!-- </div> -->




                  </ul>
                </nav>
              </div>
  </div> 
 <div class="row con">
  <h1 class="hd"><br>Admin Panel</h1>
      </div>
      </div>
          </div>
  <div class="container-fluid skewedBox" style="background-color:white;">
      <div class="row con">
          <div class="col-sm-12">
          </div>
         </div>
         <div class="row con">
            <div class="col-sm-3">
              </div>
          <div class="col-sm-3">
              <a href="/add_data"><button type="submit">Add Products</button></a>
          </div>
          <div class="col-sm-3">
            <a href="/vie"><button type="submit">Check orders</button></a>
          </div>
          <div class="col-sm-3">
            </div>
         </div>
         <div class="row con">
            <div class="col-sm-3">
              </div>
          <div class="col-sm-3">
              <a href="/read"><button type="submit">View Applicants</button></a>
          </div>
          <div class="col-sm-3">
              <a href="/showcheck"><button type="submit">Completed Orders</button></a>
          </div>
          <div class="col-sm-3">
            </div>
         </div>
         <div class="row con">
            <div class="col-sm-4">
              </div>
          <div class="col-sm-4">
              <a href="/reads"><button type="submit" style="width:300px;">View Reviews</button></a>
          </div>

          <div class="col-sm-4">
            </div>
         </div>
  <div class="row con">
    <div class="col-sm-12"></div>
  </div>
  
  @endsection