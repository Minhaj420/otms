@extends('website.master')


@section('title')
    Best Online Training System In Bangladesh
@endsection


@section('body')
    <div class="carousel slide" id="slider" data-bs-ride="carousel" data-bs-interval="1000">
        <div class="carousel-inner">
            @foreach($offer_courses as $key => $offer_course)
                <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                    <img src="{{asset($offer_course->offer_image)}}" alt="" class="w-100" height="550"/>
                    <div class="carousel-caption my-caption">
                        <h3>{{$offer_course->title}}</h3>
                        <p>Offer Date: {{$offer_course->offer_date}}</p>
                        <a href="" class="btn btn-dark px-5">Read more...</a>
                    </div>
                </div>
            @endforeach

        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body text-center border-0">
                        <h3 class="">Recent Published Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($recent_courses as $recent_course)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img src="{{asset($recent_course->image)}}" alt="" class="h-100"/>
                            <div class="card-body">
                                <h4><a href="{{route('training.detail', ['id' => $recent_course->id])}}" class="text-decoration-none text-dark">{{$recent_course->title}}</a> </h4>
                                <p class="mb-0">{{$recent_course->fee}}</p>
                                <p class="py-0">{{$recent_course->starting_date}}</p>
                                <hr/>
                                <a href="{{route('training.detail', ['id' => $recent_course->id])}}" class="btn btn-success">Read More...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body text-center border-0">
                        <h3 class="">Popular Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($popular_courses as $popular_course)
                    <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <img src="{{asset($popular_course->image)}}" alt="" class="h-100"/>
                        <div class="card-body">
                            <h4>{{$popular_course->title}}</h4>
                            <p class="mb-0">{{$popular_course->fee}}</p>
                            <p class="py-0">{{$popular_course->starting_date}}</p>
                            <hr/>
                            <a href="{{route('training.detail', ['id' => $popular_course->id])}}" class="btn btn-outline-info">Read More..</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
