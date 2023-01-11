@extends('site.master')
@section('content')



    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-3">
                <div class="card bg-info my-5 p-5">
                    <img src="{{asset('site/images/user.png')}}" class="img-fluid rounded-circle d-block mx-auto" width="120px" height="120px" alt="user-image" >
                    <h5 class="text-white text-center mt-3">کاربر : {{$users->name}}</h5>
                </div>
                <div class="text-right">
                    <div class="list-group p-0 mb-5 profile" >
{{--                        <a href="#vaziyat" class="active list-group-item list-group-item-action font-14" data-toggle="list"> <i class="fa fa-cog align-middle ml-2" ></i>مرور وضعیت </a>--}}
                        <a href="#dore-signup" class="list-group-item list-group-item-action" data-toggle="list"> <i class="fa fa-server  align-middle ml-2"></i>دوره هایی که ثبت نام کرده اید </a>
                        <a href="#shopping-cart" class="list-group-item list-group-item-action " data-toggle="list"><i class="fa fa-shopping-cart align-middle ml-2" ></i>سبد خرید </a>
{{--                        <a href="#ticket" class="list-group-item list-group-item-action " data-toggle="list"><i class="fa fa-tags align-middle ml-2" ></i>تیکت ها </a>--}}
                        <a href="#user-change" class="list-group-item list-group-item-action" data-toggle="list"><i class="fa fa-address-card align-middle ml-2"></i> تغییر مشخصات  </a>
                        <a href="{{route('site.index')}}" class="list-group-item list-group-item-action"> <i class=" fa fa-window-close align-middle ml-2"></i> خروج</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-9">

                <div class="tab-content">

                    <!----- Start vaziyat ----->

                    <div class="tab-pane fade show active" id="vaziyat">
                        <div class="card my-5 pb-4 text-right">
                            <div class="card-header text-center">
                                <h6 class="mt-2"> مرور وضعیت </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12 col-md-6">
                                        <div class="card mb-2">
                                            <div class="card-body d-flex justify-content-between align-items-center">
                                                <img src="{{asset('site/images/university-campus.png')}}" class="img-fluid d-inline-block p-2 rounded bg-warning" alt="courses">
                                                <div class="d-inline-block text-center">
                                                    <p class="mb-0"> 12 دوره  </p>
                                                    <small> در سایت وجود دارد </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="card mb-2">
                                            <div class="card-body d-flex justify-content-between align-items-center">
                                                <img src="{{asset('site/images/a.png')}}" class="img-fluid d-inline-block p-2 rounded bg-warning" alt="courses">
                                                <div class="d-inline-block text-center">
                                                    <p class="mb-0"> 3 دوره  </p>
                                                    <small> ثبت نام کرده اید </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="card mb-2">
                                            <div class="card-body d-flex justify-content-between align-items-center">
                                                <img src="{{asset('site/images/shopping-cart.png')}}" class="img-fluid d-inline-block p-2 rounded bg-warning" alt="courses">
                                                <div class="d-inline-block text-center">
                                                    <p class="mb-0"> 0 دوره  </p>
                                                    <small>  در انتظار پرداخت  </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="card mb-2">
                                            <div class="card-body d-flex justify-content-between align-items-center">
                                                <img src="{{asset('site/images/wallet-filled-money-tool.png')}}" class="img-fluid d-inline-block p-2 rounded bg-warning" alt="courses">
                                                <div class="d-inline-block text-center">
                                                    <p class="mb-0">  0 تومان   </p>
                                                    <small>  موجودی قابل تسویه شما  </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="card mt-3">
                                            <div class="card-body bg-light">
                                                <p class="mb-2"> <i class="fa fa-bell align-middle"></i>  جدیدترین اعلان ها  </p>
                                                <small> در تاریخ 1398/01/25 </small>
                                                <div class="alert alert-info mt-3">
                                                    <p class="font-13 text-center mt-3">کد تخفیف 30 % : Takhfif</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                </div>
                                </div>
            <!----- End vaziyat ----->


                    <!----- Start dore signup ----->
                    <div class="tab-pane fade show text-center" id="dore-signup">
                        <div class="card my-5 pb-4 text-center">
                            <div class="card-header">
                                <h6 class="mt-2 font-14"> دوره هایی که ثبت نام کرده اید  </h6>
                            </div>
                            <div class="card-body">

                                <div class="card mb-3 pb-4 shadow-sm">
                                    <div class="card-body d-md-flex">
                                        <img src="{{asset('site/images/html-2.png')}}" class="img-fluid float-lg-right mb-2" alt="html" width="250px" height="300px">
                                        <div class="d-inline-block pr-3 text-justify my-course">
                                            <a href="Category.html" class="mb-3 d-block text-center text-dark">آموزش HTML</a>
                                            <small>
                                                بخش اول متخصص طراحی سایت :
                                                زبان نشانه گذاری HTML به عنوان اولین پایه برای هر دوره آموزش طراحی سایت در نظر گرفته می‌شود.
                                                این زبان چیست و چه کاربردی دارد؟ HTML مخفف عبارت Hypertext Markup Language است.
                                            </small>
                                            <button class="btn btn-primary rounded-pill float-left mt-3 font-12" data-toggle="collapse" data-target="#download1">مشاهده لینک دانلود</button>

                                        </div>
                                    </div>
                                    <div class="mt-5 collapse" id="download1" >
                                        <table class="table table-borderless text-right font-13">
                                            <tr>
                                                <td>آموزش HTML جلسه 1 - 3</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                            <tr>
                                                <td>آموزش HTML جلسه 3 - 6</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                            <tr>
                                                <td>آموزش HTML جلسه 7 - 10</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                            <tr>
                                                <td>آموزش HTML جلسه 11 - 13</td>
                                                <td><button class="btn btn-success float-left font-12"><i class="fa fa-download align-middle ml-2"></i>دانلود</button></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!----- End dore signup ----->


                    <div class="tab-pane fade show text-center" id="shopping-cart"><!----- Start shopping cart----->

                        <div class="card my-5 pb-4 text-center">

                            <div class="card-header">
                                <h6>سبد خرید</h6>
                            </div>

                            <div class="card-body mt-5">

                                <div class="table-responsive">
                                    <table id="myTable" class="table">
                                        <thead>
                                        <tr>
                                            <th>عکس</th>
                                            <th>نام دوره</th>
                                            <th>تعداد</th>
                                            <th>قیمت دوره</th>
                                            <th class="text-right"><span id="" class="amount">قیمت کل</span> </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-img">
                                                    <div class="img-prdct"><img src="{{asset('site/images/bootstrap.jpg')}}"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>آموزش جامع Bootstrap 4</p>
                                            </td>
                                            <td>
                                                <div class="button-container">
                                                    <button class="cart-qty-plus" type="button" value="+">+</button>
                                                    <input type="text" name="qty" min="0" class="qty form-control" value="0"/>
                                                    <button class="cart-qty-minus" type="button" value="-">-</button>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" value="64000" class="price form-control" disabled>
                                            </td>
                                            <td> <span id=" " class="amount">0</span>تومان</td>

                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="product-img">
                                                    <div class="img-prdct"><img src="{{asset('site/images/php-security-2.png')}}"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>آموزش امنیت در PHP</p>
                                            </td>
                                            <td>
                                                <div class="button-container">
                                                    <button class="cart-qty-plus" type="button" value="+">+</button>
                                                    <input type="text" name="qty" min="0" class="qty form-control" value="0"/>
                                                    <button class="cart-qty-minus" type="button" value="-">-</button>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" value="64000" class="price form-control" disabled>
                                            </td>
                                            <td><span id="amount" class="amount">0</span>تومان</td>

                                        </tr>

                                        </tbody>
                                    </table>

                                    <span class="font-13">قیمت کل :</span><span id="total" class="total mx-2">0</span><span class="font-13">تومان</span>

                                    <button class="btn btn-success btn-block mt-3 font-14"> پرداخت</button>

                                </div>

                            </div>


                        </div>

                    </div>
                    <!----- End shopping cart ----->


