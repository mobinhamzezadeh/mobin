@extends('admin.master')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-10">
        <table class="table table-bordered mt-5">
            <tr>
                <th style="text-align: center">#</th>
                <th style="text-align: center">عنوان بلاگ</th>
                <th style="text-align: center">نویسنده بلاگ</th>
                <th style="text-align: center">تصویر بلاگ</th>
                <th style="text-align: center">عملیات</th>
            </tr>

            @foreach($blogs as $blog)
                <tr>
                    <th style="text-align: center">{{$blog->id}}</th>
                    <td style="text-align: center">{{$blog->title}}</td>
                    <td style="text-align: center">{{$blog->writer}}</td>
                    <td style="text-align: center"><img style=" width:71px; height:39px;}" src="{{asset('/uploads/'.$blog->image)}}" alt=""></td>
                    <td style="text-align: center">

                        <div  class="btn-group mx-5" role="group" aria-label="Basic outlined example">
                            <a href="{{route('admin.blogs.edit',['blog'=>$blog->id])}}"><button title="edit" type="button" class="btn btn-outline-warning mx-3"><i class="fa fa-pencil"></i></button></a>

                            <form method="post" action="{{route('admin.blogs.destroy',['blog'=>$blog->id])}}">@csrf @method('delete') <button title="delete" type="submit" class="btn btn-outline-danger mx-3"><i class="fa fa-trash"></i></button></form>

                            @if($blog->body == !null)
                            <a href="{{route('admin.blogs.show',['blog'=>$blog->id])}}"><button type="button" class="btn btn-outline-primary mx-3"> more <i class="fa fa-arrow-left"></i></button></a>
                            @else
                            @endif
                        </div>

                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    </div>
    </div>

@endsection()

