@extends('website.layout.app')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 root_one">
                <div class="col-12 col-lg-12">
                    @foreach($nCardData as $e_data)
                        <div class="row news_card_cat">
                            <div class="col-lg-4">
                                <img src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$e_data->photos_vid}}"
                                     width="100%" height="200px">
                            </div>
                            <div class="col-lg-8">
                                <div class="col-lg-12">
                                    <h2 class="title_n" style="font-size: 23px;"><a
                                            href="{{route('show_web',[$e_data->edition_slug ?? "", $e_data->slug ?? ""])}}">{{$e_data->news_title}}</a></h2>
                                    <h5 class="news_content_det" style="overflow: hidden;
   text-overflow: ellipsis;height: 100px">{!!html_entity_decode($e_data->news_content)!!}</h5>
                                </div>
                                <div class="row"
                                     style="display: flex; justify-content: space-between; margin-left: 16px; margin-right: 16px;">
                                    <div class="row loc_d" style="margin-left: 4px;">
                                        <i class="fa fa-map-marker" style="font-size: 20px;"></i>
                                        <h4 style="font-size: 15px;font-weight: 800;">{{$e_data->liveLocation}}</h4>
                                    </div>
                                    <h6 style="font-size: 15px;font-weight: 800;">{{$e_data->created_at}}</h6>
                                </div>
                            </div>

                        </div>

                    @endforeach

                    <div class="col-lg-12 clearfix" style="margin-top: 16px;">
                        <div class="float-left"
                        {{$nCardData->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

