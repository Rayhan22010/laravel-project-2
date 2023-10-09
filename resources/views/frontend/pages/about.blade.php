@extends('frontend.layout.master')

@section('page-css')
@endsection


@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('frontend/images/hero_5.jpg');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row section_about">
            <div class="col-lg-6 col-12">
                <img src="{{asset('upload/aboutImage/' . $value1->image)}}" alt="" style="width: 100%"; height="400rem";>
            </div>

            <div class="col-lg-6 col-12">
                <div class="text pt-5">
                    <h2 class="heading text-primary mb-3"><b>{{$value1->heading}}</b></h2>
                    <p class="mb-4">{{$value1->description}}</p>
                    <p><a href="{{route('single_blog.page')}}" class="btn btn-outline-primary py-2">{{$value1->btn_text}}</a></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="text" style="padding-top: 5rem">
                    <h2 class="heading text-primary mb-3"><b>{{$value2->heading}}</b></h2>
                    <p class="mb-4">{{$value2->description}}</p>
                    <p><a href="{{route('single_blog.page')}}" class="btn btn-outline-primary py-2">{{$value2->btn_text}}</a></p>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <img src="{{asset('upload/aboutImage/' . $value2->image)}}" alt="" style="width: 100%"; height="400rem";>
            </div>
        </div>
    </div>
    <div class="section sec-features">
        <div class="container">
            <div class="row g-5">
                @foreach ($postGrid as $data)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature d-flex">
                        <span class="{!! $data->icone !!}"></span>
                        <div>
                            <h3>{{$data->heading}}</h3>
                            <p>{{$data->description}} </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">

            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center" data-aos="fade-up">
                    <h2 class="heading text-primary">{{$aboutTeamHeading->heading}}</h2>
                    <p>{{$aboutTeamHeading->description}} </p>
                </div>
            </div>

            <div class="row">
                @foreach ($aboutTeam  as $data)
                <div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="0">
                    <img src="{{asset('upload/aboutImage/' . $data->image)}} " alt="Image"
                        class="img-fluid w-50 rounded-circle mb-3">
                    <h5 class="text-black">{{$data->heading}}</h5>
                    <p>{{$data->description}} </p>
                </div>
                @endforeach

            </div>

        </div>
    </div>



    <div class="section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <img src="{{asset('upload/aboutImage/' . $bottomLeft->image)}}" alt="Image"
                        class="img-fluid rounded
					">
                </div>
                <div class="col-lg-4 ps-lg-2">
                    <div class="mb-5">
                        <h2 class="text-black h4">{{$bottomLeft->heading}}</h2>
                        <p>{{$bottomLeft->description}}</p>
                    </div>
                    @foreach ($aboutBottomRight as $data)
                    <div class="d-flex mb-3 service-alt">
                        <div>
                            <span class="{!! $data->icone !!}" style="color: black; font-size:2rem; padding-right:1rem"></span>
                        </div>
                        <div>
                            <h3>{{$data->heading}}</h3>
                            <p>{{$data->description}}</p>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
@endsection


@section('page-jss')
@endsection
