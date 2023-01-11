@extends('admin.master')
@section('content')


    <div class="container">
        <div class="row justify-content-center"  >
            <div class="col-md-9">

    <form style="padding:15px; border-radius:15px" class="bg-white mt-5" enctype="multipart/form-data"  method="post" action="{{route('admin.blogs.update',['blog'=>$blog->id])}}">

        @foreach($errors->all() as $error)
            <ul style="list-style:none" >
                <li class="text-danger mx-3">{{$error}}</li>
            </ul>
        @endforeach()

        @csrf
        @method('put')

        <div class="card-body">

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label style="color: red" for="title">عنوان بلاگ</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$blog->title}}"><br>
                    </div>
                    <div class="col-md-6">
                        <label style="color: red" for="name">نویسنده بلاگ</label>
                        <input type="text" class="form-control" id="writer" value="{{$blog->writer}}" name="writer"><br>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <label style="color:red">تصویر بلاگ</label>
                <img class="img-fluid" src="{{asset('uploads/'.$blog->image)}}" alt=""><br><br><br>
                <input type="file" name="image" ><br>
            </div><br><br>

            <div class="form-group">
                <label style="color: red" for="image">توضیحات بلاگ</label>
                <textarea class="form-control" name="body" id="editor1" cols="30" >{{$blog->body}}</textarea>
            </div><br><br>

        </div>

        <button type="submit" class="btn btn-outline-primary mx-3 mb-5">ویرایش دسته</button>
        <a href="{{route('admin.blogs.index')}}"><button type="button" class="btn btn-outline-dark mx-3 mb-5">انصراف</button></a>

    </form>

</div>
</div>
</div>
@endsection
