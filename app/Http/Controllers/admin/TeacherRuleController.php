<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TeacherRule;
use Illuminate\Http\Request;

class TeacherRuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rules=TeacherRule::all();
        return view('admin.teacherrules.index',compact('rules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacherrules.create');
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
            'body'=>'required',
        ]);

        TeacherRule::create($request->all());

        alert()->success(' ','ثبت با موفقیت انجام شد');
        return redirect()->route('admin.teacher_rules.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherRule $TeacherRule)
    {
        return view('admin.teacherrules.show',compact('TeacherRule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherRule $TeacherRule)
    {
        return view('admin.teacherrules.edit',compact('TeacherRule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,TeacherRule $TeacherRule)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);

        $inputs = $request->all();
        $TeacherRule->update($inputs);

//        $TeacherRule->update([
//            'title'=>$request->title,
//            'body'=>$request->body,
//        ]);

        alert()->success('','ویرایش با موفقیت انجام شد');
        return redirect()->route('admin.teacher_rules.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherRule $TeacherRule)
    {
        $TeacherRule->delete();
        alert()->success(' ','حذف با موفقیت انجام شد!');
        return redirect()->back();
    }
}
