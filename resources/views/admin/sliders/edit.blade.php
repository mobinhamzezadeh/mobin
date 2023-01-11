@extends('admin.master')
@section('content')


    <div class="container">
        <div class="row justify-content-center"  >
            <div class="col-md-9">

    <form style="padding:15px; border-radius:15px" class="bg-white mt-5" enctype="multipart/form-data" method="post" action="{{route('admin.sliders.update',['slider'=>$slider->id])}}">

        @foreach($errors->all() as $error)
            <ul style="list-style:none" >
                <li class="text-danger mx-3">{{$error}}</li>
            </ul>
        @endforeach()

        @csrf
        @method('put')

        <div class="card-body">

            <div class="col-md-12 mt-5">
                <div id="carouselExampleControls" style="width:auto" class="carousel slide"  data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid"  src="{{asset('/uploads/'.$slider->image)}}" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

                <br><br><br>
                <input type="file" name="image" ><br><br><br>




        </div>

        <button type="submit" class="btn btn-outline-primary mx-3 mb-5">ویرایش دسته</button>
        <a href="{{route('admin.sliders.index')}}"><button type="button" class="btn btn-outline-dark mx-3 mb-5">انصراف</button></a>

    </form>

</div>
</div>
</div>
@endsection
