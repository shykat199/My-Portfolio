<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\SectionControl;
use Illuminate\Support\Facades\DB;
use App\Models\HomeController;
use App\Models\Personalinfo;
use App\Models\Admin;
use App\Models\MyResume;
use App\Models\MySkill;
use App\Models\DesignSkill;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;
use App\Models\ProjectCatagory;
use App\Models\Project;
use Illuminate\Support\Facades\File;


class AdminController extends Controller
{

    public function adminLogin()
    {

        return view('Admin.login');

    }

    public function checkUser(Request $request)
    {

        $user = Admin::Where('email', '=', $request->email)->Where('password', '=', $request->password)->first();

        if ($user == true) {


            $request->Session()->put('loginId', $user->id);
            return redirect()->route('admin_dashboard');

        } else {
            return back()->with('fail', 'something wrong!! mail or password is not Registered');

        }

    }


    public function dashboard(Request $request)
    {

        if ($request->session()->get('loginId') == "") {

            return redirect('/admin/login');

        } else {

            $allSection = SectionControl::all()->first();
            $allHome = HomeController::all()->first();
            $addProfile = Admin::all()->first();
            $countAllContact = count(Contact::all());

            // return view('Admin.Index',compact('allSection'));

            return view('Admin.Index', compact(['allSection', 'allHome', 'addProfile', 'countAllContact']));

        }


    }

