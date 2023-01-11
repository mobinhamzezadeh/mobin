
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="{{asset('site/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/customcss/style.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/fontawesome/css/all.css')}}">
</head>
<body>
<!----- Start login box ----->
<div class="container">
    <div class="row d-flex justify-content-center">

        <div class="col-lg-7 col-xl-6 col-md-9 register">

            <div class="card my-5">

                <div class="card-body">
                    <h5 class="shadow-sm text-center mb-4 py-3">ورود به سایت</h5>

                    <form action="{{route('login')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label>نام کاربری : </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text  my-icon"> <i class="fa fa-user-plus align-middle"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control" placeholder="نام کاربری خود را وارد کنید ">
                            </div>
                        </div>

                        <div class="form-group">
                            <label> رمز عبور : </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text  my-icon"> <i class="fa fa-lock align-middle"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="رمز عبور خود را وارد کنید">
                            </div>
                        </div>

                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input vazir ml-2" value="" >یادآوری رمز عبور
                            </label>
                        </div>

                        <button type="submit" name="login" class="btn btn-primary btn-block rounded-pill custom-btn font-13 my-3">ورود </button>

                        <p class="text-center my-3  font-12 vazir">رمز عبور خود را فراموش کرده اید؟ <a href="forget-password.html" class="login">بازیابی رمز عبور</a></p>

                        <p class="text-center my-3  font-12 vazir">هنوز در سایت ثبت نام نکرده اید ؟ <a href="{{route('register')}}" class="login">ثبت نام</a></p>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
<!----- End login box ----->

<script src="{{asset('site/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('site/js/popper.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/myscript.js')}}"></script>
</body>
</html>
