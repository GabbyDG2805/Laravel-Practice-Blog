<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;

class LessonsController extends Controller
{
    public function index ()
    {
    	$nextLessons = Lesson::Incomplete();

    	return view('welcome', compact('nextLessons'));
    }
}
