@extends('website.layout.app')

@section('content')
    <!-- Latest News   -->
    <div class="container">
        <div class="row" style="margin-top: 1rem;">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="50x3b-container">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            @foreach($news_content as $news_c)
                                @if($loop->index < 8)
                                    @if($loop->index == 0)
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="https://d4f9k68hk754p.cloudfront.net/fit-in/712x712/{{$news_c->photos_vid}}" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <a href="{{route('show_web', $news_c->id)}}"><h3>{{$news_c->news_title}}</h3></a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="https://d4f9k68hk754p.cloudfront.net/fit-in/712x712/{{$news_c->photos_vid}}" alt="First slide">
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

                <div class="row" style="margin-top: 10px; margin-left: 1px; margin-right: 1px; background: #fff; padding-top:10px">

                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        @foreach($news_content as $nContent)
                            @if($loop->index < 15)
                                <div class="50_1x_StoryCard mobile-padding">
                                    <div class="story-card" data-vr-contentbox="">
                                        <a href="" class="story-card-img focuspoint " data-focus-x="0" data-focus-y="0">
                                            <img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$nContent->photos_vid}}" >
                                        </a>
                                        <div class="story-card-news">
                                    <span class="story-card-heading">
                                        <a class="kicker-text-mobi">
                                        </a>
                                        <a href="" class="section-name">
                                            {{$nContent->edition}}
                                        </a>
                                    </span>
                                            <h2>
                                                <div data-paywall="false">
                                                    <a href="{{route('show_web', $nContent->id)}}" title="" data-vr-excerpttitle="">
                                                        {{$nContent->news_title}}
                                                    </a>
                                                </div>
                                            </h2>
                                            <div class="news-comments-area">

                                                <ul>
                                                    <li>
                                                        <i class="fa fa-clock-o"></i> <span>  {{date('F d, Y', strtotime($nContent->created_at))}}</span>
                                                    </li>
                                                    <li data-ccount="33175746"></li>
                                                </ul>

                                                <ul>
                                                    <li>
                                                        <i class="fa fa-eye"></i> <span>{{$nContent->view_count}}</span>
                                                    </li>
                                                    <li data-ccount="33175746"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="border_line">
                            @endif
                        @endforeach
                    </div>


                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        @foreach($news_content as $nContent)
                            @if($loop->index > 15)
                                <div class="50_1x_StoryCard mobile-padding">
                                    <!-- Shimmer Effect -->
                                    {{--                                <div class="facebook-simmer">--}}
                                    {{--                                    <box class="shine"></box>--}}

                                    {{--                                    <div class="shiny-line">--}}
                                    {{--                                        <lines class="shine"></lines>--}}
                                    {{--                                        <lines class="shine"></lines>--}}
                                    {{--                                        <lines class="shine"></lines>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}

                                    <div class="story-card" data-vr-contentbox="">
                                        <a href="" class="story-card-img focuspoint " data-focus-x="0" data-focus-y="0">
                                            <img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$nContent->photos_vid}}" >
                                        </a>
                                        <div class="story-card-news">
                                    <span class="story-card-heading">
                                        <a class="kicker-text-mobi">
                                        </a>
                                        <a href="" class="section-name">
                                            {{$nContent->edition}}
                                        </a>
                                    </span>
                                            <h2>
                                                <div data-paywall="false">
                                                    <a href="{{route('show_web', $nContent->id)}}" title="" data-vr-excerpttitle="">
                                                        {{$nContent->news_title}}
                                                    </a>
                                                </div>
                                            </h2>
                                            <div class="news-comments-area">

                                                <ul>
                                                    <li>
                                                        <i class="fa fa-clock-o"></i> <span> {{date('F d, Y', strtotime($nContent->created_at))}}</span>
                                                    </li>
                                                    <li data-ccount="33175746"></li>
                                                </ul>

                                                <ul>
                                                    <li>
                                                        <i class="fa fa-eye"></i> <span>{{$nContent->view_count}}</span>
                                                    </li>
                                                    <li data-ccount="33175746"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="border_line">
                            @endif
                        @endforeach
                    </div>

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
                                    <option>Yadadri </option>
                                    <option>Rajanna Sirisilla</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="list_items_for_district">
{{--                        <div class="facebook-simmer_district">--}}
{{--                            <box class="shine"></box>--}}

{{--                            <div class="shiny-line">--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="facebook-simmer_district">--}}
{{--                            <box class="shine"></box>--}}

{{--                            <div class="shiny-line">--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="facebook-simmer_district">--}}
{{--                            <box class="shine"></box>--}}

{{--                            <div class="shiny-line">--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="facebook-simmer_district">--}}
{{--                            <box class="shine"></box>--}}

{{--                            <div class="shiny-line">--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="facebook-simmer_district">--}}
{{--                            <box class="shine"></box>--}}

{{--                            <div class="shiny-line">--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="facebook-simmer_district">--}}
{{--                            <box class="shine"></box>--}}

{{--                            <div class="shiny-line">--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="facebook-simmer_district">--}}
{{--                            <box class="shine"></box>--}}

{{--                            <div class="shiny-line">--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="facebook-simmer_district">--}}
{{--                            <box class="shine"></box>--}}

{{--                            <div class="shiny-line">--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="facebook-simmer_district">--}}
{{--                            <box class="shine"></box>--}}

