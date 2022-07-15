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
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Models\Contact;
use App\Mail\ContactMail;


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

    public  function downloadCv(Request $request,$file){

        return  response()->download(public_path('resume/'.$file));

    }

    public function sendMessage(Request $request){

        $name=$request->name;
        $email=$request->email;
        $subject=$request->subject;
        $message=$request->message;

        //print_r($request->all());

        $contact=new Contact();

        $contact->name=$name;
        $contact->email=$email;
        $contact->subject=$subject;
        $contact->status=1;
        $contact->message=$message;

        $contact->save();

        $details=[
            'name'=>$name,
            'email'=>$email,
            'subject'=>$subject,
            'message'=>$message
        ];

        Mail::to('moynak.roy199@gmail.com')->send(new ContactMail($details));


        return back()->with('sendmail','Message Send Successfully');



    }




}