    public function logout()
    {

        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect()->route('login');
        }
    }


    public function updateSection(Request $request)
    {

        $homesection = $request->has('homesection') ? 1 : 0;
        $aboutsection = $request->has('aboutsection') ? 1 : 0;
        $portfoliosection = $request->has('portfoliosection') ? 1 : 0;
        $blogsection = $request->has('blogsection') ? 1 : 0;
        $contactsection = $request->has('contactsection') ? 1 : 0;

        $sectionUpdate = DB::table('section_controls')
            ->where('id', 1)
            ->update(['homesection' => $homesection, 'aboutsection' => $aboutsection,
                'portfoliosection' => $portfoliosection, 'blogsection' => $blogsection,
                'contactsection' => $contactsection
            ]);
        return redirect()->route('admin_dashboard')->with('sectionUpdate', 'Section Updated Successfully');

    }


    public function about()
    {
        $allPersonalInfo = Personalinfo::all()->first();
        $allHome = HomeController::all()->first();
        $addProfile = Admin::all()->first();
        $countAllContact = count(Contact::all());
        return view('Admin.about', compact(['allPersonalInfo', 'addProfile', 'allHome', 'countAllContact']));
    }


    public function updateAbout(Request $request)
    {
        $allAboutInfo = DB::table('personalinfos')
            ->where('id', 1)
            ->update([

                'shortdescription' => $request->shortdescription, 'address' => $request->address,
                'age' => $request->age, 'gender' => $request->gender,
                'resume' => $request->resume, 'email' => $request->email,
                'phone' => $request->phone, 'degree' => $request->degree,

            ]);
        return redirect()->route('admin_about')->with('success', 'About Updated Successfully');

    }


    public function home()
    {
        //return view('Admin.home');


        $allHome = HomeController::all()->first();
        $addProfile = Admin::all()->first();
        $countAllContact = count(Contact::all());

        return view('Admin.home', compact(['allHome', 'addProfile', 'countAllContact']));

    }


    public function updateHome(Request $request)
    {

        $showicon = $request->has('showicon') ? 1 : 0;

        $updateHome = DB::table('home_controllers')
            ->where('id', 1)
            ->update(['title' => $request->title, 'lasttitle' => $request->lasttitle,
                'subtitle' => $request->subtitle, 'showicon' => $showicon

            ]);

        return redirect()->route('admin_home')->with('homeUpdate', 'Home Updated Successfully');


    }


    public function contact()
    {
        $allHome = HomeController::all()->first();
        $addProfile = Admin::all()->first();
        $allContact = Contact::get();
        $countAllContact = count(Contact::all());

        return view('Admin.contact', compact(['allHome', 'addProfile', 'allContact', 'countAllContact']));
    }

    public function updateContactStatus($id)
    {

        //get that message
        $message = DB::table('contacts')
            ->select('status')
            ->where('id', '=', $id)
            ->first();


        if ($message->status == '1') {
            $status = '0';
        } else {
            $status = '1';
        }

        //update status
        $val = array('status' => $status);
        DB::table('contacts')
            ->where('id', $id)
            ->update($val);


        return back()->with('msgupdate', 'Status added Successfully');
    }

    public function portfolio()
    {
        $allHome = HomeController::all()->first();
        $addProfile = Admin::all()->first();
        $countAllContact = count(Contact::all());
        $data = DB::table('my_resumes')
            ->where('type', '=', 'p')
            ->get();

        $data1 = DB::table('my_resumes')
            ->where('type', '=', 'e')
            ->get();

        return view('Admin.portfolio', compact(['allHome', 'addProfile', 'data', 'data1', 'countAllContact']));
    }


    public function addEducation(Request $request)
    {

        $myResume = new MyResume();

        $myResume->title = $request->title;
        $myResume->type = $request->type;
        $myResume->organization = $request->organization;
        $myResume->time = $request->time;
        $myResume->about_exp = $request->about_exp;

        $myResume->save();
        return back()->with('addEducation', 'Education Background Added Successfully');


    }

    public function editProfession($id)
    {

        $allHome = HomeController::all()->first();
        $addProfile = Admin::all()->first();
        $countAllContact = count(Contact::all());

        $edata1 = DB::table('my_resumes')->where('id', $id)
            ->first();
        return view('Admin.EditProUpdateresume', compact(['edata1', 'allHome', 'addProfile', 'countAllContact']));

    }

    public function editEducation($id)
    {

        $allHome = HomeController::all()->first();
        $addProfile = Admin::all()->first();
        $countAllContact = count(Contact::all());

        $edata = DB::table('my_resumes')->where('id', $id)
            ->first();


        return view('Admin.EditEduUpdateresume', compact(['edata', 'allHome', 'addProfile', 'countAllContact']));

    }


    public function deleteEducation($id)
    {

        MyResume::where('id', $id)->delete();

        return back()->with('post_deleted', 'Record has deleted Successfully');

    }


    public function updateEducation(Request $request)
    {

        $myResume = MyResume::find($request->id);
        // echo ($myResume);

        //print_r($request->all());

        $myResume->title = $request->input('title');
        $myResume->type = $request->input('type');
        $myResume->organization = $request->input('organization');
        $myResume->time = $request->input('time');
        $myResume->about_exp = $request->input('about_exp');

        $myResume->save();


//        DB::table('my_resumes')
//            ->where('id', $request->id)
//            ->update([
//                'title'     => $request->title,
//                'type'     => $request->type,
//                'organization'     => $request->organization,
//                'time'     => $request->time,
//                'about_exp'     => $request->about_exp
//            ]);


        return back()->with('addEducation', 'Education Background Added Successfully');


    }


    public function profile()
    {

        $getAllProfile = Admin::all()->first();
        $allHome = HomeController::all()->first();
        $addProfile = Admin::all()->first();
        $countAllContact = count(Contact::all());
        return view('Admin.profile', compact(['getAllProfile', 'allHome', 'addProfile', 'countAllContact']));
        //return view('Admin.profile');
    }

    public function addProfile(Request $request)
    {

//        $input = $request->all();
//
//        $fileNameWithTxt = $request->file('image')->getClientOriginalName();
//        $fileName = pathinfo($fileNameWithTxt, PATHINFO_FILENAME);
//        $extension = $request->file('image')->getClientOriginalExtension();
//
//        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
//        $path = $request->file('image')->move('project', $fileNameToStore);
//        $input['image'] = $fileNameToStore;
//
//        $projectDetails = DB::table('projects')
//            ->where('id', $request->id)
//            ->update([
//                'name' => $request->name, 'description' => $request->description,
//                'image' => $fileNameToStore, 'category' => $request->category,
//
//
//            ]);
//
//        return redirect()->route('admin.project')->with('upProject', 'Project Updated Successfully');

        $input = $request->all();

        //img--------
        if ($request->hasFile('image')) {
            $fileNameWithTxt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithTxt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('image')->move('images', $fileNameToStore);

            $input['img'] = $fileNameToStore;
        }


        //end image------


        //resume------
        if ($request->hasFile('resume')) {
            $fileNameWithTxt1 = $request->file('resume')->getClientOriginalName();
            $fileName1 = pathinfo($fileNameWithTxt1, PATHINFO_FILENAME);
            $extension1 = $request->file('resume')->getClientOriginalExtension();

            $fileNameToStore1 = $fileName1 . '_' . time() . '.' . $extension1;
            $path = $request->file('resume')->move('resume', $fileNameToStore1);

            $input['resume'] = $fileNameToStore1;
        }

        // end resume------


        Admin::create($input);

        return redirect()->route('admin_profile')->with('success', "Record added successfully");
    }


