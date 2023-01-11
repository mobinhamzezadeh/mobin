

<!----- footer ----->
<footer class="bg-white"><!----- Start footer ----->
    <div class="container py-2">
        <div class="row">

            <div class="col-md-4">
{{--                <img src="{{asset('site/images/logo4.jpg')}}" alt="" class="img-fluid">--}}
                <p class="text-justify font-14 vazir mb-4 mt-5">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                    استفاده از طراحان گرافیک است.
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطر آنچنان که لازم است.
                </p>
                <p class="font-14"><i class="fas fa-map-marker-alt text-muted ml-2"></i> ایران , آذربایجان غربی , ارومیه , دانشکده , ساختمان مهر , شرکت امید پروران </p>
                <p class="font-14"><i class="fas fa-envelope text-muted ml-2"></i> info@learning.com</p>
                <p class="font-14"><i class="fa fa-phone text-muted ml-2"></i>044-25635895</p>
            </div>

            <div class="col-md-2 text-center footer-links"  >
                <span class="mt-5 mb-3 d-block font-14">دسترسی سریع</span>
                <ul class="list-unstyled">
                    <li class="my-3"><a href="#">درباره ما</a></li>
                    <li class="my-3"><a href="#">تماس با ما</a></li>
                    <li class="my-3"><a href="#">سوالات متداول</a></li>
                    <li class="my-3"><a href="#">تاریخچه سفارشات</a></li>
                </ul>
            </div>

            <div class="col-md-2 text-center footer-links">
                <span class="mt-5 mb-3 d-block font-14">لینک های مفید</span>
                <ul class="list-unstyled">
                    <li class="my-3"><a href="#">حساب کاربری</a></li>
                    <li class="my-3"><a href="#">بازپرداخت</a></li>
                    <li class="my-3"><a href="#">تخفیف</a></li>
                    <li class="my-3"><a href="#">رهگیری سفارش</a></li>
                </ul>
            </div>

            <div class="col-md-4 search-box text-center">
                <h6  class="my-5">برای اطلاع از  تازه ترین ها به خبرنامه ما بپیوندید!</h6>
                <form action="" method="">
                    <div class="input-group">
                        <input type="search" name="" class="form-control rounded-pill" placeholder="ایمیل خود را وارد کنید ...">
                        <div class="input-group-append">
                            <button type="submit" name="" class="btn btn-info rounded-pill font-13">اشتراک</button>
                        </div>
                    </div>
                </form>
                <div class="mt-5 social-media">
                    <a href="#"><i class="fab fa-instagram p-1" id="instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter bg-info p-1"></i></a>
                    <a href="#"><i class="fab fa-youtube bg-danger p-1"></i></a>
                    <a href="#"><i class="fab fa-telegram bg-primary p-1"></i></a>
                </div>
            </div>

        </div>


        <div class="row justify-content-end">
            <a  class="topbutton"> <i class="fa fa-chevron-circle-up"> </i> </a>
        </div>


        <div class="row">
            <div class="col-12 text-center">
                <hr>
                <p class="text-muted font-14">© 1402 کلیه حقوق این سایت متعلق به امید پروران است</p>
            </div>
        </div>

    </div>
    <a target="_blank" onclick="ht_ctc_click(this);" href="#" class="btn-whatsapp  hvr-hang"
             data-return_type="chat"
             data-number="9903422912"
             data-pre_filled="whatsapp"
    ><img src="{{asset('site/images/w3.png')}}" width="70" alt="" >
    </a>

</footer>

<!----- End footer ----->


<script src="{{asset('site/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('site/js/popper.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('site/js/myscript.js')}}"></script>
<script src="{{asset('site/js/whatsapp.js')}}"></script>
<script src="{{asset('site/js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>

@include('sweetalert::alert')

</body>
</html>
