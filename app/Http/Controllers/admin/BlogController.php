<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::all();
        return view('admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'writer'=>'required',
            'body'=>'required',
            'image'=>'required',
        ]);

        $imageName=$request->file('image')->getClientOriginalName();
        $request->file('image')->move('uploads/',$imageName);

        Blog::create([
            'title'=>$request->title,
            'writer'=>$request->writer,
            'body'=>$request->body,
            'image'=>$imageName,
        ]);

        alert()->success(' ','ثبت با موفقیت انجام شد');

        return redirect()->route('admin.blogs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Blog $blog)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'writer'=>'required',
        ]);

        if($request->has('image'))
        {
            $imageName=$request->file('image')->getClientOriginalName();
            $request->file('image')->move('uploads/',$imageName);
        }
        else
        {
            $imageName = $blog->image;
        }

        $blog->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'writer'=>$request->writer,
            'image'=>$imageName,
        ]);

        alert()->success('','ویرایش با موفقیت انجام شد');
        return redirect()->route('admin.blogs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        alert()->warning('','حذف با موفقیت انجام شد');


        return redirect()->back();

    }
}
