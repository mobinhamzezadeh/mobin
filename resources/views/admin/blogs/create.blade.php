@extends('admin.master')
@section('content')


<div class="container">
<div class="row justify-content-center"  >
<div class="col-md-6">

        <form  class="bg-white mt-5" method="post" enctype="multipart/form-data" action="{{route('admin.blogs.store')}}">
            @foreach($errors->all() as $error)
                <ul style="list-style:none" >
                    <li class="text-danger mx-3">{{$error}}</li>
                </ul>
            @endforeach()
            @csrf
            <div class="ca rd-body">

                <div class="form-group">
                    <label for="name">عنوان بلاگ</label>
                    <input type="text" class="form-control" id="title" value="{{old('title')}}" name="title" placeholder="عنوان بلاگ را وارد کنید"><br>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">تصویر بلاگ</label>
                            <input type="file" class="form-control" id="image" name="image" ><br>
                        </div>
                        <div class="col-md-6">
                            <label for="name">نویسنده بلاگ</label>
                            <input type="text" class="form-control" id="writer" value="{{old('writer')}}" name="writer" placeholder="نام نویسنده را وارد کنید"><br>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="image">توضیحات بلاگ</label>
                    <textarea class="form-control" name="body" value="{{old('body')}}" id="editor1" cols="30" rows="5"></textarea><br>
                </div>





            </div>

            <button type="submit" class="btn btn-outline-primary mx-3 mb-5">ثبت دسته</button>
            <a href="{{route('admin.blogs.index')}}"><button type="button" class="btn btn-outline-dark mx-3 mb-5">انصراف</button></a>


        </form>

</div>
</div>
</div>



@endsection

