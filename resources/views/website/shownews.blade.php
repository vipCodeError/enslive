
<!doctype html>
<html lang="en">

<head>

        <link rel="canonical" href="">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="content-language" content="te">

        <meta property="fb:app_id" content="189091451656210">
        <meta property="og:site_name" content="EnsLive">

        <meta property="og:title" content="{{$eData->news_title}}">
        <meta property="og:description" content="{{$eData->news_content}}">
        <meta property="og:image" content="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$eData->photos_vid}}">
        <meta property="og:url" content="">
        <meta property="og:image:width" content="400">
        <meta property="og:image:height" content="300">
        <meta property="og:image:alt" content="">

        <meta name="twitter:title" content="{{$eData->news_title}}">
        <meta name="twitter:site" content="https://enslive.net">
        <meta name="twitter:creator" content="@ensnews">
        <meta name="twitter:description" content="{{$eData->news_content}}">
        <meta name="twitter:image" content="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$eData->photos_vid}}">
        <meta name="twitter:card" content="summary_large_image">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('css/web_css/index.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300&display=swap" rel="stylesheet">
        <script src="https://use.fontawesome.com/487757727e.js"></script>
        <script src="{{'js/moment.js'}}"></script>
        <title>{{$eData->news_title}}</title>

</head>

<body>

<div class="container" >
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
                            <a class="nav-link" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Mandal">Mandal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=District">District</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=State">State</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=National">National</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=World">World</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                More
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Histroy">History</a>
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Tourism">Tourism</a>
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Health">Health</a>
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Business">Business</a>
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=ENS">ENS</a>
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Video">Video</a>
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Crime">Crime</a>
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Political">Political</a>
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Education">Education</a>
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Job">Job</a>
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Humanity">Humanity</a>
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Cinema">Cinema</a>
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Kitchen">Kitchen</a>
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Sports">Sports</a>
                                <a class="dropdown-item" href="https://enslive.net/NewsLFKAF/catsdlp.php?newsC=Photos">Photos</a>
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

<!-- Latest News   -->
<div class="container" style="padding-left: 31px;padding-right: 15px;">
    <div class ="row">
        <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-8" style="margin-top: 2rem; margin-left: 0px;background-color: #fff;">

            <div class="newsTitleBig">
                <h6>{{$eData->news_title}}</h6>
            </div>
            <hr class="border_line">

            <div class="big_img_news">
                @if(str_contains($eData->photos_vid, 'mp4'))
                    <div class="embed-responsive embed-responsive-16by9 video_you">
                        <iframe class="video_you"  src=""></iframe>
                    </div>
                @else
                    <a class="only_images" href="">
                        <img src="https://d4f9k68hk754p.cloudfront.net/fit-in/712x712/{{$eData->photos_vid}}">
                    </a>
                @endif



            </div>

            <div class="ads_ggle">

            </div>

            <div class="news_reference  col-12 col-sm-12 col-md-12 col-lg-12">
                <hr class="border_line">
                <div class="row f_row">
                    <div class="profile_journalist col-12 col-sm-6 col-md-5 col-lg-4">
                        <img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x300/enslive_object/user_content/{{$eData->profile_img_url}}" class="rounded-circle" width=60px height="55px">
                        <div class="col-12 col-md-12 col-lg-12">
                            <h6 class="by_whom">{{$eData->name}}</h6>
                            <i style="margin-left:16px" class="fa fa-eye"></i> <span>{{$eData->view_count}}</span>
                        </div>

                    </div>

                    <div class="l_row col-12 col-sm-6 col-md-5 col-lg-4">
                        <h6 class="location">{{$eData->liveLocation}}</h6>
                        <h6 class="time_posted">{{$eData->created_at}}</h6>

                    </div>

                </div>
                <hr class="border_line">

            </div>


            <div class="newsContentBig">
                    {!!html_entity_decode($eData->news_content)!!}
            </div>

            <div class="col-5 col-sm-5 col-md-4 col-lg-4 share_this_content">
                <h7>Share On : </h7>
                <a onclick="openFacebookShare()"><i class="fa fa-facebook" aria-hidden="true"></i></a>|
                <a onclick="openTwitterShare()"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>


        </div>

        <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-4" style="
    margin-left: 0;
    margin-top: 2rem;
    background-color: #fff;
">


            <div class="recomended_news">
                <div class="title_recommeded">
                    <h6>సిఫార్సు</h6>
                </div>
                @foreach($recomendedEdition as $rEdition)
                    <div class="list_news_card">
                        <div class="news_card_list">
                            <div class="small_picture">
                                <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x300/{{$rEdition->photos_vid}}" width="100px" height="70px"></a>
                            </div>

                            <div class="news_title_list">
                                <a href = "{{route('show_web', $rEdition->id)}}">
                                    <h6>{{$rEdition->news_title}}</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="ads_space">

            </div>

        </div>

    </div>

    <hr class="border_line">

    <div class="footer shadow-sm p-3 mb-0 bg-white rounded" style="margin-left: -14px;">
        <br>
        <div class="row d-flex justify-content-between ">
            <div class="col-4 col-sm-4 col-md-2 col-lg-2 download_at">
                <h7>Downloads</h7>
                <a href=""><i class="fa fa-android" aria-hidden="true"></i></a>
            </div>

            <div class="col-6 col-sm-6 col-md-2 col-lg-2 follow_us">
                <h7>Follow us</h7>
                <a href="https://www.facebook.com/enslive.net"><i class="fa fa-facebook" aria-hidden="true"></i></a>|
                <a href="https://twitter.com/balabhaannu"><i class="fa fa-twitter" aria-hidden="true"></i></a>|
                <a href="https://www.linkedin.com/in/ens-live-280494145/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>|
                <a href="https://www.instagram.com/ens_balu/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>

        <hr class="footer_line">

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 footer_notem mt-5">

        </div>



        <div class="col-12 col-sm-12 col-md-12 col-lg-12 owner_details_link">
            <div class="row d-flex justify-content-between">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                    <h8><a href="">About Us</a></h8> |
                    <h8><a href="">Privacy</a></h8> |
                    <h8><a href="">Contact Us</a></h8> |
                    <h8><a href="">Terms and Conditions</a></h8>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6" style="text-align: right">
                    <h8><a href="">Copyright@2020ENSLive</a></h8>
                </div>
            </div>
        </div>

    </div>
</div>

</div>


<script>
    window.onscroll = function() {
        myFunction()
    };

    var navbar = document.getElementById("nnav");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
            $(".follow_us_nav").show();
        } else {
            navbar.classList.remove("sticky");
            $(".follow_us_nav").hide();
        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<script>

    $(document).ready(function(){
        document.getElementsByClassName("today_date")[0].querySelector("p").textContent = moment().format('LLLL');
    });
</script>


<script>

    function openFacebookShare(){
        u=location.href;
        t=document.getElementsByClassName("newsTitleBig")[0].textContent;;
        window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u));

        return false;
    }

    function openTwitterShare(){
        u=location.href;
        t=document.getElementsByClassName("newsTitleBig")[0].textContent;;
        window.open("https://twitter.com/intent/tweet?&url=" + u.trim());
        return false;
    }
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
<script>
    $(document).ready(function(){
        var paths =
            [ "https://practicebuckett123.s3.ap-south-1.amazonaws.com/ca10b4e1-9d44-4110-8915-81da292ab3ed.jpeg",
                "https://practicebuckett123.s3.ap-south-1.amazonaws.com/7eefb065-0c34-4f6c-8677-edd27b437dc7.jpeg",
                "https://practicebuckett123.s3.ap-south-1.amazonaws.com/4d120e9f-d5c3-4240-8245-8c8a752625e7.jpeg"];

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



</body></html>
