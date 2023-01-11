@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">



                <table class="mt-5">



                    <tr class="" style="margin-top:50px;">
                        <td><h4>{{$comment->blog->title}}</h4><br></td>
                    </tr>

                    <tr class="" style="margin-top:50px;">
                        <td>
                            <p style="color:#6c757d"> <i class="fa fa-calendar"></i> {{verta($comment->created_at)->format('Y.m.d')}} </p>
                        </td>
                        <br>

                        <td>
                            <p style="color:#6c757d"> |نویسنده:   {{$comment->user->name}} </p>
                        </td>

                    </tr>

                </table>

                <textarea style="background:white" class="form-control" disabled cols="130" rows="10">{{$comment->body}}</textarea>

                <a href="{{route('admin.comments.index')}}"><button type="button" class="btn btn-outline-danger mt-5 mb-5">بازگشت</button></a>

            </div>
        </div>
    </div>

@endsection
