@extends('admin.master')
@section('content')


<div class="container">
<div class="row justify-content-center"  >
<div class="col-md-6">

        <form  class="bg-white mt-5 p-5" method="post" enctype="multipart/form-data" action="{{route('admin.menus.store')}}">
            @foreach($errors->all() as $error)
                <ul style="list-style:none" >
                    <li class="text-danger mx-3">{{$error}}</li>
                </ul>
            @endforeach()
            @csrf
            <div class="ca rd-body">


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">عنوان منو</label>
                            <input type="text" class="form-control" value="{{old('title')}}" id="title" name="title" placeholder="عنوان منو را وارد کنید"><br>
                        </div>
                        <div class="col-md-6">
                            <label for="name">لینک</label>
                            <input type="text" class="form-control" id="link" value="{{old('link')}}" name="link" placeholder="لینک مورد نظر را وارد کنید"><br>
                        </div>
                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-outline-primary mx-3 mb-5">ثبت</button>
            <a href="{{route('admin.menus.index')}}"><button type="button" class="btn btn-outline-dark mx-3 mb-5">انصراف</button></a>


        </form>

</div>
</div>
</div>



@endsection

