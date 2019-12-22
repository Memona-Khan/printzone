<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function insert(Request $request)
    {
        $ins=new Service();
        $ins->name=$request->input('name');
        $ins->description=$request->input('description');
        $ins->save();
        return view('add_data');
    }
    public function read()
    {
        $pages=Service::all();
        return view('ser',compact('pages'));
    }


}
