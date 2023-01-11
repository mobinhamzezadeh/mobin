<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Slider;
use App\Models\TeacherRule;
use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $blogs =Blog::orderByDesc('id')->take(3)->get();
        $comments=Comment::all();
        $categories=Category::all();
        $sliders=Slider::all();
        $menu=Menu::where('status',1);
        return view('site.index',compact('blogs','comments','categories','sliders','menu'));
    }

    public function contact()
    {
        $contacts=Contact::all();
        return view('site.contact_us',compact('contacts'));
    }

    public function logout()
    {
        auth()->logout();

        alert()->success('','کاربر گرامی شما از حساب کاربری خود خارج شدید!');

        return redirect()->route('site.index');
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('site.blog',compact('blogs'));
    }

    public function course()
    {
        $blogs = Blog::all();
        return view('site.course',compact('blogs'));
    }

    public function teach()
    {
        $categories=Category::all();
        $teacherrules=TeacherRule::all();
        return view('site.teach',compact('categories','teacherrules'));
    }

    public function user_panel()
    {
        $users=User::all();
        return view('site.user-panel',compact('users'));
    }

    public function blog_details(Blog $blog)
    {
        $comments=BlogComment::where('blog_id',$blog->id)->where('is_active',1)->get();
        $news = Blog::latest()->take(4)->get();
        return view('site.blog_details',compact('news','blog','comments'));
    }

    public function showPage(Request $request)
    {
        $page=Page::where('link',$request->link)->first();
        return view('site.show_page',compact('page'));
    }




}
