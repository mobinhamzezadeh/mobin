@extends('admin.master')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-10">
        <table class="table table-bordered mt-5">
            <tr>
                <th style="text-align: center">#</th>
                <th style="text-align: center">عنوان منو</th>
                <th style="text-align: center">لینک منو</th>
                <th style="text-align: center">وضعیت</th>
                <th style="text-align: center">عملیات</th>
            </tr>

            @foreach($menus as $menu)
                <tr>
                    <th style="text-align: center">{{$menu->id}}</th>
                    <td style="text-align: center">{{$menu->title}}</td>
                    <td style="text-align: center">{{$menu->link}}</td>
                    <td style="text-align:center"><a class="btn {{$menu->status?'btn-outline-success':'btn-outline-danger'}}" href="{{route('admin.menus.status',['menu'=>$menu->id])}}">{{$menu->status?'فعال    ':'غیرفعال'}}</a></td>
                    <td style="text-align: center">

                        <div  class="btn-group mx-5" role="group" aria-label="Basic outlined example">
                            <a href="{{route('admin.menus.edit',['menu'=>$menu->id])}}"><button title="edit" type="button" class="btn btn-outline-warning mx-3"><i class="fa fa-pencil"></i></button></a>
                            <form method="post" action="{{route('admin.menus.destroy',['menu'=>$menu->id])}}">@csrf @method('delete') <button title="delete" type="submit" class="btn btn-outline-danger mx-3"><i class="fa fa-trash"></i></button></form>
                        </div>

                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    </div>
    </div>

@endsection()

