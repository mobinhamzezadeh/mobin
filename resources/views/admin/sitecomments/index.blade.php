@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-bordered mt-5">
                    <tr>
                        <th style="text-align: center">#</th>
                        <th style="text-align: center">نویسنده نظر</th>
                        <th style="text-align: center">تصویر شخص</th>
                        <th style="text-align: center">عملیات</th>
                    </tr>

                    @foreach($comments as $comment)
                        <tr>
                            <th style="text-align: center">{{$comment->id}}</th>
                            <td style="text-align: center">{{$comment->name}}</td>
                            <td style="text-align: center"><img style=" width:71px; height:39px;}" src="{{asset('/uploads/'.$comment->image)}}" alt=""></td>


                            <td style="text-align: center">

                                <div  class="btn-group mx-5" role="group" aria-label="Basic outlined example">
{{--                                    <a href="{{route('admin.site-comments.edit',['comments'=>$comment->id])}}"><button title="edit" type="button" class="btn btn-outline-warning mx-3"><i class="fa fa-pencil"></i></button></a>--}}


{{--                                    <form method="post" action="{{route('admin.site-comments.destroy',['comments'=>$comment->id])}}">@csrf @method('delete') <button title="delete" type="submit" class="btn btn-outline-danger mx-3"><i class="fa fa-trash"></i></button></form>--}}


                                    @if($comment->body == !null)
{{--                                        <a href="{{route('admin.site-comments.show',['comments'=>$comment->id])}}"><button type="button" class="btn btn-outline-primary mx-3"> more <i class="fa fa-arrow-left"></i></button></a>--}}

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

