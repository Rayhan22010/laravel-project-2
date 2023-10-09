@extends('frontend.layout.master')

@section('page-css')
@endsection


@section('content')
    <div class="section search-result-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">Category: Business</div>
                </div>
            </div>
            <div class="row posts-entry">
                <div class="col-lg-8">
                    @foreach ($businessPage as $data)
                        <div class="blog-entry d-flex blog-entry-search-item">
                            <a href="{{route('single_blog.page')}}" class="img-link me-4">
                                <img src="{{asset('upload/businessImage/' . $data->image)}}" alt="Image" class="img-fluid">
                            </a>
                            <div>
                                <span class="date">{{$data->date_time}} &bullet; <a href="#">Business</a></span>
                                <h2><a href="{{route('single_blog.page')}}">{{$data->heading}}</a></h2>
                                <p>{{$data->description}}</p>
                                <p><a href="{{route('single_blog.page')}}" class="btn btn-sm btn-outline-primary">{{$data->btn_text}}</a></p>
                            </div>
                        </div>
                    @endforeach

                    {{$businessPage->links('pagination::bootstrap-5')}}
                </div>

                <div class="col-lg-4 sidebar">

                    <div class="sidebar-box search-form-wrap mb-4">
                        <form action="#" class="sidebar-search-form">
                            <span class="bi-search"></span>
                            <input type="text" class="form-control" id="s"
                                placeholder="Type a keyword and hit enter">
                        </form>
                    </div>
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <h3 class="heading">Popular Posts</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                @foreach ($popularpost as $data)
                                <li>
                                    <a href="{{route('single_blog.page')}}">
                                        <img src="{{asset('upload/businessImage/' . $data->image)}}" alt="Image placeholder"
                                            class="me-4 rounded">
                                        <div class="text">
                                            <h4>{{$data->heading}}</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">{{$data->date_time}} </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            <li><a href="#">Food <span>(12)</span></a></li>
                            <li><a href="{{route('travel.page')}}">Travel <span>(22)</span></a></li>
                            <li><a href="#">Lifestyle <span>(37)</span></a></li>
                            <li><a href="{{route('business.page')}}">Business <span>(42)</span></a></li>
                            <li><a href="#">Adventure <span>(14)</span></a></li>
                        </ul>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Tags</h3>
                        <ul class="tags">
                            <li><a href="{{route('travel.page')}}">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="{{route('business.page')}}">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                            <li><a href="{{route('business.page')}}">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="{{route('business.page')}}">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


@section('page-jss')
@endsection
