@extends('admin.master')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table table-bordered mt-5">
            <tr>
                <th style="text-align: center">#</th>
                <th style="text-align: center">عنوان دسته</th>
                <th style="text-align: center">عملیات</th>
            </tr>

            @foreach($categories as $category)
                <tr>
                    <th style="text-align: center">{{$category->id}}</th>
                    <td style="text-align: center">{{$category->title}}</td>
                    <td style="text-align:center">
                        <div  class="btn-group mx-5" role="group" aria-label="Basic outlined example">
                            <a href="{{route('admin.categories.edit',['category'=>$category->id])}}"><button type="button" class="btn btn-outline-warning mx-3"><i class="fa fa-pencil"></i></button></a>
                            <form method="post" action="{{route('admin.categories.destroy',['category'=>$category->id])}}">@csrf @method('delete') <button type="submit" class="btn btn-outline-danger mx-3"><i class="fa fa-trash"></i></button></form>
                            <a href="{{route('admin.categories.show',['category'=>$category->id])}}"><button type="button" class="btn btn-outline-primary mx-3"> more <i class="fa fa-arrow-left"></i></button></a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    </div>
    </div>

@endsection()

