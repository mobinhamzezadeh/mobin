@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-bordered mt-5">




                    <tr>
                        <th style="text-align: center">#</th>
                        <th style="text-align: center">نویسنده بلاگ</th>
                        <th style="text-align: center">بلاگ</th>
                        <th style="text-align: center">وضعیت</th>
                        <th style="text-align: center">عملیات</th>
                    </tr>


                    @foreach($comments as $comment)
                        <tr>
                            <th style="text-align: center">{{$comment->id}}</th>
                            <td style="text-align: center">{{$comment->user->name}}</td>
                            <td style="text-align: center">{{$comment->blog->title}}</td>
                            <td style="text-align: center"><a class="btn {{$comment->is_active?'btn-outline-success':'btn-outline-danger'}}" href="{{route('admin.comments.is_active',['comment'=>$comment->id])}}">{{$comment->is_active?'مجاز':'غیرمجاز'}}</a></td>
                            <td style="text-align: center">

                                <div  class="btn-group mx-5" role="group" aria-label="Basic outlined example">
                                    <form method="post" action="{{route('admin.comments.destroy',['comment'=>$comment->id])}}">@csrf @method('delete') <button title="delete" type="submit" class="btn btn-outline-danger mx-3"><i class="fa fa-trash"></i></button></form>

                                    @if($comment->body == !null)
                                        <a href="{{route('admin.comments.show',['comment'=>$comment->id])}}"><button type="button" class="btn btn-outline-primary mx-3"> more <i class="fa fa-arrow-left"></i></button></a>
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

