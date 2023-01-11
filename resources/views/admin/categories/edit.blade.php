@extends('admin.master')
@section('content')


    <div class="container">
        <div class="row justify-content-center"  >
            <div class="col-md-6">

    <form style="padding:15px; border-radius:15px" class="bg-white mt-5" enctype="multipart/form-data"  method="post" action="{{route('admin.categories.update',['category'=>$category->id])}}">

        @foreach($errors->all() as $error)
            <ul style="list-style:none" >
                <li class="text-danger mx-3">{{$error}}</li>
            </ul>
        @endforeach()

        @csrf
        @method('put')

        <div class="card-body">

            <div class="form-group">
                <label style="color: red" for="title">عنوان دسته</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$category->title}}"><br>
            </div>

            <div class="form-group">
                <div class="row">

                    <div class="col-md-6">
                        <label for="name">رنگ پس زمینه</label>
                        <input type="text" placeholder="کد رنگ را وارد کنید"  value="{{$category->colorcode}}" class="form-control" id="colorcode" name="colorcode">
                    </div>

                    <div class="col-md-6">
                        @if($category->image == !null)
                        <label for="name">تصویر دسته</label><br>
                        <img style="background: #565151 ;padding:10px" class="img-fluid" src="{{asset('uploads/'.$category->image)}}" alt="">
                        @endif
                        <input type="file" name="image" ><br>

                    </div>

                </div>
            </div>



        </div>

        <button type="submit" class="btn btn-outline-primary mx-3">ویرایش دسته</button>
        <a href="{{route('admin.categories.index')}}"><button type="button" class="btn btn-outline-dark mx-3">انصراف</button></a>

    </form>

</div>
</div>
</div>
@endsection
