@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">



                <table class="mt-5">

                    <tr>
                        <td><img class="img-fluid " src="{{asset('/uploads/'.$blog->image)}}"><br><br></td>
                    </tr>

                    <tr class="" style="margin-top:50px;">
                            <td><h4>{{$blog->title}}</h4><br></td>
                    </tr>

                    <tr class="" style="margin-top:50px;">
                        <td>
                            <p style="color:#6c757d">نویسنده: {{$blog->writer}} |  <i class="fa fa-calendar"></i> {{verta($blog->created_at)->format('Y.m.d')}} </p>

                        </td>

                    </tr>

                </table>


                <p class="mt-5 mb-3" style="text-align:justify;color: #3d3f44;font-size:16px">{{$blog->body}}</p>

                <a href="{{route('admin.blogs.index')}}"><button type="button" class="btn btn-outline-danger mt-5 mb-5">بازگشت</button></a>

            </div>
        </div>
    </div>

@endsection