{{--                            <div class="shiny-line">--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                                <lines class="shine"></lines>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                    </div>
                </div>

                <div class="horoscope_dt" style="position: relative;">
                    <img src="assets/images/horoscope_new.jpeg" width="100%" height="100%" alt="return to frontpage">
                    <div class="full_img_static" style="display: block;z-index: 10;position: absolute;top: 0;left: 0;width: 100%;">
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
        <hr class="border_line">
        <div class="mandal_state_national_card_news">
            <div class="row">

                <!--      Mandal          -->
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">

                    <div class="card_title">
                        <h6>Mandal</h6>
                    </div>

                    @foreach($mandal_news as $mandal)
                        @if($loop->index == 0)
                            <div class="big_picture">
                                <a href=""><img  src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$mandal->photos_vid}}" width="100%" height="200px"></a>
                                <div class="bottom_banner">
                                    <h6><a href="{{route('show_web', $mandal->id)}}">{{$mandal->news_title}}</a></h6>
                                </div>
                            </div>
                        @else
                            <div class="list_news_card">
                                <div class="news_card_list">
                                    <div class="small_picture">
                                        <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$mandal->photos_vid}}" width="100px" height="70px"></a>
                                    </div>

                                    <div class="news_title_list">
                                        <a href = "{{route('show_web', $mandal->id)}}">
                                            <h6>{{$mandal->news_title}}</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach



                    <div class="view_more" style="margin-top:10px">
                        <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Mandal"><h7>View More</h7></a>
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
                                <a href=""><img  src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$state->photos_vid}}" width="100%" height="200px"></a>
                                <div class="bottom_banner">
                                    <h6>{{$state->news_title}}</h6>
                                </div>
                            </div>
                        @else
                            <div class="list_news_card">
                                <div class="news_card_list">
                                    <div class="small_picture">
                                        <a href="{{route('show_web', $state->id)}}"><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$state->photos_vid}}" width="100px" height="70px"></a>
                                    </div>

                                    <div class="news_title_list">
                                        <a href = "{{route('show_web', $state->id)}}">
                                            <h6>{{$state->news_title}}</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach



                    <div class="view_more" style="margin-top:10px">
                        <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=State"><h7>View More</h7></a>
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
                                <a href="{{route('show_web', $national->id)}}"><img  src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$national->photos_vid}}" width="100%" height="200px"></a>
                                <div class="bottom_banner">
                                    <h6>{{$national->news_title}}</h6>
                                </div>
                            </div>
                        @else
                            <div class="list_news_card">
                                <div class="news_card_list">
                                    <div class="small_picture">
                                        <a href="{{route('show_web', $national->id)}}"><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$national->photos_vid}}" width="100px" height="70px"></a>
                                    </div>

                                    <div class="news_title_list">
                                        <a href = "{{route('show_web', $national->id)}}">
                                            <h6>{{$national->news_title}}</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach


                    <div class="view_more" style="margin-top:10px">
                        <a href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=National"><h7>View More</h7></a>
                    </div>

                </div>


            </div>
        </div>

        <hr class="border_line">
        <div class="footer shadow-sm p-3 mb-0 bg-white rounded">
            <br>
            <div class="row d-flex justify-content-between ">
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 download_at">
                    <h6>Downloads</h6>
                    <a href="https://play.google.com/store/apps/details?id=com.enslive"><i class="fa fa-android" aria-hidden="true"></i></a>
                </div>

                <div class="col-12 col-sm-12 col-md-2 col-lg-2 enslive_txt">
                    <h6>ENS Live</h6>
                </div>

                <div class="col-12 col-sm-12 col-md-2 col-lg-2 follow_us">
                    <h6>Follow us</h6>
                    <a href="https://www.facebook.com/enslive.net"><i class="fa fa-facebook" aria-hidden="true"></i></a>|
                    <a href="https://twitter.com/balabhaannu"><i class="fa fa-twitter" aria-hidden="true"></i></a>|
                    <a href="https://www.linkedin.com/in/ens-live-280494145/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>|
                    <a href="https://www.instagram.com/ens_balu/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <hr class="footer_line">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 owner_details_link">
                <div class="row d-flex justify-content-between">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                        <h7><a href="">About Us</a></h7> |
                        <h7><a href="">Privacy</a></h7> |
                        <h7><a href="">Contact Us</a></h7> |
                        <h7><a href="">Terms and Conditions</a></h7>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-6" style="text-align: right">
                        <h6><a href="">Copyright@2020ENSLive</a></h6>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
        function sendMessage(title, photosUrl, contentType, contentNews, selectDistrict, newsCategories, liveLocation, postedBy) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "https://fcm.googleapis.com/fcm/send");
            xmlhttp.setRequestHeader("Content-Type", "application/json");
            xmlhttp.setRequestHeader("Authorization", "Key = AAAAPygabOo:APA91bG9x19mXol2EWCHvk9rxZfyFO6H_t07zp3LW8Xvxb3bLznCdB79-KHNwQeCEkeTHwdLf4-qVnIGrRnONuWbTf4AstWX0Firq2tB6D-JUgWcUh3_X0PCTOyusc0wOD0WquiXtex5");
            xmlhttp.send(JSON.stringify({
                // "notification": {
                //     "title": title,
                //     "image": "http://test.enslive.net/v1/api/create/upload_vid_img/" + photosUrl,
                // },
                "data": {
                    "contentType": contentType,
                    "contentNews": contentNews,
                    "selectDistrict": selectDistrict,
                    "newsCategories": newsCategories,
                    "liveLocation": liveLocation,
                    "postedBy": postedBy,
                    "title_t": title,
                    "image_i": "http://test.enslive.net/v1/api/create/upload_vid_img/" + photosUrl,
                },

                "to": "/topics/all"

            }));
        }

    </script>
@endsection
