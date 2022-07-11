<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\HomeController;
use App\Models\SectionControl;
use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use App\Models\MySkill;
use App\Models\DesignSkill;
use App\Models\MyResume;
use App\Models\MyHobby;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=HomeController::all()->first();
        $sectionData=SectionControl::all()->first();
        $personalInfo=PersonalInfo::all()->first();
        $mySkills=MySkill::get();
        $myDesignSkills=DesignSkill::get();
        $myResume=MyResume::all()->toarray();
        $myResume1=MyResume::get();
        $myHobbies=MyHobby::get();
        $addProfile=Admin::all()->first();

        return view('index',compact(['data','sectionData','personalInfo',
            'mySkills','myDesignSkills','myResume','myResume1','myHobbies','addProfile']));

    }

}
