@extends('site.master')
@section('content')

    <!----- Start middle box ----->
    <div class="d-none d-md-flex middle-box">
        <div class="container">
            <div class="row d-flex justify-content-end">
                <div class="col-md-6 text-center">
                    <h2  class="text-center text-primary my-5 pt-3">کسب مهارت های ویژه دنیای من</h2>

                    <p class="text-center pt-1 mb-3">   مهارت های شما میتواند رشد کند,البته اگر در مسیر درست حرکت کنید و یک منبع آموزشی قوی داشته باشید.
                    </p>

                    <a href="#" class="btn py-3 px-4 btn-outline-info mt-4 ml-2 hvr-shrink" id="btn1">شروع کنید</a>
                    <a href="#m1" class="btn py-3 px-4 mt-4 hvr-shrink " id="btn2">همه دوره ها</a>

                </div>
            </div>
         </div>
   </div>
    <!----- End middle box ----->

    <!----- Start category box ----->
    <div class="container">
        <div class="row my-5">
            @foreach($categories as $category)
            <div class="col-md-3 col-sm-6 hvr-grow">
                <div class="card box border-0 shadow mb-3" id="box1" style="background:{{$category->colorcode}}">
                    <a href="category.html" class="text-center text-white my-2 d-block ">
                    <img src="{{asset('/uploads/'.$category->image)}}" alt="webdesign" class="my-2 mx-auto d-block ">
                   {{$category->title}}</a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <!----- End category box ----->

    <!------start slider---------->

    <div class="container d-none d-lg-block">
        <div class="row mt-3 mb-5">
            <div class="col-md-12 ">

                <div id="carouselExampleControls"  class="carousel slide"  data-ride="carousel">
                    <div class="carousel-inner">

                        @foreach($sliders as $slider)
                            <div class="carousel-item  {{ $loop->first ? 'active' : '' }}">
                                <img style="width:100%;border-radius:10px" class="d-block  "   src="{{asset('/uploads/'.$slider->image)}}" alt="First slide">
                            </div>
                        @endforeach

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
        </div>
    </div>
    <br><br>
    <!------end slider------------>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-between">
                <h6 class="title pb-2" id="m1" style="margin:auto">جدیدترین دوره های آموزشی</h6>
            </div>
        </div>
    </div>

    <!----- Start course boxes ----->
    <div  class="container my-3">
        <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card custom-card mb-3">
                    <div class="sub-layer">
                        <img  src="{{asset('site/images/bootstrap.jpg')}}" alt="bootstrap" class="img-fluid card-img-top">
                        <div class="over-layer">
                            <a href="{{route('site.course')}}" class="btn btn-primary"> مشاهده و خرید </a>
                            <span class="badge badge-secondary badge-pill"> 50 <i class="fa fa-shopping-basket pr-1"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="course.html" class="card-link">آموزش جامع Bootstrap 4</a>
                        <p class="text-justify card-text vazir font-14 mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم                        </p>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-primary badge-pill pt-1">60%</span>
                        <div class="float-left">
                            <del class="text-muted font-13">120.000 تومان</del>
                            <small class="text-success mr-2">75.000 تومان</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card custom-card mb-3">
                    <div class="sub-layer">
                        <img src="{{asset('site/images/vuex1.jpg')}}" alt="VUE X" class="img-fluid card-img-top">
                        <div class="over-layer">
                            <a href="{{route('site.course')}}" class="btn btn-primary"> مشاهده و خرید </a>
                            <span class="badge badge-secondary badge-pill"> 50 <i class="fa fa-shopping-basket pr-1"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="course.html" class="card-link">آموزش VUE X</a>
                        <p class="text-justify card-text vazir font-14 mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                        </p>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-primary badge-pill pt-1">60%</span>
                        <div class="float-left">
                            <del class="text-muted font-13">120.000 تومان</del>
                            <small class="text-success mr-2">75.000 تومان</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card custom-card mb-3">
                    <div class="sub-layer">
                        <img src="{{asset('site/images/flutter-1.png')}}" alt="Flutter" class="img-fluid card-img-top">
                        <div class="over-layer">
                            <a href="{{route('site.course')}}" class="btn btn-primary"> مشاهده و خرید </a>
                            <span class="badge badge-secondary badge-pill"> 50 <i class="fa fa-shopping-basket pr-1"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="course.html" class="card-link">آموزش Flutter</a>
                        <p class="text-justify card-text vazir font-14 mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                        </p>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-primary badge-pill pt-1">60%</span>
                        <div class="float-left">
                            <del class="text-muted font-13">120.000 تومان</del>
                            <small class="text-success mr-2">75.000 تومان</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card custom-card mb-3">
                    <div class="sub-layer">
                        <img src="{{asset('site/images/html-2.png')}}" alt="HTML" class="img-fluid card-img-top">
                        <div class="over-layer">
                            <a href="{{route('site.course')}}" class="btn btn-primary"> مشاهده و خرید </a>
                            <span class="badge badge-secondary badge-pill"> 50 <i class="fa fa-shopping-basket pr-1"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="course.html" class="card-link">آموزش HTML</a>
                        <p class="text-justify card-text vazir font-14 mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                        </p>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-primary badge-pill pt-1">60%</span>
                        <div class="float-left">
                            <del class="text-muted font-13">120.000 تومان</del>
                            <small class="text-success mr-2">75.000 تومان</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card custom-card mb-3">
                    <div class="sub-layer">
                        <img src="{{asset('site/images/react-2.png')}}" alt="React Native" class="img-fluid card-img-top">
                        <div class="over-layer">
                            <a href="{{route('site.course')}}" class="btn btn-primary"> مشاهده و خرید </a>
                            <span class="badge badge-secondary badge-pill"> 50 <i class="fa fa-shopping-basket pr-1"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="course.html" class="card-link">آموزش جامع React Native</a>
                        <p class="text-justify card-text vazir font-14 mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                        </p>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-primary badge-pill pt-1">60%</span>
                        <div class="float-left">
                            <del class="text-muted font-13">120.000 تومان</del>
                            <small class="text-success mr-2">75.000 تومان</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card custom-card mb-3">
                    <div class="sub-layer">
                        <img src="{{asset('site/images/php-security-2.png')}}" alt="PHP" class="img-fluid card-img-top">
                        <div class="over-layer">
                            <a href="{{route('site.course')}}" class="btn btn-primary"> مشاهده و خرید </a>
                            <span class="badge badge-secondary badge-pill"> 50 <i class="fa fa-shopping-basket pr-1"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="course.html" class="card-link">آموزش امنیت در PHP</a>
                        <p class="text-justify card-text vazir font-14 mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                        </p>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-primary badge-pill pt-1">60%</span>
                        <div class="float-left">
                            <del class="text-muted font-13">120.000 تومان</del>
                            <small class="text-success mr-2">75.000 تومان</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><br><br>
    <!----- End course boxes ----->

    <!----- Start events ----->

    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-between">
                <h6 class="title pb-2" style="margin:auto">دستاوردهای ما</h6>
            </div>
        </div>
    </div>


    <!----- Start site info ----->
    <div class="container py-4">
        <div class="row">

            <div class="col-sm-4 text-center info">
                <i class="fas fa-user-graduate"></i>
                <p class="mt-3 ">دانش آموزان</p>
                <span id="Partners">0</span>+

            </div>

            <div class="col-sm-4 text-center info">
                <i class="fa fa-laptop"></i>
                <p class="mt-3">دوره های آموزشی</p>
                <span id="Projects">0</span>+
            </div>

            <div class="col-sm-4 text-center info">
                <i class="fas fa-award"></i>
                <p class="mt-3" >جوایز</p>
                <span id="Clients">0</span>+
            </div>

        </div>
    </div><br><br>
    <!----- End site info ----->

    <!----- Start comment slider ----->
    <div class="container">
        <div class="row my-5">
            <div class="owl-carousel owl-theme owl-rtl">

                @foreach($comments as $comment)
                <div class="card  main-comments">
                    <img src="{{asset('/uploads/'.$comment->image)}}" alt="student" class="img-fluid rounded-circle my-2 d-block mx-auto">
                    <div class="card-body">
                        <small class="d-block text-center">{{$comment->name}}</small>
                        <small class="d-block text-justify mt-3 vazir">{{$comment->body}}</small>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>
    <!----- End comment slider ----->

    <div class="container d-none d-lg-block">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-between">
                <h6 class="title pb-2" style="margin:auto">بهترین مدرسین ما</h6>
            </div>
        </div>
    </div>

    <!----- Start best teachers ----->
    <div class="container d-none d-lg-block">
        <div class="row mt-3 mb-5">

            <div class="col-md-3 hvr-grow-rotate">
                <div class="card teacher-card">
                    <img src="{{asset('site/images/teacher1.jpg')}}" alt="teacher" class="img-fluid card-img-top ">
                    <div class="card-body">
                        <p class="card-text font-14 text-center">مریم صالحی</p>
                        <p class="card-text font-12  text-info text-center">مدرس حرفه ای طراحی سایت</p>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <a href="#"><i class="fab fa-instagram ml-2 text-danger"></i></a>
                            <a href="#"><i class="fab fa-telegram ml-2 text-primary"></i></a>
                            <a href="#"><i class="fab fa-whatsapp ml-2 text-success"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 hvr-grow-rotate">
                <div class="card teacher-card">
                    <img src="{{asset('site/images/teacher3.jpg')}}" alt="teacher" class="img-fluid card-img-top">
                    <div class="card-body">
                        <p class="card-text font-14 text-center">محمد انصاری</p>
                        <p class="card-text font-12  text-info text-center">مدرس حرفه ای اندروید</p>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <a href="#"><i class="fab fa-instagram ml-2 text-danger"></i></a>
                            <a href="#"><i class="fab fa-telegram ml-2 text-primary"></i></a>
                            <a href="#"><i class="fab fa-whatsapp ml-2 text-success"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 hvr-grow-rotate">
                <div class="card teacher-card">
                    <img src="{{asset('site/images/teacher2.jpg')}}" alt="teacher" class="img-fluid card-img-top">
                    <div class="card-body">
                        <p class="card-text font-14 text-center">سارا یگانه</p>
                        <p class="card-text font-12  text-info text-center">مدرس حرفه ای  گرافیک</p>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <a href="#"><i class="fab fa-instagram ml-2 text-danger"></i></a>
                            <a href="#"><i class="fab fa-telegram ml-2 text-primary"></i></a>
                            <a href="#"><i class="fab fa-whatsapp ml-2 text-success"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 hvr-grow-rotate">
                <div class="card teacher-card">
                    <img src="{{asset('site/images/teacher.jpg')}}" alt="teacher" class="img-fluid card-img-top">
                    <div class="card-body">
                        <p class="card-text font-14 text-center">علی نوروزی</p>
                        <p class="card-text font-12  text-info text-center">مدرس حرفه ای برنامه نویسی وب</p>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <a href="#"><i class="fab fa-instagram ml-2 text-danger"></i></a>
                            <a href="#"><i class="fab fa-telegram ml-2 text-primary"></i></a>
                            <a href="#"><i class="fab fa-whatsapp ml-2 text-success"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><br><br>
    <!----- End best teachers ----->

    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-between">
                <h6 class="title pb-2" style="margin:auto">تازه ترین مقالات آموزشی</h6>
            </div>
        </div>
    </div>

    <!----- Start article boxes ----->
    <div class="container">
        <div class="row mt-3 mb-5">
            @foreach($blogs as $blog)
               <div class="col-md-6 col-lg-4  p-2">
                <div class="card custom-card mb-3 shadow-sm ">

                    <img src="{{asset('/uploads/'.$blog->image)}}" alt="article" class="img-fluid card-img-top boxme">

                    <div class="card-body">
                        <div class="text-center mb-2 mt-2">
                            <a href="{{route('site.blog_details',['blog'=>$blog->id])}}" class="card-link font-14">{{$blog->title}}</a>
                        </div>
                        <p class="card-text font-13 vazir">{{Str::of($blog->body)->words(10, '...')}}</p>
                        <span class="bg-light p-2 text-muted font-12 ">
                            <i class="fa fa-pen ml-1"></i> {{$blog->writer}}
                        </span>
                        <a href="{{route('site.blog_details',['blog'=>$blog->id])}}" class="btn float-left read-more hvr-shrink">بیشتر بخوانید</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!----- End article boxes ----->

@endsection