//    public function getProfile(){
//
//        $getProfile = Admin::all()->first();
//        return view('Admin.profile', compact('getProfile'));
//
//    }


    public function updateProfile(Request $request)
    {
//        $input2 = $request->all();
//        //img--------
        $input = $request->all();

        //img--------
        //if ($request->hasFile('image')) {
            $fileNameWithTxt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithTxt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('image')->move('images', $fileNameToStore);

            $input['image'] = $fileNameToStore;
        //}


        //end image------


        //resume------
        //if ($request->hasFile('resume')) {
            $fileNameWithTxt1 = $request->file('resume')->getClientOriginalName();
            $fileName1 = pathinfo($fileNameWithTxt1, PATHINFO_FILENAME);
            $extension1 = $request->file('resume')->getClientOriginalExtension();

            $fileNameToStore1 = $fileName1 . '_' . time() . '.' . $extension1;
            $path = $request->file('resume')->move('resume', $fileNameToStore1);

            $input['resume'] = $fileNameToStore1;
        //}


        // end resume------

       // Admin::create($input);
        $projectDetails = DB::table('admins')
            ->where('id', '=',1)
            ->update([
                'email' => $request->email, 'password' => $request->password,
                 'img' => $fileNameToStore, 'resume' => $fileNameToStore1,


            ]);





        return redirect()->route('admin_profile')->with('success', "Profile Updated successfully");
    }


    public function mySkill()
    {
        $allHome = HomeController::all()->first();
        $addProfile = Admin::all()->first();

        $pskill = MySkill::get();
        $dskill = DesignSkill::get();
        $countAllContact = count(Contact::all());


        return view('Admin.myskill', compact(['allHome', 'addProfile', 'pskill', 'dskill', 'countAllContact']));

    }

    public function addPSkill(request $request)
    {


        $mySkill = new MySkill();

        $mySkill->skillname = $request->skillname;
        $mySkill->skillevel = $request->skillevel;


        $mySkill->save();
        return back()->with('addPSkill', 'Programming Language Added Successfully');
    }

    public function deletePskill($id)
    {


        MySkill::where('id', $id)->delete();

        return back()->with('post_deleted', 'Record has deleted Successfully');


    }


    public function editPLanguage($id)
    {

        $allHome = HomeController::all()->first();
        $addProfile = Admin::all()->first();
        $countAllContact = count(Contact::all());

        $edata = DB::table('my_skills')->where('id', $id)->first();


        return view('Admin.editProgrammingSkill', compact(['edata', 'allHome', 'addProfile', 'countAllContact']));

    }

    public function updatePLanguage(Request $request)
    {

        $mySkill = MySkill::find($request->id);


        $mySkill->skillname = $request->input('skillname');
        $mySkill->skillevel = $request->input('skillevel');

        $mySkill->save();

        return back()->with('addEducation', 'Education Background Added Successfully');

    }


    public function addDSkill(Request $request)
    {


        $mySkill = new DesignSkill();

        $mySkill->dskillname = $request->dskillname;
        $mySkill->dskilllavel = $request->dskilllavel;


        $mySkill->save();
        return back()->with('addPSkill', 'Programming Language Added Successfully');
    }

    public function deleteDskill($id)
    {


        DesignSkill::where('id', $id)->delete();

        return back()->with('post_deleted', 'Record has deleted Successfully');


    }


    public function editDLanguage($id)
    {

        $allHome = HomeController::all()->first();
        $addProfile = Admin::all()->first();
        $countAllContact = count(Contact::all());

        $edata = DB::table('design_skills')->where('id', $id)->first();


        return view('Admin.editDesignSkill', compact(['edata', 'allHome', 'addProfile', 'countAllContact']));

    }

    public function updateDLanguage(Request $request)
    {

        $mySkill = DesignSkill::find($request->id);


        $mySkill->dskillname = $request->input('dskillname');
        $mySkill->dskilllavel = $request->input('dskilllavel');

        $mySkill->save();

        return back()->with('addEducation', 'Education Background Added Successfully');

    }

    public function deleteMessage($id)
    {

        Contact::where('id', $id)->delete();
        return back()->with('deleteMessage', 'Message deleted successfully');

    }


    public function projectSection()
    {

        $allHome = HomeController::all()->first();
        $addProfile = Admin::all()->first();
        $countAllContact = count(Contact::all());
        $project = ProjectCatagory::paginate(3);
        $allProjectDetail=Project::paginate(4);
        $allcategory = ProjectCatagory::all();
        // $cat=


        return view('Admin.projects', compact(['allHome', 'addProfile', 'countAllContact', 'project', 'allcategory','allProjectDetail']));

    }

    public function addCategory(Request $request)
    {

        $category = $request->pcatagory;

        $projectCategory = new ProjectCatagory();

        $projectCategory->pcatagory = $category;

        $projectCategory->save();

        return back()->with('category', 'Project Category added');

    }


    public function deleteCategory($id){

        ProjectCatagory::where('id','=',$id)->delete();
        return back()->with('dltcat','Category deleted successfully');

    }

    public function editCategory($id){
        $allHome = HomeController::all()->first();
        $addProfile = Admin::all()->first();
        $countAllContact = count(Contact::all());
        $allcategory = ProjectCatagory::all()->first();
        $edata = DB::table('project_catagories')->where('id', $id)->first();

        return view('Admin.editCategory', compact(['allHome', 'addProfile', 'countAllContact', 'allcategory','edata']));

    }

    public function updateCategory(Request $request){

        $category = ProjectCatagory::find($request->id);

        $category->pcatagory = $request->input('pcatagory');


        $category->save();

        return redirect()->route('admin.project')->with('upCategory', 'Category Updated Successfully');


    }

    public function addProject(Request $request)
    {

        $input = $request->all();

        //print_r($input);

        if ($request->hasFile('image')) {
            $fileNameWithTxt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithTxt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('image')->move('project', $fileNameToStore);

            $input['image'] = $fileNameToStore;
        }
        //$input['link'] = $request->link;
        Project::create($input);

        return back()->with('projectAdd','Project Added Successfully');

    }

    public function deleteProject ($id){

        //Project::where('id','=',$id)->delete();
        $project=Project::find($id);
        $dest=public_path('project/').$project->image;

        if (File::exists($dest)){

            File::delete($dest);

        }

        $project->delete();

        return back()->with('dltproject','Project Deleted Successfully');

    }

    public function editProject($id){

        $allHome = HomeController::all()->first();
        $addProfile = Admin::all()->first();
        $countAllContact = count(Contact::all());
        $allcategory = ProjectCatagory::all();
        $edata = DB::table('projects')->where('id', $id)->first();

        return view('Admin.editProject', compact(['allHome', 'addProfile', 'countAllContact', 'allcategory','edata']));

    }

    public function updateProject(Request $request){

       // $projectid = Project::find($request->id);

        $input = $request->all();

        $fileNameWithTxt = $request->file('image')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithTxt, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();

        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
        $path = $request->file('image')->move('project', $fileNameToStore);
        $input['image'] = $fileNameToStore;

        $projectDetails = DB::table('projects')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name, 'description' => $request->description,
                'image' => $fileNameToStore, 'category' => $request->category,'link'=>$request->link,


            ]);

        return redirect()->route('admin.project')->with('upProject', 'Project Updated Successfully');
    }

}
