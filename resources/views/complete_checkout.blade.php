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

        .hd{
font-family:'Alatsi', sans-serif;
font-size:90px;
font-weight:bold;
color:white;float:left;
margin-left:150px;
margin-top:0px;
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
            text-align:center;
        }

        .con {

transform:skew(0deg,5deg) ;
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
  <h1 class="hd"><br>Checkout</h1>
      </div></div>
          </div>
<div class="container-fluid skewedBox" style="background-color:white;">
    <div class="row con">
        <div class="col-sm-12">
            <h1  style="font-size:45px;font-family: 'Josefin Sans', sans-serif;font-weight: bold;color:black;">ADD DATA</h1>
        </div>
    </div>
    <div class="container con ">
        <div class="row ">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <form action="/insertion" method="post">
                    {{csrf_field()}}
                    <div class="container" style="border:2px solid #D9DDDC" >
                        <input type="text" value="{{$up->id}}" name="page_id" readonly>
                        <input type="text" value="{{$up->pname}}" name="pname" readonly>
                        <input type="text" value="{{$up->name}}" name="name" readonly>
                        <input type="text" value="{{$up->email}}" name="email" readonly>
                        <input type="text" value="{{$up->quantity}}" name="quantity" readonly>
                        <input type="text" placeholder="Price" name="price" required>

                    </div>

                    <div class="container" style="background-color:#D9DDDC">
                        <input type="submit" value="Submit">
                    </div>
                </form>

            </div> <div class="col-sm-4">
            </div>
        </div>
    </div>
@endsection