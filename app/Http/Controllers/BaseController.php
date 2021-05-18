<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function StudentRating(){
        return View('pages.studentrating');
    }

    public function RatingSheet(Request $request){
        $profname = $request->profname;
        return View('pages.ratingsheet', compact('profname'));
    }
}
