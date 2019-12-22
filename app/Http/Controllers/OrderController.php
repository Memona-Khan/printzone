<?php

namespace App\Http\Controllers;
use App\Service;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function updateview($id)
    {
        $iddatashow = Service::find($id);

//        return $iddatashow;
        return view('order',compact('iddatashow'));
    }

    public function insert(Request $request)
    {

                $page=new Order();
            $page->pname = $request->input('pname');
            $page->name = $request->input('name');
            $page->email = $request->input('email');
            $page->quantity = $request->input('quantity');
            $page->phone = $request->input('phone');

            $page->save();
            return redirect('/order');
    }
    public function read()
    {
        $pages=Order::all();
        return view('viewdata',compact('pages'));
    }
}
