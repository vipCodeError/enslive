@extends('website.layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row" style="display:flex; flex-direction:row">
                <div class="col-2 col-sm-2 col-md-1 col-lg-1" style="margin-top:15px;">
                    <h6 style="color: #1a7b21;font-weight: 800;padding: 2px;border-radius: 5px;font-size: 13px;">
                        Breaking News</h6>
                </div>
                <div class="col-10 col-sm-10 col-md-11 col-lg-11">
                    <marquee width="100%" direction="left" height="35px" id="marquee_lay">
                        <div class="row">
                            @foreach($news_content as $news_c)
                            @if($loop->index < 8 & $news_c->news_title != "")
                            <h4 style="margin-right: 16px">
                                <i class="fa fa-circle" style="color: red; padding-right: 8px; font-size: 12px;">
                                </i><a href="{{route('show_web', $news_c->id)}}" style="font-size: 17px">{{$news_c->news_title}}</a>
                            </h4>
                            @endif
                            @endforeach
                        </div>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Latest News -->
<div class="container">
    <div class="row" style="margin-top: 1rem;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="50x3b-container">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        @foreach($news_content as $news_c)
                        @if($loop->index < 23)
                        @if($loop->index == 0)
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                 src="https://d4f9k68hk754p.cloudfront.net/fit-in/712x712/{{$news_c->photos_vid}}"
                                 alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="{{route('show_web', $news_c->id)}}"><h3>{{$news_c->news_title}}</h3></a>
                            </div>
                        </div>
                        @else
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                 src="https://d4f9k68hk754p.cloudfront.net/fit-in/712x712/{{$news_c->photos_vid}}"
                                 alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="{{route('show_web', $news_c->id)}}"><h3>{{$news_c->news_title}}</h3></a>
                            </div>
                        </div>
                        @endif
                        @endif
                        @endforeach
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
            </div>

            <div class="row"
                 style="margin-top: 10px; margin-left: 1px; margin-right: 1px; background: #fff; padding-top:10px">

{{--                <div class="col-12 col-sm-12 col-md-6 col-lg-6">--}}
{{--                    @foreach($news_content as $nContent)--}}
{{--                    @if($loop->index < 15)--}}
{{--                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 story-card">--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">--}}
{{--                                <a href="" class="story-card-img focuspoint " data-focus-x="0" data-focus-y="0">--}}
{{--                                    <img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$nContent->photos_vid}}"--}}
{{--                                         width="120%" height="100%">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">--}}
{{--                                <div class="story-card-news">--}}
{{--                                    <span class="story-card-heading">--}}
{{--                                        <a class="kicker-text-mobi">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="section-name">--}}
{{--                                            {{$nContent->edition}}--}}
{{--                                        </a>--}}
{{--                                    </span>--}}
{{--                                    <h2>--}}
{{--                                        <div data-paywall="false" style="margin-top:8px;">--}}
{{--                                            <a href="{{route('show_web', $nContent->id)}}" title=""--}}
{{--                                               data-vr-excerpttitle="">--}}
{{--                                                {{$nContent->news_title}}--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </h2>--}}
{{--                                    <div class="news-comments-area">--}}

{{--                                        <ul>--}}
{{--                                            <li>--}}
{{--                                                <i class="fa fa-clock-o"></i> <span>  {{date('F d, Y', strtotime($nContent->created_at))}}</span>--}}
{{--                                            </li>--}}
{{--                                            <li data-ccount="33175746"></li>--}}
{{--                                        </ul>--}}

{{--                                        <ul>--}}
{{--                                            <li>--}}
{{--                                                <i class="fa fa-eye"></i> <span>{{$nContent->view_count}}</span>--}}
{{--                                            </li>--}}
{{--                                            <li data-ccount="33175746"></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}


{{--                    @endif--}}
{{--                    @endforeach--}}
{{--                </div>--}}


{{--                <div class="col-12 col-sm-12 col-md-6 col-lg-6">--}}
{{--                    @foreach($news_content as $nContent)--}}
{{--                    @if($loop->index > 15)--}}
{{--                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 story-card">--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">--}}
{{--                                <a href="" class="story-card-img focuspoint " data-focus-x="0" data-focus-y="0">--}}
{{--                                    <img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$nContent->photos_vid}}"--}}
{{--                                         width="120%" height="100%">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">--}}
{{--                                <div class="story-card-news">--}}
{{--                                    <span class="story-card-heading">--}}
{{--                                        <a class="kicker-text-mobi">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="section-name">--}}
{{--                                            {{$nContent->edition}}--}}
{{--                                        </a>--}}
{{--                                    </span>--}}
{{--                                    <h2>--}}
{{--                                        <div data-paywall="false" style="margin-top:8px;">--}}
{{--                                            <a href="{{route('show_web', $nContent->id)}}" title=""--}}
{{--                                               data-vr-excerpttitle="">--}}
{{--                                                {{$nContent->news_title}}--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </h2>--}}
{{--                                    <div class="news-comments-area">--}}

{{--                                        <ul>--}}
{{--                                            <li>--}}
{{--                                                <i class="fa fa-clock-o"></i> <span>  {{date('F d, Y', strtotime($nContent->created_at))}}</span>--}}
{{--                                            </li>--}}
{{--                                            <li data-ccount="33175746"></li>--}}
{{--                                        </ul>--}}

{{--                                        <ul>--}}
{{--                                            <li>--}}
{{--                                                <i class="fa fa-eye"></i> <span>{{$nContent->view_count}}</span>--}}
{{--                                            </li>--}}
{{--                                            <li data-ccount="33175746"></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}


{{--                    @endif--}}
{{--                    @endforeach--}}
{{--                </div>--}}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

            <div class="recomended_news">
                <div class="select_district_option">
                    <div class="row">
                        <div class="s_state">
                            <label for="FormControlSelectState">Select State</label>
                            <select class="form-control" id="FormControlSelectState">
                                <option>Andra Pradesh</option>
                                <option>Telegana</option>
                            </select>
                        </div>

                        <div class="s_district_andra">
                            <label for="FormControlSelectDistrictAndra">Select District</label>
                            <select class="form-control" id="FormControlSelectDistrictAndra">
                                <option>Ananthpuramu</option>
                                <option>Visakhapatnam</option>
                                <option>Vizianagaram</option>
                                <option>Srikakulam</option>
                                <option>East Godavari</option>
                                <option>West Godavari</option>
                                <option>Krishna district</option>
                                <option>Prakasam</option>
                                <option>Guntur</option>
                                <option>Kurnool</option>
                                <option>YSR kadapa</option>
                                <option>Nellore</option>
                                <option>Chittoor</option>
                            </select>
                        </div>

                        <div class="s_district_telegana">
                            <label for="FormControlSelectDistrictTelegana">Select District</label>
                            <select class="form-control" id="FormControlSelectDistrictTelegana">
                                <option>Hydarabad</option>
                                <option>Adilabad</option>
                                <option>Badradri</option>
                                <option>Srikakulam</option>
                                <option>Jagaityala</option>
                                <option>Janagam</option>
                                <option>Jayasankhar</option>
                                <option>Jogulambha</option>
                                <option>Kamareddy</option>
                                <option>Karimnagar</option>
                                <option>Khammamm</option>
                                <option>Mulugu</option>
                                <option>Medak</option>
                                <option>Manchiryala</option>
                                <option>Mahabubenagar</option>
                                <option>Mulugu</option>
                                <option>Nalgonda</option>
                                <option>Narayanapeta</option>
                                <option>Nirmal</option>
                                <option>Nagarkarnool</option>
                                <option>Nijamabada</option>
                                <option>Peddapalli</option>
                                <option>Rangareddy</option>
                                <option>Siddipeta</option>
                                <option>Suryapeta</option>
                                <option>Vikarabad</option>
                                <option>Vanaparthi</option>
                                <option>Warangal Urban</option>
                                <option>Wangal Rural</option>
                                <option>Yadadri</option>
                                <option>Rajanna Sirisilla</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="list_items_for_district">
                    {{--
                    <div class="facebook-simmer_district">--}}
                        {{--
                        <box class="shine"></box>
                        --}}

                        {{--
                        <div class="shiny-line">--}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}

                    {{--
                    <div class="facebook-simmer_district">--}}
                        {{--
                        <box class="shine"></box>
                        --}}

                        {{--
                        <div class="shiny-line">--}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}


                    {{--
                    <div class="facebook-simmer_district">--}}
                        {{--
                        <box class="shine"></box>
                        --}}

                        {{--
                        <div class="shiny-line">--}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}


                    {{--
                    <div class="facebook-simmer_district">--}}
                        {{--
                        <box class="shine"></box>
                        --}}

                        {{--
                        <div class="shiny-line">--}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}


                    {{--
                    <div class="facebook-simmer_district">--}}
                        {{--
                        <box class="shine"></box>
                        --}}

                        {{--
                        <div class="shiny-line">--}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}


                    {{--
                    <div class="facebook-simmer_district">--}}
                        {{--
                        <box class="shine"></box>
                        --}}

                        {{--
                        <div class="shiny-line">--}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}


                    {{--
                    <div class="facebook-simmer_district">--}}
                        {{--
                        <box class="shine"></box>
                        --}}

                        {{--
                        <div class="shiny-line">--}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}


                    {{--
                    <div class="facebook-simmer_district">--}}
                        {{--
                        <box class="shine"></box>
                        --}}

                        {{--
                        <div class="shiny-line">--}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}


                    {{--
                    <div class="facebook-simmer_district">--}}
                        {{--
                        <box class="shine"></box>
                        --}}

                        {{--
                        <div class="shiny-line">--}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                            <lines class="shine"></lines>
                            --}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}


                </div>
            </div>

            <div class="horoscope_dt" style="position: relative;">
                <img src="{{asset('public/img/horoscope_new.jpeg')}}" width="100%" height="100%"
                     alt="return to frontpage">
                <div class="full_img_static"
                     style="display: block;z-index: 10;position: absolute;top: 0;left: 0;width: 100%;">
                    <div id="demo1" class="carousel slide" data-ride="carousel">

                        <!--Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo1" data-slide-to="0" class="active"></li>
                            <li data-target="#demo1" data-slide-to="1"></li>
                            <li data-target="#demo1" data-slide-to="2"></li>
                            <li data-target="#demo1" data-slide-to="3"></li>
                            <li data-target="#demo1" data-slide-to="4"></li>
                            <li data-target="#demo1" data-slide-to="6"></li>
                            <li data-target="#demo1" data-slide-to="7"></li>
                            <li data-target="#demo1" data-slide-to="8"></li>
                            <li data-target="#demo1" data-slide-to="9"></li>
                            <li data-target="#demo1" data-slide-to="10"></li>
                            <li data-target="#demo1" data-slide-to="11"></li>
                        </ul>

                        <!--The slideshow -->
                        <div class="carousel-inner horoscope_inner">

                        </div>

                        <!--Left and right controls -->
                        <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                            <span class="carousel-control-prev-icon" style="display: none;"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo1" data-slide="next">
                            <span class="carousel-control-next-icon" style="display: none;"></span>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- mandal_state_national_card_news -->
    {{--
    <hr class="border_line">
    --}}
    <div class="mandal_state_national_card_news" style="margin-top: 24px;">
        <div class="row">

            <!--      Mandal          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>Mandal</h6>
                </div>

                @foreach($mandal_news as $mandal)
                @if($loop->index == 0)
                <div class="big_picture">
                    @if($mandal->photos_vid != "")
                    <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$mandal->photos_vid}}"
                                    width="100%" height="200px"></a>
                    @else
                    <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                    width="100%" height="200px"></a>
                    @endif

                    <div class="bottom_banner">
                        <h6><a href="{{route('show_web', $mandal->id)}}">{{$mandal->news_title}}</a></h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            <a href=""><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$mandal->photos_vid}}"
                                        width="100px" height="70px"></a>
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $mandal->id)}}">
                                <h6>{{$mandal->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Mandal">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>

            <!--      State          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>State</h6>
                </div>

                @foreach($state_news as $state)
                @if($loop->index == 0)
                <div class="big_picture">
                    <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$state->photos_vid}}"
                                    width="100%" height="200px"></a>
                    <div class="bottom_banner">
                        <h6>{{$state->news_title}}</h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            <a href="{{route('show_web', $state->id)}}"><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$state->photos_vid}}"
                                        width="100px" height="70px"></a>
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $state->id)}}">
                                <h6>{{$state->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=State">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>


            <!--      National          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>National</h6>
                </div>
                @foreach($national_news as $national)
                @if($loop->index == 0)
                <div class="big_picture">
                    <a href="{{route('show_web', $national->id)}}"><img
                                src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$national->photos_vid}}"
                                width="100%" height="200px"></a>
                    <div class="bottom_banner">
                        <h6>{{$national->news_title}}</h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            <a href="{{route('show_web', $national->id)}}"><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$national->photos_vid}}"
                                        width="100px" height="70px"></a>
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $national->id)}}">
                                <h6>{{$national->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=National">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>


        </div>
    </div>

    <!-- district_world_history_card_news -->
    {{--
    <hr class="border_line">
    --}}
    <div class="mandal_state_national_card_news" style="margin-top: 24px;">
        <div class="row">

            <!--      District          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>District</h6>
                </div>

                @foreach($district_news as $district)
                @if($loop->index == 0)
                <div class="big_picture">
                    <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$district->photos_vid}}"
                                    width="100%" height="200px"></a>
                    <div class="bottom_banner">
                        <h6><a href="{{route('show_web', $district->id)}}">{{$district->news_title}}</a></h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            <a href=""><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$district->photos_vid}}"
                                        width="100px" height="70px"></a>
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $district->id)}}">
                                <h6>{{$district->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Mandal">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>

            <!--      World          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>World</h6>
                </div>

                @foreach($world_news as $world)
                @if($loop->index == 0)
                <div class="big_picture">
                    @if($world->photos_vid == null || str_contains($world->photos_vid, 'upload'))
                    <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                    width="100%" height="200px"></a>

                    @else
                    <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$world->photos_vid}}"
                                    width="100%" height="200px"></a>
                    @endif

                    <div class="bottom_banner">
                        <h6>{{$world->news_title}}</h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            @if($world->photos_vid == null || str_contains($world->photos_vid, 'upload'))
                            <a href="{{route('show_web', $world->id)}}">
                                <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                                width="120x" height="70px"></a>

                            @else
                                <img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$world->photos_vid}}"
                                     width="100px" height="70px"></a>
                            @endif

                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $world->id)}}">
                                <h6>{{$world->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=State">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>


            <!--      History          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>History</h6>
                </div>
                @foreach($history_news as $history)
                @if($loop->index == 0)
                <div class="big_picture">
                    <a href="{{route('show_web', $history->id)}}"><img
                                src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$history->photos_vid}}"
                                width="100%" height="200px"></a>
                    <div class="bottom_banner">
                        <h6>{{$history->news_title}}</h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            @if($history->photos_vid == null || str_contains($history->photos_vid, 'upload'))
                            <a href="{{route('show_web', $history->id)}}">
                                <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                                width="120x" height="70px"></a>

                                @else
                            <a href="{{route('show_web', $history->id)}}"><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$history->photos_vid}}"
                                        width="100px" height="70px"></a>
                                @endif
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $history->id)}}">
                                <h6>{{$history->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=National">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>


        </div>
    </div>


    <!-- Tourism_health_business_card_news -->
    {{--
    <hr class="border_line">
    --}}
    <div class="mandal_state_national_card_news" style="margin-top: 24px;">
        <div class="row">

            <!--      Tourism          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>Tourism</h6>
                </div>

                @foreach($tourism_news as $tourism)
                @if($loop->index == 0)
                <div class="big_picture">
                    <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$tourism->photos_vid}}"
                                    width="100%" height="200px"></a>
                    <div class="bottom_banner">
                        <h6><a href="{{route('show_web', $tourism->id)}}">{{$tourism->news_title}}</a></h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            @if($tourism->photos_vid == null || str_contains($tourism->photos_vid, 'upload'))
                            <a href="{{route('show_web', $tourism->id)}}">
                                <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                                width="120x" height="70px"></a>

                                @else
                            <a href=""><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$tourism->photos_vid}}"
                                        width="100px" height="70px"></a>
                                @endif
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $tourism->id)}}">
                                <h6>{{$tourism->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Mandal">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>

            <!--      World          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>World</h6>
                </div>

                @foreach($health_news as $health)
                @if($loop->index == 0)
                <div class="big_picture">
                    <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$health->photos_vid}}"
                                    width="100%" height="200px"></a>
                    <div class="bottom_banner">
                        <h6>{{$health->news_title}}</h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            <a href="{{route('show_web', $world->id)}}"><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$health->photos_vid}}"
                                        width="100px" height="70px"></a>
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $health->id)}}">
                                <h6>{{$health->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=State">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>


            <!--      business_news          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>Business</h6>
                </div>
                @foreach($business_news as $business)
                @if($loop->index == 0)
                <div class="big_picture">
                    @if($business->photos_vid == null || str_contains($business->photos_vid, 'upload'))
                    <a href="{{route('show_web', $business->id)}}">
                        <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                        width="100px" height="200px"></a>

                        @else
                    <a href="{{route('show_web', $business->id)}}"><img
                                src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$business->photos_vid}}"
                                width="100%" height="200px"></a>
                        @endif
                    <div class="bottom_banner">
                        <h6>{{$business->news_title}}</h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            @if($business->photos_vid == null || str_contains($business->photos_vid, 'upload'))
                            <a href="{{route('show_web', $business->id)}}">
                                <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                                width="120x" height="70px"></a>

                                @else
                            <a href="{{route('show_web', $business->id)}}"><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$business->photos_vid}}"
                                        width="100px" height="70px">
                                @endif
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $business->id)}}">
                                <h6>{{$business->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=National">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>


        </div>
    </div>

    <!-- Ens_Crime_political_news -->
    {{--
    <hr class="border_line">
    --}}
    <div class="mandal_state_national_card_news" style="margin-top: 24px;">
        <div class="row">

            <!--      Ens          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>Ens Crime</h6>
                </div>

                @foreach($ens_news as $ens)
                @if($loop->index == 0)
                <div class="big_picture">
                    @if($ens->photos_vid == null || str_contains($ens->photos_vid, 'upload'))
                    <a href="{{route('show_web', $ens->id)}}">
                        <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                        width="100px" height="200px"></a>

                        @else
                    <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$ens->photos_vid}}"
                                    width="100%" height="200px"></a>
                        @endif
                    <div class="bottom_banner">
                        <h6><a href="{{route('show_web', $ens->id)}}">{{$ens->news_title}}</a></h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            <a href=""><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$ens->photos_vid}}"
                                        width="100px" height="70px"></a>
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $ens->id)}}">
                                <h6>{{$ens->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Mandal">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>

            <!--      crime          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>Crime</h6>
                </div>

                @foreach($crime_news as $crime)
                @if($loop->index == 0)
                <div class="big_picture">
                    <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$crime->photos_vid}}"
                                    width="100%" height="200px"></a>
                    <div class="bottom_banner">
                        <h6>{{$crime->news_title}}</h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            <a href="{{route('show_web', $crime->id)}}"><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$crime->photos_vid}}"
                                        width="100px" height="70px"></a>
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $crime->id)}}">
                                <h6>{{$crime->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=State">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>


            <!--      political          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>Political</h6>
                </div>
                @foreach($political_news as $political)
                @if($loop->index == 0)
                <div class="big_picture">
                    @if($political->photos_vid == null || str_contains($political->photos_vid, 'upload'))
                    <a href="{{route('show_web', $political->id)}}">
                        <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                        width="100%" height="200px;"></a>

                        @else
                    <a href="{{route('show_web', $political->id)}}"><img
                                src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$political->photos_vid}}"
                                width="100%" height="200px"></a>
                        @endif
                    <div class="bottom_banner">
                        <h6>{{$political->news_title}}</h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            @if($political->photos_vid == null || str_contains($political->photos_vid, 'upload'))
                            <a href="{{route('show_web', $political->id)}}">
                                <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                                width="120x" height="70px"></a>

                                @else
                            <a href="{{route('show_web', $political->id)}}"><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$political->photos_vid}}"
                                        width="100px" height="70px"></a>
                                @endif
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $political->id)}}">
                                <h6>{{$political->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=National">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>


        </div>
    </div>


    <!-- Job_humanity_cinema_news -->
    {{--
    <hr class="border_line">
    --}}
    <div class="mandal_state_national_card_news" style="margin-top: 24px;">
        <div class="row">

            <!--      job          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>Job</h6>
                </div>

                @foreach($job_news as $job)
                @if($loop->index == 0)
                <div class="big_picture">
                    @if($job->photos_vid == null || str_contains($job->photos_vid, 'upload'))
                    <a href="{{route('show_web', $job->id)}}">
                        <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                        width="100px" height="200px"></a>

                        @else
                    <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$job->photos_vid}}"
                                    width="100%" height="200px"></a>
                        @endif
                    <div class="bottom_banner">
                        <h6><a href="{{route('show_web', $job->id)}}">{{$job->news_title}}</a></h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            @if($job->photos_vid == null || str_contains($job->photos_vid, 'upload'))
                            <a href="{{route('show_web', $job->id)}}">
                                <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                                width="120x" height="70px"></a>

                                @else
                            <a href=""><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$job->photos_vid}}"
                                        width="100px" height="70px"></a>
                                @endif
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $job->id)}}">
                                <h6>{{$job->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Mandal">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>

            <!--      humanity          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>Humanity</h6>
                </div>

                @foreach($humanity_news as $humanity)
                @if($loop->index == 0)
                <div class="big_picture">
                    @if($humanity->photos_vid == null || str_contains($humanity->photos_vid, 'upload'))
                    <a href="{{route('show_web', $humanity->id)}}">
                        <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                        width="100%" height="200px"></a>

                        @else
                    <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$humanity->photos_vid}}"
                                    width="100%" height="200px"></a>
                        @endif
                    <div class="bottom_banner">
                        <h6>{{$humanity->news_title}}</h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            <a href="{{route('show_web', $humanity->id)}}"><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$humanity->photos_vid}}"
                                        width="100px" height="70px"></a>
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $humanity->id)}}">
                                <h6>{{$humanity->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=State">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>


            <!--      cinema_news          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>Cinema</h6>
                </div>
                @foreach($cinema_news as $cinema)
                @if($loop->index == 0)
                <div class="big_picture">
                    @if($cinema->photos_vid == null || str_contains($cinema->photos_vid, 'upload'))
                    <a href="{{route('show_web', $cinema->id)}}">
                        <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                        width="100%" height="200px"></a>

                        @else
                    <a href="{{route('show_web', $cinema->id)}}"><img
                                src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$cinema->photos_vid}}"
                                width="100%" height="200px"></a>
                        @endif
                    <div class="bottom_banner">
                        <h6>{{$cinema->news_title}}</h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            <a href="{{route('show_web', $cinema->id)}}"><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$cinema->photos_vid}}"
                                        width="100px" height="70px"></a>
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $cinema->id)}}">
                                <h6>{{$cinema->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=National">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>


        </div>
    </div>

    <!-- kitchen_sports_videos_news -->
    {{--
    <hr class="border_line">
    --}}
    <div class="mandal_state_national_card_news" style="margin-top: 24px;">
        <div class="row">

            <!--      kitchen_news          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>Kitchen</h6>
                </div>

                @foreach($kitchen_news as $kitchen)
                @if($loop->index == 0)
                <div class="big_picture">
                    @if($kitchen->photos_vid == null || str_contains($kitchen->photos_vid, 'upload'))
                    <a href="{{route('show_web', $kitchen->id)}}">
                        <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                        width="120x" height="70px"></a>

                        @else
                    <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$kitchen->photos_vid}}"
                                    width="100%" height="200px"></a>
                        @endif
                    <div class="bottom_banner">
                        <h6><a href="{{route('show_web', $kitchen->id)}}">{{$kitchen->news_title}}</a></h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            @if($kitchen->photos_vid == null || str_contains($kitchen->photos_vid, 'upload'))
                            <a href="{{route('show_web', $kitchen->id)}}">
                                <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                                width="120x" height="70px"></a>

                                @else
                            <a href=""><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$kitchen->photos_vid}}"
                                        width="100px" height="70px"></a>
                                @endif
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $kitchen->id)}}">
                                <h6>{{$kitchen->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Mandal">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>

            <!--      sports_news          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>Sports</h6>
                </div>

                @foreach($sports_news as $sports)
                @if($loop->index == 0)
                <div class="big_picture">
                    <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$sports->photos_vid}}"
                                    width="100%" height="200px"></a>
                    <div class="bottom_banner">
                        <h6>{{$sports->news_title}}</h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            @if($sports->photos_vid == null || str_contains($sports->photos_vid, 'upload'))
                            <a href="{{route('show_web', $sports->id)}}">
                                <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                                width="120x" height="70px"></a>

                                @else
                            <a href="{{route('show_web', $sports->id)}}"><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$sports->photos_vid}}"
                                        width="100px" height="70px"></a>
                                @endif
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $sports->id)}}">
                                <h6>{{$sports->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=State">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>


            <!--      videos_news          -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                <div class="card_title">
                    <h6>Videos</h6>
                </div>
                @foreach($videos_news as $videos)
                @if($loop->index == 0)
                <div class="big_picture">
                    @if($videos->photos_vid == null || str_contains($videos->photos_vid, 'upload'))
                    <a href="{{route('show_web', $videos->id)}}">
                        <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                        width="120x" height="70px"></a>

                        @else
                    <a href="{{route('show_web', $videos->id)}}"><img
                                src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$videos->photos_vid}}"
                                width="100%" height="200px"></a>
                        @endif
                    <div class="bottom_banner">
                        <h6>{{$videos->news_title}}</h6>
                    </div>
                </div>
                @else
                <div class="list_news_card">
                    <div class="news_card_list">
                        <div class="small_picture">
                            @if($videos->photos_vid == null || str_contains($videos->photos_vid, 'upload'))
                            <a href="{{route('show_web', $videos->id)}}">
                                <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                                width="120x" height="70px"></a>

                                @else
                            <a href="{{route('show_web', $videos->id)}}"><img
                                        src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$videos->photos_vid}}"
                                        width="100px" height="70px"></a>
                                @endif
                        </div>

                        <div class="news_title_list">
                            <a href="{{route('show_web', $videos->id)}}">
                                <h6>{{$videos->news_title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach


                <div class="view_more" style="margin-top:10px">
                    <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=National">
                        <h7>View More</h7>
                    </a>
                </div>

            </div>


        </div>
    </div>

    {{--
    <hr class="border_line">
    --}}


    <div class="footer shadow-sm p-3 mb-0 bg-white rounded">
        <br>
        <div class="row d-flex justify-content-between ">
            <div class="col-12 col-sm-12 col-md-2 col-lg-2 download_at">
                <h6>Downloads</h6>
                <a href="https://play.google.com/store/apps/details?id=com.enslive"><i class="fa fa-android"
                                                                                       aria-hidden="true"></i></a>
            </div>

            <div class="col-12 col-sm-12 col-md-2 col-lg-2 enslive_txt">
                <h6>ENS Live</h6>
            </div>

            <div class="col-12 col-sm-12 col-md-2 col-lg-2 follow_us">
                <h6>Follow us</h6>
                <a href="https://www.facebook.com/enslive.net"><i class="fa fa-facebook" aria-hidden="true"></i></a>|
                <a href="https://twitter.com/balabhaannu"><i class="fa fa-twitter" aria-hidden="true"></i></a>|
                <a href="https://www.linkedin.com/in/ens-live-280494145/"><i class="fa fa-linkedin"
                                                                             aria-hidden="true"></i></a>|
                <a href="https://www.instagram.com/ens_balu/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>

        <hr class="footer_line">

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 owner_details_link">
            <div class="row d-flex justify-content-between">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                    <h7><a href="">About Us</a></h7>
                    |
                    <h7><a href="">Privacy</a></h7>
                    |
                    <h7><a href="">Contact Us</a></h7>
                    |
                    <h7><a href="">Terms and Conditions</a></h7>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6" style="text-align: right">
                    <h6><a href="">Copyright@2020ENSLive</a></h6>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection

@section('script')
<script>
    $.ajax({
        url: 'https://enslive.net/api/get_horoscope',
        type: 'GET',
        data: {},
        dataType: 'json',
        /* etc */
        success: function (jsondata) {
            var jsonD = jsondata;
            var count = 0;
            //big picture
            for (signHoroscope in jsonD) {

                var newNode = document.createElement('div');
                if (count == 0) {
                    newNode.classList.add("carousel-item", "active");
                }
                {
                    newNode.classList.add("carousel-item");
                }

                //title
                var titleNode = document.createElement('h5');
                titleNode.className = 'horscope_sign';
                titleNode.textContent = signHoroscope;

                var titleTagElement = document.createElement('h6');
                titleTagElement.className = 'horscope_det';
                titleTagElement.textContent = jsonD[signHoroscope];

                newNode.appendChild(titleNode);
                newNode.appendChild(titleTagElement);

                document.getElementsByClassName('horoscope_inner')[0].appendChild(newNode);
                count++;

            }
        }
    });


</script>

<script>

    // $("#FormControlSelectState").hide();
    // $("#FormControlSelectDistrictTelegana").hide()
    if ($("#FormControlSelectState").val() == "Andra Pradesh") {
        $(".s_district_andra").show();
        $(".s_district_telegana").hide();
    } else if ($("#FormControlSelectState").val() == "Telegana") {
        $(".s_district_andra").hide();
        $(".s_district_telegana").show();
    }

    $('#FormControlSelectState').on('change', function () {
        if ($("#FormControlSelectState").val() == "Andra Pradesh") {
            $(".s_district_andra").show();
            $(".s_district_telegana").hide();
        } else if ($("#FormControlSelectState").val() == "Telegana") {
            $(".s_district_andra").hide();
            $(".s_district_telegana").show();
        }

    });

</script>

<!--district news-->
<script>

    var districtNames = "";

    $('#FormControlSelectDistrictAndra').on('change', function () {
        if ($("#FormControlSelectState").val() == "Andra Pradesh") {
            districtNames = $("#FormControlSelectDistrictAndra").val();
            getDataDistrict(districtNames);
            $(".facebook-simmer_district").show();
        }
    });

    $('#FormControlSelectDistrictTelegana').on('change', function () {
        if ($("#FormControlSelectState").val() == "Telegana") {
            districtNames = $("#FormControlSelectDistrictTelegana").val();
            getDataDistrict(districtNames);
            $(".facebook-simmer_district").show();
        }
    });

    function getDataDistrict(dNames) {
        $.ajax({
            url: 'https://enslive.net/api/get_news_by_district',
            type: 'POST',
            data: {
                'district_names': dNames
            },
            dataType: 'json',
            /* etc */
            success: function (jsondata) {
                var jsonD = jsondata;
                $(".facebook-simmer_district").hide();
                var rootNodeD = document.getElementsByClassName("list_items_for_district");

                // if(jsonD.length == 0){
                //     var dummyPNode = document.createElement('h6');
                //     dummyPNode.setAttribute("margin-top", "25px");
                //     dummyPNode.setAttribute("text-alignment", "center");
                // }

                if ($('div').hasClass('list_news_card_s')) {
                    $(".list_news_card_s").remove();
                }

                for (var i = 0; i < jsonD.length; i++) {

                    var listNNode = document.createElement('div');
                    listNNode.classList.add("list_news_card_s");

                    var smallPictureNode = document.createElement('div');
                    smallPictureNode.classList.add("small_picture_s");

                    var aLinkHrefImg = document.createElement('a');

                    var xImg = document.createElement('img');

                    aLinkHrefImg.appendChild(xImg);
                    listNNode.appendChild(aLinkHrefImg);
                    smallPictureNode.appendChild(listNNode);

                    var picTitleNode = document.createElement('div');
                    picTitleNode.classList.add("picTitleNode");

                    var newTitleNode = document.createElement('div');
                    newTitleNode.classList.add("news_title_list_s");

                    var aLinkHrefTitle = document.createElement('a');

                    var h6Node = document.createElement('h6');

                    h6Node.textContent = jsonD[i].news_title;
                    aLinkHrefTitle.appendChild(h6Node);
                    newTitleNode.appendChild(aLinkHrefTitle);

                    picTitleNode.appendChild(newTitleNode);

                    // location
                    var nLocNode = document.createElement('div');
                    nLocNode.classList.add("loc_d_d");

                    var loc_icon = document.createElement('i');
                    loc_icon.classList.add("fa", "fa-map-marker");
                    loc_icon.setAttribute("margin-right", "15px");

                    var loc_txt = document.createElement('h5');
                    loc_txt.textContent = jsonD[i].district_name;

                    nLocNode.appendChild(loc_icon);
                    nLocNode.appendChild(loc_txt);

                    picTitleNode.appendChild(nLocNode);
                    listNNode.appendChild(picTitleNode);

                    if (jsonD[i].photos_vid.includes(",")) {
                        xImg.setAttribute("src", "https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/" + jsonD[i].photos_vid.split(",")[0]);
                        xImg.setAttribute("width", "100px");
                        xImg.setAttribute("height", "70px");

                        aLinkHrefImg.setAttribute("href", "");


                    } else {
                        xImg.setAttribute("src", "https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/" + jsonD[i].photos_vid.split(",")[0]);
                        xImg.setAttribute("width", "100px");
                        xImg.setAttribute("height", "70px");
                    }


                    h6Node.textContent = jsonD[i].newsTitle;
                    ;

                    rootNodeD[0].appendChild(listNNode);

                }


            }
        })
    }


</script>
@endsection
