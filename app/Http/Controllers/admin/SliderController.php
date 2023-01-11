<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::all();
        return view('admin.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
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
            'image'=>'required',
        ]);

        $imageName=$request->file('image')->getClientOriginalName();
        $request->file('image')->move('uploads/',$imageName);

        Slider::create([

            'image'=>$imageName,
        ]);

        alert()->success('','ثبت با موفقیت انجام شد');
        return redirect()->route('admin.sliders.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('admin.sliders.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Slider $slider)
    {

        if($request->has('image'))
        {
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move('uploads/', $imageName);
        }
        else
        {
            $imageName= $slider->image;
        }

        $slider->update
        ([
            'image'=>$imageName,
        ]);

        alert()->success('','ویرایش با موفقیت انجام شد');
        return redirect()->route('admin.sliders.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        alert()->success('','حذف با موفقیت انجام شد');
        return redirect()->back();
    }
}
