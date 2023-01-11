@extends('admin.master')
@section('content')


    <div class="container">
        <div class="row justify-content-center"  >
            <div class="col-md-9">

    <form style="padding:15px; border-radius:15px" class="bg-white mt-5" enctype="multipart/form-data"  method="post" action="{{route('admin.menus.update',['menu'=>$menu->id])}}">

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
                        <label style="color: red" for="title">عنوان منو</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$menu->title}}"><br>
                    </div>
                    <div class="col-md-6">
                        <label style="color: red" for="name">لینک منو</label>
                        <input type="text" class="form-control" id="link" value="{{$menu->link}}" name="link"><br>
                    </div>
                </div>
            </div><br>

        </div>

        <button type="submit" class="btn btn-outline-primary mx-3 mb-5">ویرایش دسته</button>
        <a href="{{route('admin.menus.index')}}"><button type="button" class="btn btn-outline-dark mx-3 mb-5">انصراف</button></a>

    </form>

</div>
</div>
</div>
@endsection
