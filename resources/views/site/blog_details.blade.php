@extends('site.master')
@section('content')

    <!----- Start article content ----->
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <img src="{{asset('/uploads/'.$blog->image)}}" alt="article" class="img-fluid px-3">
            </div>
        </div>
        <div class="row ">
            <div class="col-12 my-article">
                <h1 class="pr-3 my-4">{{$blog->title}}</h1>
                <div class="mb-5">
                    <span class="text-muted pr-3 font-12"><i class="fa fa-pen ml-2"></i>{{$blog->writer}}</span>
                    <span class="text-muted pr-3 font-12"><i class="fa fa-calendar ml-2"></i>{{verta($blog->created_at)->format('Y.m.d')}}</span>
                </div>
                <p class="vazir">{{$blog->body}}</p>

            </div>
        </div>
    </div><br><br><br>
    <!----- End article content ----->

    <!----- Start article comments ----->
    <div class="container article-comments mt-5">
        <p class="text-info mt-5">نظرات و پیشنهادات</p>


        <form method="post" action="{{route('blog_comments',['blog'=>$blog->id])}}">
         @csrf
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

            <div class="form-group">
                <textarea name="body" id="body"  cols="30" rows="7" class="form-control w-100 rounded-lg p-3" placeholder="دیدگاه خود را وارد کنید ..."></textarea>
            </div>

            <button type="submit" class="btn btn-outline-primary mr-auto d-block font-13">ارسال نظر</button>
            <br>

        </form>


        @foreach($comments as $comment)
        <div class="bg-light my-3 p-2 pb-4">
              <div class="d-flex align-items-center">
                  <p class="text-danger mb-0 vazir font-13">{{$comment->user->name}}</p>
                  <small class="mx-5 text-muted">{{verta($comment->created_at)->format('Y.m.d')}}</small>
              </div>
              <p class="text-justify my-2 vazir font-13">{{$comment->body}}</p>
        </div>
        @endforeach
    </div>
    <!----- End article comments ----->

@endsection