{{--                    <!----- Start ticket ----->--}}
{{--                    <div class="tab-pane fade show " id="ticket">--}}
{{--                        <div class="card my-5">--}}
{{--                            <div class="card-header text-center">--}}
{{--                                <h6 class="mt-2 font-14"> تیکت های شما </h6>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-12">--}}

{{--                                        <form action="">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label for="title"  class="text-right">عنوان</label>--}}
{{--                                                <input id="title" class="form-control" type="text" name="" placeholder="عنوان مورد نظر خود را وارد کنید ...">--}}
{{--                                            </div>--}}

{{--                                            <div class="form-group">--}}
{{--                                                <label for="text">متن پیام</label>--}}
{{--                                                <textarea id="text" class="form-control" name="" rows="3" placeholder="پیام خود را وارد کنید ..."></textarea>--}}
{{--                                            </div>--}}

{{--                                            <button type="submit" class="btn btn-info btn-block font-13">ارسال تیکت</button>--}}
{{--                                        </form>--}}

{{--                                        <p class="font-14 my-5">لیست تیکت های شما :</p>--}}

{{--                                        <div class="alert alert-warning">--}}
{{--                                            <p class="font-13 vazir mt-3">تاکنون تیکتی برای شما ثبت نشده است !</p>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!----- End ticket ----->--}}


                    <div class="tab-pane fade show text-right" id="user-change"><!----- Start user change ----->
                        <div class="card my-5">
                            <div class="card-header">
                                <h6 class="mt-2 font-14 text-center"> مشخصات کاربری </h6>
                            </div>
                            <div class="card-body">
                                <div class="card text-right my-3">
                                    <div class="card-header bg-primary text-center pb-0 text-white">
                                        <p class="font-13"> مشخصات کاربری شما : </p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <p> نام : </p>
                                                <input type="text" class="form-control" value="علی">
                                            </div>

                                            <div class="form-group">
                                                <p> نام خانوادگی : </p>
                                                <input type="text" class="form-control" value="نوروزی">
                                            </div>

                                            <div class="form-group">
                                                <p> رمز عبور : </p>
                                                <input type="password" class="form-control" value="123456789">
                                            </div>

                                            <div class="custom-file my-4">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">انتخاب عکس</label>
                                            </div>

                                            <div class="form-group">
                                                <p> نام کاربری : </p>
                                                <input type="text" class="form-control" value="ali-nz" disabled style="cursor:no-drop">
                                            </div>

                                            <div class="form-group">
                                                <p> ایمیل : </p>
                                                <input type="email" class="form-control" value="info.alinz@yahoo.com" disabled style="cursor:no-drop">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-block my-4 font-13"> ثبت تغییرات </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!----- End user change ----->


                </div>

            </div>

        </div>
    </div>

@endsection
