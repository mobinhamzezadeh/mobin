<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus=Menu::all();
        return view('admin.menus.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menus.create');
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
          'link'=>'required',
        ]);

        Menu::create([
            'title'=>$request->title,
            'link'=>$request->link,
        ]);

        alert()->success(' ','ثبت با موفقیت انجام شد');
        return redirect()->route('admin.menus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('admin.menus.edit',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Menu $menu)
    {
        $request->validate([
            'title'=>'required',
            'link'=>'required',
        ]);

        $menu->update([
            'title'=>$request->title,
            'link'=>$request->link,
        ]);

        alert()->success('','ویرایش با موفقیت انجام شد');
        return redirect()->route('admin.menus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        alert()->error('','حذف با موفقیت انجام شد');
        return redirect()->back();
    }



    public function status(Menu $menu)
    {
        if($menu->status)
        {
            $menu->update([
                'status'=>0
            ]);
            return redirect()->back();
        }
        else
        {
            $menu->update([
                'status'=>1
            ]);
            return redirect()->back();
        }
    }
}
