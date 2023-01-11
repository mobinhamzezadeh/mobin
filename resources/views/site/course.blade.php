@extends('site.master')
@section('content')


    <div class="container">
        <ul class="breadcrumb bg-white mt-4 ">
            <li class="breadcrumb-item"><a href="{{route('site.index')}}" class="font-12 vazir">صفحه اصلی</a></li>
            <li class="breadcrumb-item"><a href="{{route('site.index')}}" class="pr-2 font-12 vazir">دوره های آموزشی</a></li>
{{--            <li class="breadcrumb-item"><a href="#" class="pr-2 font-12 vazir">آموزش HTML</a></li>--}}
        </ul>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-4 mb-3">
                <img src="{{asset('site/images/html-2.png')}}"  class="img-fluid" alt="HTML">
                <ul class="list-group text-center list-group-flush custom-list-group">
                    <li class="list-group-item font-13">عنوان دوره : آموزش HTML</li>
                    <li class="list-group-item font-13">مدرس : علی نوروزی</li>
                    <li class="list-group-item font-13">سطح دوره : مقدماتی تا پیشرفته</li>
                    <li class="list-group-item font-13">وضعیت دوره : درحال برگزاری</li>
                    <li class="list-group-item font-13">قسمت های ارسالی : 12</li>
                    <li class="list-group-item font-13">قیمت دوره : 64000 تومان</li>
                </ul>
                <button class="btn btn-info btn-block mt-3 py-2 font-12"><i class="fa fa-cart-plus align-middle"></i> افزودن به سبد خرید</button>
            </div>

            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header bg-white px-0 course-table">
                        <ul class="nav nav-justified pr-0">
                            <li class="nav-item"><a href="#course-info" class="nav-link active font-14" data-toggle="list">معرفی دوره</a></li>
                            <li class="nav-item"><a href="#comment" class="nav-link font-14" data-toggle="list">پرسش و پاسخ دوره</a></li>
                            <li class="nav-item"><a href="#teacher-info" class="nav-link font-14" data-toggle="list">درباره مدرس</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="course-info"><!-- Start course info -->

                                <h1 class="mb-3 text-info">آموزش HTML</h1>

                                <video src="" controls class="embed-responsive embed-responsive-item"></video>

                                <p class="text-justify course-text vazir font-14 my-5">
                                    برای اینکه وارد دنیای طراحی وب شوید اولین چیزی که باید با آن آشنا شوید HTML
                                    است، HTML یک زبانه نشانگذاری برای ایجاد وبسایت ها است
                                    که به ما این اجازه را میدهد، اسکلت وبسایت خود را به وجود آوریم .
                                    در این دوره من قصد دارم بدونه نیاز به هیچ پیش شرط به شما HTML
                                    را آموزش دهم تا به شما کمک کنم اولین قدم برای ایجاد یک وبسایت را بر دارید .
                                </p>

                                <h6 class="mb-3 mt-3">سر فصل ها :</h6>

                                <div class="mb-2 course-items px-2 py-4 d-flex align-items-center">
                                    <span class="bg-info count text-center text-white mr-3 font-13">1</span>
                                    <span class="mr-3 font-13">ساختار اصلی html - ابزار های مورد نیاز برای یادگیری - معرفی نرم افزار</span>
                                </div>

                                <div class="mb-2 course-items px-2 py-4 d-flex align-items-center">
                                    <span class="bg-info count text-center text-white mr-3 font-13">2</span>
                                    <span class="mr-3 font-13">آشنایی با تگ ها ، معرفی برخی از تگ ها ، دسته بندی تگ ها ، ساختار تگ های Index </span>
                                </div>

                                <div class="mb-2 course-items px-2 py-4 d-flex align-items-center">
                                    <span class="bg-info count text-center text-white mr-3 font-13">3</span>
                                    <span class="mr-3 font-13">نرم ا فزار استفاده شده در اموزش ، ایجاد سند ، tag a و tag p و تشریح کد های html - t head body </span>
                                </div>

                                <div class="mb-2 course-items px-2 py-4 d-flex align-items-center">
                                    <span class="bg-info count text-center text-white mr-3 font-13">4</span>
                                    <span class="mr-3 font-13">آشنایی کامل با اَتریبیوت ها در Html 5 </span>
                                </div>

                                <div class="mb-2 course-items px-2 py-4 d-flex align-items-center product-link">
                                    <span class="bg-info count text-center text-white mr-3 font-13">5</span>
                                    <span class="mr-3 font-13">کار با متون در html 5 ، تگ p ، تگ h ، تگ span ، تگ hr و بررسی تفاوت ها و کاربرد های مخصوص هر تگ </span>
                                </div>

                            </div>
                            <!-- End course info -->


                            <!-- Start comment -->
                            <div class="tab-pane fade" id="comment">

                                <form action="" method="">
                                    <div class="row">
                                        <div class="col form-group">
                                            <input type="text" id="name" class="form-control rounded-pill" placeholder="نام خود را وارد کنید ...">
                                        </div>
                                        <div class="col form-group">
                                            <input type="email" id="email" class="form-control rounded-pill" placeholder="ایمیل خود را وارد کنید ...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea  cols="30" rows="10" class="form-control w-100 rounded-lg p-3" placeholder="دیدگاه خود را وارد کنید ..."></textarea>
                                    </div>

                                    <section class='rating-widget mt-2'><!-- star rating-->
                                        <div class='rating-stars'>
                                            <ul id='stars'>
                                                <li class='star' data-tooltip='ضعیف' data-value='1'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' data-tooltip='متوسط' data-value='2'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' data-tooltip='خوب' data-value='3'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' data-tooltip='خیلی خوب' data-value='4'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                                <li class='star' data-tooltip='عالی' data-value='5'>
                                                    <i class='fa fa-star fa-fw'></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </section>

                                    <button type="submit" class="btn btn-primary rounded-pill mr-auto d-block font-13">ارسال</button>
                                </form>

                                <div class="bg-light my-3 p-2 pb-4">
                                    <div class="d-flex align-items-center">
                                        <p class="text-danger mb-0 vazir font-13">arash</p>
                                        <small class="mx-5 text-muted">15 تیر 1398</small>
                                    </div>
                                    <p class="text-justify my-2 vazir font-13">آیا آموزش های این دوره تموم شده یا هنوز ادامه داره ؟! </p>

                                    <div class=" shadow-sm mr-5 w-75 mt-3 p-2 bg-white">
                                        <div class="d-flex align-items-center">
                                            <p class="text-danger mb-0 vazir font-13">Admin</p>
                                            <small class="mx-5 text-muted">15 تیر 1398</small>
                                        </div>
                                        <p class="text-justify my-2 vazir font-13">سلام بزودی قسمت های جدید آپلود خواهد شد.</p>
                                    </div>

                                </div>


                            </div>
                            <!-- End comment -->

                            <!-- Start teacher info -->

                            <div class="tab-pane fade" id="teacher-info">

                                <img src="{{asset('site/images/teacher.jpg')}}" alt="" class="img-fluid d-block mx-auto">

                                <p class="text-justify mt-5 vazir font-14">اول داستان، طراح گرافیک بودم و ۲ سالی به عنوان طراح مشغول بودم،
                                    بعد به برنامه‌نویسی علاقمند شدم و الان بیشتر
                                    از ۱۰ ساله که عاشق کدزنی و چالش‌های پروژه‌های مختلفم. به تدریس علاقه خاصی دارم
                                    و دوست دارم دانشی که در این راه بدست آوردم را در اختیار دیگران هم قرار بدم.
                                </p>

                                <table class="table table-striped table-bordered text-center my-5  font-14">
                                    <tr>
                                        <td>نام مدرس</td>
                                        <td>مقطع تحصیلی</td>
                                        <td>رشته</td>
                                        <td>دانشگاه</td>
                                    </tr>
                                    <tr>
                                        <td>علی نوروزی</td>
                                        <td>لیسانس</td>
                                        <td>گرافیک</td>
                                        <td>آزاد</td>
                                    </tr>
                                </table>

                                <h6 class="mb-4">مهارت ها :</h6>

                                <div class="progress mb-4">
                                    <div class="progress-bar bg-success" style="width: 95%;">Html (95%)</div>
                                </div>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-success" style="width: 98%;">Css (98%)</div>
                                </div>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-success" style="width: 80%;">Javascript (80%)</div>
                                </div>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-success" style="width: 70%;">Jquery (70%)</div>
                                </div>

                            </div><!-- End teacher info -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-between">
                <h6 class="title pb-2">دوره های پیشنهادی</h6>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-3">

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card custom-card mb-3">
                    <div class="sub-layer">
                        <img src="{{asset('site/images/bootstrap.jpg')}}" alt="bootstrap" class="img-fluid card-img-top">
                        <div class="over-layer">
                            <a href="course.html" class="btn btn-primary"> مشاهده و خرید </a>
                            <span class="badge badge-secondary badge-pill"> 50 <i class="fa fa-shopping-basket pr-1"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="course.html" class="card-link">آموزش جامع Bootstrap 4</a>
                        <p class="text-justify card-text vazir font-14 mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است. چاپگرها و متون بلکه
                            روزنامه و مجله در ستون و سطرآنچنان که لازم است.
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

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card custom-card mb-3">
                    <div class="sub-layer">
                        <img src="{{asset('site/images/vuex1.jpg')}}" alt="VUE X" class="img-fluid card-img-top">
                        <div class="over-layer">
                            <a href="course.html" class="btn btn-primary"> مشاهده و خرید </a>
                            <span class="badge badge-secondary badge-pill"> 50 <i class="fa fa-shopping-basket pr-1"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="course.html" class="card-link">آموزش VUE X</a>
                        <p class="text-justify card-text vazir font-14 mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است. چاپگرها و متون بلکه
                            روزنامه و مجله در ستون و سطرآنچنان که لازم است.
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

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card custom-card mb-3">
                    <div class="sub-layer">
                        <img src="{{asset('site/images/flutter-1.png')}}" alt="Flutter" class="img-fluid card-img-top">
                        <div class="over-layer">
                            <a href="course.html" class="btn btn-primary"> مشاهده و خرید </a>
                            <span class="badge badge-secondary badge-pill"> 50 <i class="fa fa-shopping-basket pr-1"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="course.html" class="card-link">آموزش Flutter</a>
                        <p class="text-justify card-text vazir font-14 mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است. چاپگرها و متون بلکه
                            روزنامه و مجله در ستون و سطرآنچنان که لازم است.
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
    </div>


@endsection
