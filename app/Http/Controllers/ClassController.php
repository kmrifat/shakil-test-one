<?php

namespace App\Http\Controllers;

use App\SchoolClass;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $school_classes = SchoolClass::all();
        return view('classes', compact('school_classes'));
    }
}
