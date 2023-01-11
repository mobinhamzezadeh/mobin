@extends('site.master')
@section('content')

    <div class="page-title d-flex flex-column justify-content-center align-items-center mb-4">
        <h4 class="text-white mb-5">بلاگ آموزشی ایزی لرن</h4>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="" method="">
                        <div class="input-group">
                            <input type="titleSarch" name="titleSarch" class="form-control" placeholder="عنوان مورد نظر خود را جستجو کنید ...">
                            <div class="input-group-append">
                                <button type="submit" name="btnSearch" class="btn btn-info font-13">جستجو</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-5">
            <div class="col-md-5 filter">
                <form action="" method="">
                    <div class="form-group">
                        <select class="form-control">
                            <option>همه دسته بندی ها</option>
                            <option>برنامه نویسی</option>
                            <option>گرافیک</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info font-13">فیلتر</button>
                </form>
            </div>
        </div>
    </div>

    <!----- Start article boxes ----->
    <div class="container">
        <div class="row mt-3 mb-5">

            @foreach($blogs as $blog)
            <div class="col-md-6 col-lg-4">
                <div class="card custom-card mb-3 shadow-sm">

                    <img src="{{asset('/uploads/'.$blog->image)}}" alt="article" class="img-fluid card-img-top">

                    <div class="card-body">

                        <div class="text-center mb-2 mt-2">
                            <a href="{{route('site.blog_details',['blog'=>$blog->id])}}" class="card-link font-14">{{$blog->title}}</a>
                        </div>

                        <p class="card-text font-13 vazir text-justify">{{Str::of($blog->body)->words(10, '...')}}</p>

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

    <ul class="pagination  justify-content-center mb-5">
        <li class="page-item"><a href="#" class="page-link">&lsaquo;</a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item active"><a href="#" class="page-link">2</a></li>
        <li class="page-item"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">&rsaquo;</a></li>
    </ul>



@endsection
