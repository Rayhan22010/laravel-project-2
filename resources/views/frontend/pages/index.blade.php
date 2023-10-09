@extends('frontend.layout.master')

@section('page-css')
@endsection

@section('content')
    <!-- Start retroy layout blog posts -->
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-stretch retro-layout">
                @foreach ($value as $data)
                <div class="col-md-6">
                    <a href="{{route('single_blog.page')}}" class="h-entry mb-30 v-height gradient">

                        <div class="featured-img">
                            <img src="{{ asset('upload/homeImage/' . $data->image) }}" class="featured_backgroud"
                                alt="">
                        </div>

                        <div class="text">
                            <span class="date">{{$data->date_time}}</span>
                            <h2>{{$data->heading}}</h2>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End retroy layout blog posts -->

    <!-- Start posts-entry -->
    <section class="section posts-entry">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Business</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="{{route('business.page')}}" class="read-more">View All</a></div>
            </div>
            <div class="row g-3">
                <div class="col-md-9">
                    <div class="row g-3">
                        @foreach ($bValue as $data)
                        <div class="col-md-6">
                            <div class="blog-entry">
                                <a href="{{route('single_blog.page')}}" class="img-link">
                                    <img src="{{ asset('upload/homeImage/' . $data->image) }}" alt="Image" class="img-fluid">
                                </a>
                                <span class="date">{{$data->date_time}}</span>
                                <h2><a href="{{route('single_blog.page')}}">{{$data->heading}}</a></h2>
                                <p>{{$data->description}}</p>
                                <p><a href="{{route('single_blog.page')}}" class="btn btn-sm btn-outline-primary">{{$data->btn_text}}</a></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled blog-entry-sm">
                        @foreach ($rValue as $data)
                        <li>
                            <span class="date">{{$data->date_time}}</span>
                            <h3><a href="{{route('single_blog.page')}}">{{$data->heading}}</a></h3>
                            <p>{{$data->description}}</p>
                            <p><a href="{{route('single_blog.page')}}" class="read-more">{{$data->btn_text}}</a></p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End posts-entry -->

    <!-- Start posts-entry -->
    <section class="section posts-entry posts-entry-sm bg-light">
        <div class="container">
            <div class="row">
                @foreach ($gValue as $data)
                    <div class="col-md-6 col-lg-3">
                        <div class="blog-entry">
                            <a href="{{route('single_blog.page')}}" class="img-link">
                                <img src="{{asset('upload/homeImage/' . $data->image)}}" alt="Image"
                                    class="img-fluid">
                            </a>
                            <span class="date">{{$data->date_time}}</span>
                            <h2><a href="{{route('single_blog.page')}}">{{$data->heading}}</a></h2>
                            <p>{{$data->description}}</p>
                            <p><a href="{{route('single_blog.page')}}" class="read-more">{{$data->btn_text}}</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End posts-entry -->

    <!-- Start posts-entry -->
    <section class="section posts-entry">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Culture</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="{{route('culture.page')}}" class="read-more">View All</a></div>
            </div>
            <div class="row g-3">
                <div class="col-md-9 order-md-2">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="blog-entry">
                                <a href="{{route('single_blog.page')}}" class="img-link">
                                    <img src="{{ asset('upload/homeImage/' . $rcValue1->image) }}" alt="Image"
                                        class="img-fluid">
                                </a>
                                <span class="date">{{$rcValue1->date_time}}</span>
                                <h2><a href="{{route('single_blog.page')}}">{{$rcValue1->heading}}</a></h2>
                                <p>{{$rcValue1->description}}.</p>
                                <p><a href="{{route('single_blog.page')}}" class="btn btn-sm btn-outline-primary">{{$rcValue1->btn_text}}</a></p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="blog-entry">
                                <a href="{{route('single_blog.page')}}" class="img-link">
                                    <img src="{{ asset('upload/homeImage/' . $rcValue2->image) }}" alt="Image"
                                        class="img-fluid">
                                </a>
                                <span class="date">{{$rcValue2->date_time}}</span>
                                <h2><a href="{{route('single_blog.page')}}">{{$rcValue2->heading}}</a></h2>
                                <p>{{$rcValue2->description}}.</p>
                                <p><a href="{{route('single_blog.page')}}" class="btn btn-sm btn-outline-primary">{{$rcValue2->btn_text}}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled blog-entry-sm">
                        @foreach ($cValue as $data)
                        <li>
                            <span class="date">{{$data->date_time}}</span>
                            <h3><a href="{{route('single_blog.page')}}">{{$data->heading}}</a></h3>
                            <p>{{$data->description}}</p>
                            <p><a href="{{route('single_blog.page')}}" class="read-more">{{$data->btn_text}}</a></p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Politics</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="{{route('politics.page')}}" class="read-more">View All</a></div>
            </div>

            <div class="row">
                @foreach ($pValue as $data)
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="{{route('single_blog.page')}}" class="img-link"><img
                                src="{{ asset('upload/homeImage/' . $data->p_image) }}" alt="Image"
                                class="img-fluid"></a>
                        <div class="excerpt">
                            <h2><a href="{{route('single_blog.page')}}">{{$data->heading}}</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 me-3 float-start"><img
                                        src="{{ asset('upload/reporterImage/' . $data->r_image) }}" alt="Image"
                                        class="img-fluid"></figure>
                                <span class="d-inline-block mt-1">By <a href="#">{{$data->r_name}}</a></span>
                                <span>&nbsp;-&nbsp; {{$data->date_time}}</span>
                            </div>

                            <p>{{$data->description}}</p>
                            <p><a href="{{route('single_blog.page')}}" class="read-more">{{$data->btn_text}}</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    <div class="section bg-light">
        <div class="container">

            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Travel</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="{{route('travel.page')}}" class="read-more">View All</a></div>
            </div>

            <div class="row align-items-stretch retro-layout-alt">

                <div class="col-md-5 order-md-2">
                    <a href="{{route('single_blog.page')}}" class="hentry img-1 h-100 gradient">
                        <div class="featured-img">
                            <img src="{{ asset('upload/homeImage/' . $value2->image) }}" class="featured_backgroud"
                                alt="">
                        </div>
                        <div class="text">
                            <span>{{$value2->date_time}}</span>
                            <h2>{{$value2->heading}}</h2>
                        </div>
                    </a>
                </div>

                <div class="col-md-7">

                    <a href="{{route('single_blog.page')}}" class="hentry img-2 v-height mb30 gradient">
                        <div class="featured-img">
                            <img src="{{ asset('upload/homeImage/' . $value1->image) }}" class="featured_backgroud"
                                alt="">
                        </div>
                        <div class="text text-sm">
                            <span>{{$value1->date_time}}</span>
                            <h2>{{$value1->heading}}</h2>
                        </div>
                    </a>

                    <div class="two-col d-block d-md-flex justify-content-between">
                        <a href="{{route('single_blog.page')}}" class="hentry v-height img-2 gradient">
                            <div class="featured-img">
                                <img src="{{ asset('upload/homeImage/' . $value3->image) }}" class="featured_backgroud"
                                    alt="">
                            </div>
                            <div class="text text-sm">
                                <span>{{$value3->date_time}}</span>
                                <h2>D{{$value3->heading}}</h2>
                            </div>
                        </a>
                        <a href="{{route('single_blog.page')}}" class="hentry v-height img-2 ms-auto float-end gradient">
                            <div class="featured-img">
                                <img src="{{ asset('upload/homeImage/' . $value4->image) }}" class="featured_backgroud"
                                    alt="">
                            </div>
                            <div class="text text-sm">
                                <span>{{$value4->date_time}}</span>
                                <h2>{{$value4->heading}}</h2>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

@section('page-js')
@endsection
