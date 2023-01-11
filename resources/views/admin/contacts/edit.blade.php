@extends('admin.master')
@section('content')


    <div class="container">
        <div class="row justify-content-center"  >
            <div class="col-md-9">

    <form style="padding:15px; border-radius:15px" class="bg-white mt-5" enctype="multipart/form-data"  method="post" action="{{route('admin.contacts.update',['contact'=>$contact->id])}}">

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
                        <label style="color: red" for="title">ویرایش عنوان</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$contact->title}}"><br>
                    </div>
                    <div class="col-md-6">
                        <label style="color: red" for="name">ویرایش تلفن</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$contact->phone}}"><br>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label style="color:red">ویرایش ایمیل</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{$contact->email}}"><br>
                    </div>
                    <div class="col-md-6">
                        <label style="color:red">ویرایش آدرس</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$contact->address}}"><br>
                    </div>
                </div>

                <br><br>
            </div>

            <div class="form-group">
                <label style="color: red" for="image">توضیحات بلاگ</label>
                <textarea class="form-control" name="body" id="editor1" cols="30" >{{$contact->body}}</textarea>
            </div><br><br>

        </div>

        <button type="submit" class="btn btn-outline-primary mx-3 mb-5">ویرایش دسته</button>
        <a href="{{route('admin.contacts.index')}}"><button type="button" class="btn btn-outline-dark mx-3 mb-5">انصراف</button></a>

    </form>

</div>
</div>
</div>
@endsection
