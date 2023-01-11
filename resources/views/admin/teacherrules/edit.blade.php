@extends('admin.master')
@section('content')


    <div class="container">
        <div class="row justify-content-center"  >
            <div class="col-md-6">

    <form style="padding:15px; border-radius:15px" class="bg-white mt-5" enctype="multipart/form-data"  method="post" action="{{route('admin.teacher_rules.update',['teacher_rule'=>$TeacherRule->id])}}">

        @foreach($errors->all() as $error)
            <ul style="list-style:none" >
                <li class="text-danger mx-3">{{$error}}</li>
            </ul>
        @endforeach()

        @csrf
        @method('put')

        <div class="card-body">

            <div class="form-group">
                 <label for="title">عنوان دسته</label>
                 <input type="text" class="form-control" id="title" name="title" value="{{$TeacherRule->title}}"><br>
            </div>

            <div class="form-group">
                 <label for="name">ویرایش توضیحات</label><br>
                 <textarea name="body" id="editor1" class="form-control" rows="10">{{$TeacherRule->body}}</textarea>
            </div>



        </div>

        <button type="submit" class="btn btn-outline-primary mx-3">ویرایش دسته</button>
        <a href="{{route('admin.teacher_rules.index')}}"><button type="button" class="btn btn-outline-dark mx-3">انصراف</button></a>

    </form>

</div>
</div>
</div>
@endsection
