@extends('website.layout.app')
@section('content')
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

        <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-4" style="margin-left: 0;margin-top: 2rem;background-color: #fff;">
            <div class="recomended_news">
                <div class="title_recommeded">
                    <h6>సిఫార్సు</h6>
                </div>
                 @foreach($recomendedEdition as $rEdition)
                    <div class="list_news_card">
                        <div class="news_card_list">
                            <div class="small_picture">
                              @if($rEdition->photos_vid == null || str_contains($rEdition->photos_vid, 'upload'))
                    <a href="{{route('show_web', [$rEdition->edition_slug ?? "", $rEdition->id ?? "" ])}}">
                        <a href=""><img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
                                        width="120px" height="70px"></a>

                        @else
                                <a href=""><img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x300/{{$rEdition->photos_vid}}" width="100px" height="70px"></a>
                      @endif
                            </div>

                            <div class="news_title_list">
                                <a href = "{{route('show_web', [$rEdition->edition_slug ?? "", $rEdition->id ?? "" ])}}">
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
</div>

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


@endsection
