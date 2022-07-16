<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SectionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Web Routes----- Frontend
|--------------------------------------------------------------------------
*/

Route::get('/', [MainController::class, 'index']);

//middleware->in Middleware and kernel.php

Route::prefix('/admin')->group(function () {

    Route::get('/login',[AdminController::class,'adminLogin'])->name('login')->middleware('IsLoggedIn');
    Route::post('/login',[AdminController::class,'checkUser'])->name('admin.login');


    Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard')->middleware('Islogout');
    Route::post('/dashboard/update_section', [AdminController::class, 'updateSection'])->name('admin_update_Section');

    Route::get('/about', [AdminController::class, 'about'])->name('admin_about');
    Route::post('/about/update_about', [AdminController::class, 'updateAbout'])->name('admin_update_about');


    Route::get('/home', [AdminController::class, 'home'])->name('admin_home');
    Route::post('/home/update_home', [AdminController::class, 'updateHome'])->name('admin_update_home');


    Route::get('/resume', [AdminController::class, 'resume'])->name('admin_resume');

    Route::get('/contact', [AdminController::class, 'contact'])->name('admin_contact');
    Route::get('/contact/status/{id}', [AdminController::class, 'updateContactStatus']);



    Route::get('/portfolio', [AdminController::class, 'portfolio'])->name('admin_portfolio');
    Route::get('/portfolio/professional/{id}', [AdminController::class, 'editProfession']);
    Route::get('/portfolio/educational/{id}', [AdminController::class, 'editEducation']);

    Route::get('/portfolio/delete/professional/{id}', [AdminController::class, 'deleteEducation']);
    Route::get('/portfolio/delete/educational/{id}', [AdminController::class, 'deleteEducation']);

    Route::post('/portfolio/add_education_background', [AdminController::class, 'addEducation'])->name('add_education_background');
    Route::post('/portfolio/add_profesional_background', [AdminController::class, 'addEducation'])->name('add_profesional_background');

    Route::post('/portfolio/update/professional', [AdminController::class, 'updateEducation'])->name('update.profrssion');
    Route::post('/portfolio/update', [AdminController::class, 'updateEducation'])->name('update.education');

    //Route::get('/portfolio/edit_educational_background/{id}', [AdminController::class, 'editEducation'])->name('edit_educational_background');
    //Route::post('/portfolio/update_education_background', [AdminController::class, 'updateEducation'])->name('update_education_background');


    Route::get('/profile', [AdminController::class, 'profile'])->name('admin_profile');
    Route::post('/profile/post_profile', [AdminController::class, 'addProfile'])->name('admin_Addprofile');
    Route::post('/profile/update_profile', [AdminController::class, 'updateProfile'])->name('admin_updateprofile');


    //Route::post('/update/section',[AdminController::class,'updateSection'])->name('admin.section.update');

    Route::get('/my_skill',[AdminController::class,'mySkill'])->name('admin_my_skill');

    Route::post('/add_programing_skill',[AdminController::class,'addPSkill'])->name('add_programing_skill');
    Route::get('/delete/programming_skill/{id}', [AdminController::class, 'deletePskill']);
    Route::get('/edit/programming_skill/{id}', [AdminController::class, 'editPLanguage'])->name('update.pSkill');
    Route::post('/update/programming_skill', [AdminController::class, 'updatePLanguage'])->name('update.programming.skill');

    Route::post('/add_design_skill',[AdminController::class,'addDSkill'])->name('add_design_skill');
    Route::get('/delete/design_skill/{id}', [AdminController::class, 'deleteDskill']);
    Route::get('/edit/design_skill/{id}', [AdminController::class, 'editDLanguage'])->name('update.DSkill');
    Route::post('/update/design_skill', [AdminController::class, 'updateDLanguage'])->name('update.design.skill');

    Route::get('/delete/message/{id}', [AdminController::class, 'deleteMessage'])->name('message.delete');


    Route::get('/project/section',[AdminController::class,'projectSection'])->name('admin.project');
    Route::post('/project/add_category',[AdminController::class,'addCategory'])->name('admin.addProjectCategory');
    Route::get('portfolio/delete/category/{id}',[AdminController::class,'deleteCategory'])->name('admin.deleteCategory');
    Route::get('portfolio/edit/category/{id}',[AdminController::class,'editCategory'])->name('admin.editCategory');
    Route::post('portfolio/update/category',[AdminController::class,'updateCategory'])->name('admin.updateProjectCategory');

    Route::post('/project/add_project',[AdminController::class,'addProject'])->name('addProject');
    Route::get('portfolio/delete/project/{id}',[AdminController::class,'deleteProject'])->name('admin.deleteProject');
    Route::get('portfolio/edit/project/{id}',[AdminController::class,'editProject'])->name('admin.editProject');
    Route::post('portfolio/update/project',[AdminController::class,'updateProject'])->name('updateProject');


});


/*
|--------------------------------------------------------------------------
| Web Routes----- Frontend->PortfolioController
|--------------------------------------------------------------------------
*/

Route::get('/', [PortfolioController::class, 'index']);
Route::get('/download/resume/{file}', [PortfolioController::class, 'downloadCv'])->name('download.cv');

//send message
Route::post('/send_message',[PortfolioController::class,'sendMessage'])->name('send.message');






