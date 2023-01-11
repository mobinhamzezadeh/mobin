@extends('admin.master')
@section('content')


<div class="container">
<div class="row justify-content-center"  >
<div class="col-md-6">

        <form  class="bg-white mt-5" enctype="multipart/form-data" method="post" action="{{route('admin.teacher_rules.store')}}">
            @foreach($errors->all() as $error)
                <ul style="list-style:none" >
                    <li class="text-danger mx-3">{{$error}}</li>
                </ul>
            @endforeach()
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="name">عنوان قانون</label>
                    <input type="text" class="form-control" placeholder="عنوان قوانین را وارد کنید" id="title" value="{{old('title')}}" name="title" ><br><br>
                </div>

                <div class="form-group">
                    <label for="name">توضیحات استاندارد ها لازم</label>
                    <textarea name="body"  id="editor1" cols="30" rows="10"></textarea>
                </div>

            </div>

            <button type="submit" class="btn btn-outline-primary mx-3 mb-5">ثبت</button>
            <a href="{{route('admin.teacher_rules.index')}}"><button type="button" class="btn btn-outline-dark mx-3 mb-5">انصراف</button></a>


        </form>

</div>
</div>
</div>



@endsection

