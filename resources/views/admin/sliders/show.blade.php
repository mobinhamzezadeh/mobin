@extends('admin.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center ">


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



                <a href="{{route('admin.sliders.index')}}"><button type="button" class="btn btn-outline-danger mt-5 mb-5">بازگشت</button></a>
        </div>
    </div>









@endsection
