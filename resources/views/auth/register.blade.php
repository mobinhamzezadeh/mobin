<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام </title>
    <link rel="stylesheet" href="{{asset('site/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/customcss/style.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/fontawesome/css/all.css')}}">
</head>
<body>

<!----- Start sign up box ----->
<div class="container">
    <div class="row d-flex justify-content-center">

        <div class="col-lg-7 col-xl-6 col-md-9 register">

            <div class="card my-5">

                @foreach($errors->all() as $error)
                    <ul style="list-style:none" >
                        <li class="text-danger mx-3">{{$error}}</li>
                    </ul>
                @endforeach()

                <div class="card-body">
                    <h5 class="shadow-sm text-center mb-4 py-3"> عضویت در سایت </h5>

                    <form action="{{route('register')}}" method="post">
                    @csrf

                        <div class="form-group">
                            <label >نام:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text  my-icon"> <i class="fa fa-user-plus align-middle"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="نام خود را وارد کنید ">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>نام کاربری : </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text  my-icon"> <i class="fa fa-lock align-middle"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control input_user" value="" placeholder="ایمیل" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>رمز عبور : </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text  my-icon"> <i class="fa fa-lock align-middle"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="رمز عبور خود را وارد کنید">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>تکرار رمز عبور : </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text  my-icon"> <i class="fa fa-lock align-middle"></i></span>
                                </div>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="تکرار رمز عبور خود را وارد کنید">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block rounded-pill custom-btn font-13 mt-4">ثبت نام</button>

                        <p class="text-center my-3 font-12 vazir">قبلا در سایت ثبت نام کرده اید ؟ <a href="{{route('login')}}" class="login vazir">وارد شوید</a></p>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
<!----- End sign up box ----->

<script src="{{asset('site/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('site/js/popper.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/myscript.js')}}"></script>
</body>
</html>
