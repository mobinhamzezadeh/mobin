<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالب آموزش آنلاین ایزی لرن</title>
    <link rel="stylesheet" href="{{asset('site/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/customcss/style.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/customcss/hover.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/customcss/animate.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/fontawesome/css/all.css')}}">
</head>
<body>

    <!----- Start header ----->
    <header class="bg-white">
        <div class="container">
            <div class="row pb-3">

                <div class="d-none d-lg-block col-lg-2">
                    <img src="{{asset('site/images/logo.jpg')}}" alt="EasyLearn" title="EasyLearn" class="img-fluid">
                </div>

                <div class="d-none d-lg-flex col-lg-6 align-items-center search-box">
                    <form action="" method="">
                        <div class="input-group">
                            <input type="search" name="" class="form-control rounded-pill" placeholder="عنوان مورد نظر خود را جستجو کنید ...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-info rounded-pill font-13">جستجو</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-end">
                    <a href="#" class="cart mt-2 ml-2 dropdown" data-toggle="dropdown"><span class="badge badge-info badge-pill">2</span><i class="fa fa-shopping-basket"></i>
                        <div class="dropdown-menu dropdown-cart mt-3">
                            <ul class="list-unstyled">
                                <li><img src="{{asset('site/images/bootstrap.jpg')}}" class="m-1 ml-3">
                                    <div class="float-right">
                                        <small class=" mt-3 mr-2 d-block">آموزش جامع Bootstrap 4 (64.000 تومان)</small>
                                    </div>
                                </li>
                                <li><img src="{{asset('site/images/php-security-2.png')}}" class="m-1 ml-3">
                                    <div class="float-right">
                                        <small class=" mt-3 mr-2 d-block">آموزش امنیت در PHP (64.000 تومان)</small>
                                    </div>
                                </li>
                                <li><button class="btn btn-info m-1 ml-3 font-12">پرداخت</button>
                                    <div class="float-right">
                                        <small class=" mt-3 mr-2 d-block">قیمت کل : 128.000 تومان</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </a>
                    <a href="{{route('register')}}" class="btn btn-outline-info font-13 vazir-med-fa hvr-shrink"><i class="fa fa-user-plus pl-1"></i>ثبت نام</a>
                    <a href="{{route('login')}}" class="btn btn-info font-13 vazir-med-fa mx-2 hvr-shrink">ورود</a>
                    <a href="{{route('site.teach')}}" class="btn btn-primary font-13 vazir-med-fa hvr-shrink">مدرس شوید</a>
                </div>


            </div>

            <!----- Start mobile header ----->
            <div class="row">


                <div class="col-12 d-flex d-lg-none justify-content-center">
                    <img src="{{asset('site/images/logo.jpg')}}" alt="Easylearn" alt="Easylearn">
                </div>

                <div class="col-12 d-flex d-lg-none justify-content-center mb-4 mobile-header">
                    <a href="sign-up.html" class="border-left ml-3"><i class="fa fa-user-plus ml-3"></i></a>
                    <a href="login.html" class="border-left ml-3"><i class="fa fa-lock ml-3"></i></a>
                    <a href="teach.html" class="border-left ml-3"><i class="fa fa-graduation-cap ml-3"></i></a>
                    <a href="#" class="border-left ml-3 dropdown" data-toggle="dropdown"><span class="badge badge-info badge-pill">2</span><i class="fa fa-shopping-basket ml-3"></i>
                        <div class="dropdown-menu  dropdown-cart mt-3 mx-5">
                            <ul class="list-unstyled">
                                <li>
                                    <img src="{{asset('site/images/bootstrap.jpg')}}" class="m-1 ml-3">
                                    <div class="float-right">
                                        <small class=" mt-3 mr-2 d-block">آموزش جامع Bootstrap 4 (64.000 تومان)</small>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{asset('site/images/php-security-2.png')}}" class="m-1 ml-3">
                                    <div class="float-right">
                                        <small class=" mt-3 mr-2 d-block">آموزش امنیت در PHP (64.000 تومان)</small>
                                    </div>
                                </li>
                                <li>
                                    <button class="btn btn-info m-1 ml-3 font-12">پرداخت</button>
                                    <div class="float-right">
                                        <small class=" mt-3 mr-2 d-block">قیمت کل : 128.000 تومان</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </a>
                    <a href="#search" data-toggle="collapse"><i class="fa fa-search"></i></a>
                </div>

                <div id="search" class=" d-lg-none col-10 mx-auto collapse mb-4 justify-content-center">
                    <form action="" method="">
                        <div class="input-group">
                            <input type="search" name="" class="form-control rounded-pill" placeholder="عنوان مورد نظر خود را جستجو کنید ...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-info rounded-pill font-13">جستجو</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!----- End mobile header ----->
        </div>
    </header>
    <!----- End header ----->

    <!----- Start menu ----->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm sticky-top">

        <div class="container">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mainmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav pr-0 custom-navbar font-14 text-center">

                    @foreach($menus as $menu)
                        <li class="nav-item ml-3 custom-nav-item"><a href="{{($menu->link)}}" class="nav-link hvr-float">{{$menu->title}}</a></li>
                    @endforeach

                    @if(auth()->check())
                    <li class="nav-item ml-3 custom-nav-item"><a href="{{route('site.logout')}}" class="nav-link hvr-float">خروج از حساب کاربری</a></li>
                    @else
                    @endif
                </ul>
            </div>
        </div>

    </nav>

