<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');

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
            'image'=>'required',
            'colorcode'=>'required',
        ]);

        $imageName=$request->file('image')->getClientOriginalName();
        $request->file('image')->move('uploads/',$imageName);

        Category::create([
            'title'=>$request->title,
            'colorcode'=>$request->colorcode,
            'image'=>$imageName,

        ]);

        alert()->success('👏','ثبت با موفقیت انجام شد');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category)
    {
        $request->validate([
            'title'=>'required',
        ]);

        if($request->has('image'))
        {
            $imageName=$request->file('image')->getClientOriginalName();
            $request->file('image')->move('uploads/',$imageName);
        }
        else
        {
            $imageName = $category->image;
        }

        $category->update([
            'title'=>$request->title,
            'colorcode'=>$request->colorcode,
            'image'=>$imageName,

        ]);

        alert()->success('ویرایش با موفقیت انجام شد');

        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        
//      Category::onlyTrashed()->restore();

        alert()->success('⚠','حذف با موفقیت انجام شد');
        return redirect()->back();



    }


}
