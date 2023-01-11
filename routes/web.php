<?php

use App\Http\Controllers\admin\AdminBlogcommentcontroller;
use App\Http\Controllers\admin\AdminSitecommentcontroller;
use App\Http\Controllers\admin\BlogcommenAdmintController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\TeacherRuleController;
use App\Http\Controllers\site\BlogCommentController;
use App\Http\Controllers\site\SiteController;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Slider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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




Route::prefix('/admin')->name('admin.')->group(function (){

    Route::resource('categories',CategoryController::class);
    Route::resource('blogs',BlogController::class);
    Route::resource('comments',AdminBlogcommentcontroller::class);
    Route::resource('site-comments',AdminSitecommentcontroller::class);
    Route::resource('contacts',ContactController::class);
    Route::resource('sliders',SliderController::class);
    Route::resource('teacher_rules',TeacherRuleController::class);
    Route::resource('menus',MenuController::class);
    Route::get('status/{menu}',[MenuController::class,'status'])->name('menus.status');
    Route::get('bcomments/{comment}',[AdminBlogcommentcontroller::class,'is_active'])->name('comments.is_active');

});

//-------------site routes--------------//

Route::get('/',[SiteController::class,'index'])->name('site.index');
Route::get('/contact_us',[SiteController::class,'contact'])->name('site.contact');
Route::get('/blog',[SiteController::class,'blog'])->name('site.blog');
Route::get('/course',[SiteController::class,'course'])->name('site.course');
Route::get('/teach',[SiteController::class,'teach'])->name('site.teach');
Route::get('/panel-user',[SiteController::class,'user_panel'])->name('site.panel-user');
Route::get('/blogs/{blog}',[SiteController::class,'blog_details'])->name('site.blog_details');
Route::post('/blog/{blog}/comment',[BlogCommentController::class,'store'])->name('blog_comments');
Route::get('/logout',[SiteController::class,'logout'])->name('site.logout');
Route::get('page/{link}',[SiteController::class,'showPage']);


Route::get('/home',function (){

    if (Auth::check())
    {
        if (Auth::user()->type == 'admin')
        {
            return view('admin.blogs.test');
        }
        elseif (Auth::user()->type == 'user')
        {
            $categories=Category::all();
            $sliders=Slider::all();
            $comments=Comment::all();
            $blogs=Blog::all();
            return view('site.index',compact('categories','sliders','comments','blogs'));


        }

    }
    else
    {
        return redirect()->back();
        alert()->error('','کاربر گرامی ابتدا در سایت عضو شوید!');
    }

});

