@extends('admin.master')
@section('content')


<div class="container">
<div class="row justify-content-center"  >
<div class="col-md-6">

        <form  class="bg-white mt-5" method="post" enctype="multipart/form-data" action="{{route('admin.sliders.store')}}">
            @foreach($errors->all() as $error)
                <ul style="list-style:none" >
                    <li class="text-danger mx-3">{{$error}}</li>
                </ul>
            @endforeach()
            @csrf
            <div class="ca rd-body">
                <div class="form-group">
                            <label for="name">تصویر اسلایدر</label>
                            <input type="file" class="form-control" id="image" name="image" ><br>
                </div>
            </div>

            <button type="submit" class="btn btn-outline-primary mx-3 mb-5">ثبت</button>
            <a href="{{route('admin.sliders.index')}}"><button type="button" class="btn btn-outline-dark mx-3 mb-5">انصراف</button></a>


        </form>

</div>
</div>
</div>



@endsection

