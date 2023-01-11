<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contact::all();
        return view('admin.contacts.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contacts.create');
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
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'body'=>'required',
        ]);


        Contact::create([
            'title'=>$request->title,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'body'=>$request->body,
        ]);

        alert()->success('','ثبت با موفقیت انجام شد');
        return redirect()->route('admin.contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('site.contact_us',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('admin.contacts.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Contact $contact)
    {
        $request->validate([
            'title'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'body'=>'required',
        ]);
//        $contact->update([
//            'title'=>$contact->title,
//            'phone'=>$contact->phone,
//            'email'=>$contact->email,
//            'address'=>$contact->address,
//            'body'=>$contact->body,
//        ]);
        $inputs = $request->all();
        $contact->update($inputs);
        alert()->success('','ویرایش با موفقیت انجام شد');
        return redirect()->route('admin.contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        alert()->error('','حذف با موفقیت انجام شد');
        return redirect()->back();
    }
}
