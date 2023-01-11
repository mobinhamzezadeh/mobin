@extends('site.master')
@section('content')


    <div class="container px-1">
        <ul class="breadcrumb bg-white mt-4 ">
            <li class="breadcrumb-item"><a href="{{route('site.index')}}" class="font-12 vazir">صفحه اصلی</a></li>
            <li class="breadcrumb-item"><a href="{{route('site.teach')}}" class="pr-2 font-12 vazir">تدریس در ایزی لرن</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="row px-1">
            <div class="col-md-6 bg-white my-3">
                <h6 class="mt-3 font-14">ثبت موضوع آموزشی</h6>
                <p class="vazir font-13 mt-3">لطفا ابتدا بخش‌های قوانین تولید و استانداردهای ایزی لرن
                    را به دقت مطالعه کنید.
                </p>
                <hr>
                <form action="" method="">

                    <div class="form-group">
                        <label for="name">نام کامل :</label>
                        <input id="name" class="form-control" type="text" name="" placeholder="نام و نام خانوادگی خود را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="number">تلفن تماس :</label>
                        <input id="number" class="form-control" type="text" name="" placeholder="شماره خود را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="email">ایمیل :</label>
                        <input id="email" class="form-control" type="email" name="email" placeholder="ایمیل خود را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="course-title">عنوان :</label>
                        <input id="course-title" class="form-control" type="text" name="" placeholder="عنوان آموزش خود را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="category">دسته بندی :</label>
                        <select class="form-control font-12" id="category">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach

                        </select>
                    </div>

                    <p class="vazir font-12 text-info"></p>

                    <div class="form-group">
                        <label for="comment">توضیحات</label>
                        <textarea class="form-control" rows="5" id="comment" placeholder="توضیحاتی مختصر درباره مطالبی که در این آموزش ارائه خواهید کرد"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block rounded-pill custom-btn font-13 my-4">ثبت  موضوع آموزشی</button>

                </form>
            </div>


            <div class="col-md-6 bg-white my-3">
                <h6 class="mt-3 mb-5 font-14 mr-1 text-primary">استانداردهای ایزی لرن برای تولید ویدئوهای آموزشی</h6>
                <div id="accordion">

                    @foreach($teacherrules as $teacherrule)
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link font-14 text-muted" data-toggle="collapse" href="#collapse-{{$teacherrule->id}}">
                                <i class="fa fa-plus align-middle ml-2"></i>{{$teacherrule->title}}
                            </a>
                        </div>
                        <div id="collapse-{{ $teacherrule->id }}" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p class="vazir font-13 text-justify">{{$teacherrule->body}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

{{--                        @foreach($teacherrules as $index => $teacherrule)--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-header">--}}
{{--                                    <a class="card-link font-14 text-muted" data-toggle="collapse" href="#collapse-{{$index}}">--}}
{{--                                        <i class="fa fa-plus align-middle ml-2"></i>{{$teacherrule->title}}--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div id="collapse-{{ $index }}" class="collapse show" data-parent="#accordion">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <p class="vazir font-13 text-justify">{{$teacherrule->body}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}


                </div>
            </div>

        </div>
    </div>

@endsection
