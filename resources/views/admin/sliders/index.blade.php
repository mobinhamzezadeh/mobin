@extends('admin.master')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-10">
        <table class="table table-bordered mt-5">
            <tr>
                <th style="text-align: center">#</th>
                <th style="text-align: center;width: 500px">تصاویر اسلایدر</th>
                <th style="text-align: center;">عملیات</th>
            </tr>

            @foreach($sliders as $slider)
                <tr>
                    <th style="text-align: center">{{$slider->id}}</th>
                    <td style="text-align: center"><img class="img-fluid" style="height:100px" src="{{asset('/uploads/'.$slider->image)}}" alt=""></td>
                    <td style="text-align: center">

                        <div  class="btn-group mx-5 m-auto" role="group" aria-label="Basic outlined example">
                            <a href="{{route('admin.sliders.edit',['slider'=>$slider->id])}}"><button title="edit" type="button" class="btn btn-outline-warning mx-3"><i class="fa fa-pencil"></i></button></a>
                            <form method="post" action="{{route('admin.sliders.destroy',['slider'=>$slider->id])}}">@csrf @method('delete') <button title="delete" type="submit" class="btn btn-outline-danger mx-3"><i class="fa fa-trash"></i></button></form>
                            <a href="{{route('admin.sliders.show',['slider'=>$slider->id])}}"><button type="button" class="btn btn-outline-primary mx-3"> more <i class="fa fa-arrow-left"></i></button></a>

                        </div>

                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    </div>
    </div>

@endsection()

