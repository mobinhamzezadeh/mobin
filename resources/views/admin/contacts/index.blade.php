@extends('admin.master')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
        <table class="table table-bordered mt-5">
            <tr>
                <th style="text-align: center">#</th>
                <th style="text-align: center">عنوان بلاگ</th>
                <th style="text-align: center">تلفن تماس</th>
                <th style="text-align: center">ایمیل</th>
                <th style="text-align: center">آدرس شرکت</th>
                <th style="text-align: center">عملیات</th>
            </tr>

                <tr>
                    <th style="text-align: center">{{$contact->id}}</th>
                    <td style="text-align: center">{{$contact->title}}</td>
                    <td style="text-align: center">{{$contact->phone}}</td>
                    <td style="text-align: center">{{$contact->email}}</td>
                    <td style="text-align: center">{{$contact->address}}</td>
                    <td style="text-align: center">
                        <div  class="btn-group mx-5" role="group" aria-label="Basic outlined example">
                            <a href="{{route('admin.contacts.edit',['contact'=>$contact->id])}}"><button title="edit" type="button" class="btn btn-outline-warning mx-3"><i class="fa fa-pencil"></i></button></a>
                            <form method="post" action="{{route('admin.contacts.destroy',['contact'=>$contact->id])}}">@csrf @method('delete') <button title="delete" type="submit" class="btn btn-outline-danger mx-3"><i class="fa fa-trash"></i></button></form>
                        </div>

                    </td>
                </tr>


        </table>
    </div>
    </div>
    </div>

@endsection()

