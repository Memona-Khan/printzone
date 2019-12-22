<?php

namespace App\Http\Controllers;
use App\checkout;
use App\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
public function updateview($id)
{
    $up=Order::find($id);
//    return $up;
return view('complete_checkout',compact('up'));
}
public function insert(Request $request)
{
    $ins=new checkout();
    $ins->pname=$request->input('pname');
    $ins->name=$request->input('name');
    $ins->email=$request->input('email');
    $ins->quantity=$request->input('quantity');
    $ins->price=$request->input('price');
    $ins->save();
//    return $ins;
    return view('admin');


}

public function read()
{
    $pages=checkout::all();

  return view('show_checkout',compact('pages'));
}
}