{{--    <li class="nav-item ml-3 custom-nav-item"><a href="{{route('site.index')}}" class="nav-link hvr-float">صفحه اصلی</a></li>--}}
{{--    <li class="nav-item ml-3 dropdown custom-nav-item">--}}
{{--        <a href="#" class="nav-link  dropdown-toggle" data-toggle="dropdown">دوره های آموزشی</a>--}}
{{--        <div class="dropdown-menu custom-dropdown-menu dropdown-menu-right font-13 text-right">--}}
{{--            <?php use App\Models\Category;$catogories=Category::all(); ?>--}}
{{--            @foreach($catogories as $catogory)--}}
{{--                <a href="{{$catogory->id}}" class="dropdown-item border-bottom py-2">{{$catogory->title}}</a>--}}
{{--            @endforeach--}}


{{--        </div>--}}

{{--    </li>--}}
{{--    <li class="nav-item ml-3 dropdown custom-nav-item"><a href="#" class="nav-link  dropdown-toggle " data-toggle="dropdown">صفحات</a>--}}

{{--        <div class="dropdown-menu  custom-dropdown-menu dropdown-menu-right font-13 text-right">--}}
{{--            <a href="{{route('site.panel-user')}}" class="dropdown-item border-bottom py-2">پنل کاربری</a>--}}
{{--        </div>--}}

{{--    </li>--}}
{{--    <li class="nav-item ml-3 custom-nav-item"><a href="{{route('site.blog')}}" class="nav-link hvr-float">بلاگ</a></li>--}}
{{--    <li class="nav-item ml-3 custom-nav-item"><a href="{{route('site.contact')}}" class="nav-link hvr-float">تماس باما</a></li>--}}

{{--    <li class="nav-item ml-3 dropdown custom-nav-item">--}}
{{--        <a href="#" class="nav-link  dropdown-toggle" data-toggle="dropdown">دوره های آموزشی</a>--}}
{{--        <div class="dropdown-menu custom-dropdown-menu dropdown-menu-right font-13 text-right">--}}
{{--            <?php use App\Models\Category;$catogories=Category::all(); ?>--}}
{{--            @foreach($catogories as $catogory)--}}
{{--                <a href="{{$catogory->id}}" class="dropdown-item border-bottom py-2">{{$catogory->title}}</a>--}}
{{--            @endforeach--}}


{{--        </div>--}}

{{--    </li>--}}

    <!----- End menu ----->

