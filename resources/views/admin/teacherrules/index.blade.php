@extends('admin.master')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table table-bordered mt-5">
            <tr>
                <th style="text-align: center">#</th>
                <th style="text-align: center">استاندارد مربوطه</th>
                <th style="text-align: center">عملیات</th>
            </tr>

            @foreach($rules as $rule)
                <tr>
                    <th style="text-align: center">{{$rule->id}}</th>
                    <td style="text-align: center">{{$rule->title}}</td>

                    <td style="text-align: center"><p>{{\Illuminate\Support\Str::of($rule->body)->words(10, '...')}}</p></td>

                    <td style="text-align:center">
                        <div  class="btn-group mx-5" role="group" aria-label="Basic outlined example">
                            <a href="{{route('admin.teacher_rules.edit',['teacher_rule'=>$rule->id])}}"><button type="button" class="btn btn-outline-warning mx-3"><i class="fa fa-pencil"></i></button></a>
                            <form method="post" action="{{route('admin.teacher_rules.destroy',['teacher_rule'=>$rule->id])}}">@csrf @method('delete') <button type="submit" class="btn btn-outline-danger mx-3"><i class="fa fa-trash"></i></button></form>
                            <a href="{{route('admin.teacher_rules.show',['teacher_rule'=>$rule->id])}}"><button type="button" class="btn btn-outline-primary mx-3"> more <i class="fa fa-arrow-left"></i></button></a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    </div>
    </div>

@endsection()

