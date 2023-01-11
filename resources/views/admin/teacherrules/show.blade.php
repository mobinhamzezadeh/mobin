@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">



                <table class="mt-5">

                    <tr>
                        <td style="text-align: center"><p style="padding:10px;background:white">{{$TeacherRule->title}}</p><br><br></td>
                    </tr>

                    <tr class="" style="margin-top:50px;">
                        <td><p style="padding:10px;background:white">{{$TeacherRule->body}}</p><br></td>
                    </tr>

                </table>



                <a href="{{route('admin.teacher_rules.index')}}"><button type="button" class="btn btn-outline-danger mt-5">بازگشت</button></a>

            </div>
        </div>
    </div>

@endsection
