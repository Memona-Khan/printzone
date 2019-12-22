<?php

namespace App\Http\Controllers;
use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function insert(Request $request)
    {
$ins=new Feedback();
$ins->name=$request->input('name');
$ins->email=$request->input('email');
$ins->review=$request->input('review');
$ins->save();
return view('contact');
    }

    public function read()
    {
        $pages=Feedback::all();
        return view('viewReview',compact('pages'));
    }
}
