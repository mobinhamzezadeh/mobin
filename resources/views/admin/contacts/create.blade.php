@extends('admin.master')
@section('content')


<div class="container">
<div class="row justify-content-center"  >
<div class="col-md-6">

        <form style="padding:25px;border-radius:5px"  class="bg-white mt-5" method="post"  action="{{route('admin.contacts.store')}}">
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
                            <label for="title">عنوان مشخصات</label>
                            <input type="text" class="form-control" id="title" value="{{old('title')}}" name="title" placeholder="عنوان مشخصات را وارد کنید"><br>
                        </div>
                        <div class="col-md-6">
                            <label for="phone">شماره تلفن</label>
                            <input type="text" class="form-control" id="phone" value="{{old('phone')}}" name="phone" placeholder="شماره تلفن را وارد کنید"><br>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="email">آدرس ایمیل</label>
                            <input type="email" class="form-control" id="email" value="{{old('email')}}" name="email" placeholder="ایمیل سایت را وارد کنید"><br>
                        </div>
                        <div class="col-md-6">
                            <label for="address">آدرس شرکت</label>
                            <input type="text" class="form-control" id="address" value="{{old('address')}}" name="address" placeholder="آدرس شرکت را وارد کنید"><br>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">توضیحات دسته</label>
                    <textarea class="form-control" name="body" id="editor1" value="{{old('body')}}" cols="30" rows="5"></textarea>
                </div>

            </div>

            <button type="submit" class="btn btn-outline-primary mx-3 mb-5">ثبت دسته</button>
            <a href="{{route('admin.contacts.index')}}"><button type="button" class="btn btn-outline-dark mx-3 mb-5">انصراف</button></a>


        </form>

</div>
</div>
</div>



@endsection

