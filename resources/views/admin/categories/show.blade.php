@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">



                <table class="mt-5">

                    @if($category->image == !null)
                    <tr>
                        <td style="text-align: center"><img style="background:{{$category->colorcode}};padding:20px;" class="img-fluid " src="{{asset('/uploads/'.$category->image)}}"><br><br></td>
                    </tr>
                    @endif

                    <tr class="" style="margin-top:50px;">
                        <td><h4>{{$category->title}}</h4><br></td>
                    </tr>



                </table>



                <a href="{{route('admin.categories.index')}}"><button type="button" class="btn btn-outline-danger mt-5">بازگشت</button></a>

            </div>
        </div>
    </div>

@endsection
