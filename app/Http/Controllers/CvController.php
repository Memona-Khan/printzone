<?php

namespace App\Http\Controllers;
use App\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function insert(Request $request)
{
    $ins=new Cv();
    $ins->name=$request->input('name');
    $ins->email=$request->input('email');
    $ins->gender=$request->input('gender');
    $ins->edu=$request->input('edu');
    $ins->phone=$request->input('phone');
    $ins->nal=$request->input('nal');
    $ins->save();
    return redirect('/jo');
}

public function read()
{
$pages=Cv::all();
return view('applicant',compact('pages'));
}
}
