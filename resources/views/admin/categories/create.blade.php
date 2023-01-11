@extends('admin.master')
@section('content')


<div class="container">
<div class="row justify-content-center"  >
<div class="col-md-6">

        <form  class="bg-white mt-5" enctype="multipart/form-data" method="post" action="{{route('admin.categories.store')}}">
            @foreach($errors->all() as $error)
                <ul style="list-style:none" >
                    <li class="text-danger mx-3">{{$error}}</li>
                </ul>
            @endforeach()
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="name">عنوان دسته</label>
                    <input type="text" class="form-control" id="title" value="{{old('title')}}" name="title" placeholder="نام دسته را وارد کنید"><br>
                </div>

                <div class="form-group">
                    <div class="row">

                        <div class="col-md-6">
                            <label for="name">رنگ پس زمینه</label>
                            <input type="text" class="form-control" placeholder="کد رنگ را وارد کنید" id="colorcode" name="colorcode"><br>
                        </div>

                        <div class="col-md-6">
                            <label for="name">تصویر دسته</label>
                            <input type="file" class="form-control" id="image"  name="image"><br>
                        </div>

                    </div>
                </div>


            </div>

            <button type="submit" class="btn btn-outline-primary mx-3 mb-5">ثبت دسته</button>
            <a href="{{route('admin.categories.index')}}"><button type="button" class="btn btn-outline-dark mx-3 mb-5">انصراف</button></a>


        </form>

</div>
</div>
</div>



@endsection

