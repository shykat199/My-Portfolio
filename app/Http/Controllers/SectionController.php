<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SectionControl;

class SectionController extends Controller
{
    public  function section(){

        $allSection =SectionControl::all()->first();

        //print_r($allSection);
        return view('Admin.Index',compact('allSection'));
    }
}
