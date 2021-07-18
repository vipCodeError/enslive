<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <link rel="canonical" href="https://enslive.net">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-language" content="te">


    @isset($eData)
        {{$shouldShow = false}}
    @else
        {{$shouldShow = true}}
    @endisset

    <meta property="fb:app_id" content="189091451656210">
    <meta property="og:site_name" content="EnsLive">
    <meta property="og:title" content=@if($shouldShow) "EnsLive Breaking News"@else"{!! $eData->news_title !!}"@endif>
    <meta property="og:description" content=@if($shouldShow)"eeroju news service(ens) its complete telugu national news agency.
    telugu people heart beat. ens Operation from visakhapatnam. And also ens maintain news channel and news website .
     Please visit youtube on eeroju news and www.enslive.net tq"@else"{!! str_replace('\"', '', Str::limit($eData->news_content, 100)) !!}"@endif>
    <meta property="og:image:secure_url" content=@if($shouldShow)"https://enslive.net/assets/images/ens_new_logo.jpeg"@else"https://d4f9k68hk754p.cloudfront.net/fit-in/400x400/{{$eData->photos_vid}}"@endif>
    <meta property="og:image" content="@if($shouldShow) https://enslive.net/assets/images/ens_new_logo.jpeg@else https://d4f9k68hk754p.cloudfront.net/fit-in/400x400/{{$eData->photos_vid}} @endif">
    <meta property="og:url" content="https://enslive.net">
    <!--<meta property="og:image:width" content="400" /> -->
    <!--<meta property="og:image:height" content="300" />-->

    <meta name="twitter:title" content=@if($shouldShow) "EnsLive Breaking News"@else"{!! $eData->news_title !!}"@endif>
    <meta name="twitter:description" content=@if($shouldShow) "eeroju news service(ens) its complete telugu national news agency.
          telugu people heart beat. ens Operation from visakhapatnam. And also ens maintain news channel and news website .
          Please visit youtube on eeroju news and www.enslive.net tq"@else"{!! str_replace('\"', '', Str::limit($eData->news_content, 100))!!}"@endif>
    <meta name="twitter:image" content=@if($shouldShow)"https://enslive.net/assets/images/ens_new_logo.jpeg"@else"https://d4f9k68hk754p.cloudfront.net/fit-in/400x400/{{$eData->photos_vid}}"@endif>
    <meta name="twitter:card" content="summary">



    <script data-ad-client="ca-pub-9408415369362442" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/web_css/index.css?ver=1.2')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
        rel="stylesheet"  type='text/css'>
    <script src="{{asset('js/moment.js')}}"></script>
    <title>ENS Live Breaking News</title>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

            <!--    Logos       -->
            <section class="logo-block">
                <div class="row">
                    <div id="logo" class="logo col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="today_date">
                            <div class="col-3 col-sm-3 col-md-2 col-lg-2 follow_us">
                                <a href="https://www.facebook.com/enslive.net"><i class="fa fa-facebook" aria-hidden="true"></i></a>|
                                <a href="https://twitter.com/balabhaannu"><i class="fa fa-twitter" aria-hidden="true"></i></a>|
                                <a href="https://www.linkedin.com/in/ens-live-280494145/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>|
                                <a href="https://www.instagram.com/ens_balu/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                            <p>| </p>
                        </div>

                        <div class="row" style="margin-left:0px;margin-right:0px">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <a href="https://enslive.net">
                                    <img src="{{asset('img/ens_new_logo.jpeg')}}" width="200px" height="100%" alt="return to frontpage">
                                </a>
                            </div>

                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                <img id="ads_img_ttt" src="https://practicebuckett123.s3.ap-south-1.amazonaws.com/7eefb065-0c34-4f6c-8677-edd27b437dc7.jpeg" width="100%" height="100%">
                            </div>

                        </div>
                    </div>
                </div>

            </section>

            <!--    Navbar            -->
                <!--    Navbar            -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nnav">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="https://enslive.net">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cat_show_news', 'Mandal')}}">Mandal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cat_show_news', 'District')}}">District</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cat_show_news', 'National')}}">National</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cat_show_news', 'World')}}">World</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cat_show_news', 'Crime')}}">Crime</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cat_show_news', 'Business')}}">Business</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cat_show_news', 'Kitchen')}}">Kitchen</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cat_show_news', 'Cinema')}}">Cinema</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cat_show_news', 'ENS')}}">ENS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cat_show_news', 'Job')}}">Job</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cat_show_news', 'Humanity')}}">Humanity</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cat_show_news', 'Tourism')}}">Tourism</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cat_show_news', 'Sports')}}">Sports</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                More
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{route('cat_show_news', 'State')}}">State</a>
                                <a class="dropdown-item" href="{{route('cat_show_news', 'History')}}">History</a>
                                <a class="dropdown-item" href="{{route('cat_show_news', 'Health')}}">Health</a>
                                <a class="dropdown-item" href="{{route('cat_show_news', 'Video')}}">Video</a>
                                <a class="dropdown-item" href="{{route('cat_show_news', 'Political')}}">Political</a>
                                <a class="dropdown-item" href="{{route('cat_show_news', 'Education')}}">Education</a>
                                <a class="dropdown-item" href="{{route('cat_show_news', 'Photos')}}">Photos</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-3 col-sm-3 col-md-2 col-lg-2 follow_us_nav">
                    <a href="https://www.facebook.com/enslive.net"><i class="fa fa-facebook" aria-hidden="true"></i></a>|
                    <a href="https://twitter.com/balabhaannu"><i class="fa fa-twitter" aria-hidden="true"></i></a>|
                    <a href="https://www.linkedin.com/in/ens-live-280494145/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>|
                    <a href="https://www.instagram.com/ens_balu/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </nav>
        </div>
    </div>
</div>


@yield('content')

<script>
    window.onscroll = function() {
        myFunction()
    };

    var navbar = document.getElementById("nnav");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky");
            $(".follow_us_nav").show();
        } else {
            navbar.classList.remove("sticky");
            $(".follow_us_nav").hide();
        }
    }
</script>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
@yield('script')
<script>
    $(document).ready(function(){
        var paths =
            [ "https://practicebuckett123.s3.ap-south-1.amazonaws.com/enslive_object/ads/7feb3af2-eadd-4213-b9e9-acee1e36900c.jfif",
                "https://practicebuckett123.s3.ap-south-1.amazonaws.com/enslive_object/ads/b0100a8a-056d-4e7b-8591-7ce852ba60a1.jfif",
                "https://practicebuckett123.s3.ap-south-1.amazonaws.com/enslive_object/ads/fdc1d46f-f4a4-4c28-b6fb-6b9f467a9e87.jfif"];

        var img = document.getElementById("ads_img_ttt");
        var i = 0;
        var timer = setInterval(function(){
            // If we've reached the end of the array...
            if(i >= paths.length){
                //clearInterval(timer);     // Stop the timer
                // return;                   // Exit the function
                i=0;
            }
            img.src = paths[i++]; // Sete the path to the current counter and then increase the counter
        }, 5000);
    });


</script>

<script>
    function truncateText(content, maxLength) {
        var truncated = "";
        if (content.length > maxLength) {
            truncated = content.substr(0,maxLength) + '...';
        }
        return truncated;
    }
</script>
</body>
</html>
