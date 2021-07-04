@extends('admin_panel.layouts.adminapp')

@section('content')
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
            </div>
        </nav>
       @include('util/flash-message')
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <form class="form-horizontal" action="{{ route('post_news.update', $newsC->id) }}" method="POST" enctype="multipart/form-data">
                                            <input name="_method" type="hidden" value="PATCH">
                                            @csrf
                                            <div class="col-lg-8">
                                                <label class="bmd-label-floating">Upload Single or Multiple Images</label>
                                                <input id="uploadFiles" type="file" name="image" multiple="multiple" class="form-control"/>
                                            </div>

                                            <div class="col-md-12"  style="margin-top: 32px;">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">News Title</label>
                                                    <input type="text" name="news_title" class="form-control" value="{{$newsC->news_title}}" id="titleNews">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="district" value="{{$newsC->district_name}}" placeholder="Search District"
                                                           id="selectDistrict">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="sel1">Select News Categories:</label>
                                                    <select class="form-control"  name="edition" id="selectCategories">
                                                        <option>Mandal News Card</option>
                                                        <option>District News Card</option>
                                                        <option>State News Card</option>
                                                        <option>National News Card</option>
                                                        <option>World News Card</option>
                                                        <option>History News Card</option>
                                                        <option>Tourism News Card</option>
                                                        <option>Health News Card</option>
                                                        <option>Business News Card</option>
                                                        <option>ENS Special News Card</option>
                                                        <option>Video News Card</option>
                                                        <option>Crime News Card</option>
                                                        <option>Political News Card</option>
                                                        <option>Education News Card</option>
                                                        <option>Job News Card</option>
                                                        <option>Humanity News Card</option>
                                                        <option>Cinema News Card</option>
                                                        <option>Kitchen News Card</option>
                                                        <option>Sports News Card</option>
                                                        <option>Photo News Card</option>
                                                        <option>Woman Special News Card</option>
                                                        <option>Divisional News Card</option>
                                                        <option>Constituency News Card</option>
                                                        <option>Divotional News Card</option>
                                                        <option>Test Card</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="{{$newsC->liveLocation}}" name="live_location"
                                                           placeholder="Search your live location" id="pac-input">
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="sel1">What Is ?</label>
                                                    <select class="form-control" name="what_is" id="whatIs" onchange="whatIsEvent()">
                                                        <option>IMAGES</option>
                                                        <option>MULTIPLE IMAGES</option>
                                                        <option>FULL IMAGES SINGLE</option>
                                                        <option>FULL IMAGES MULTIPLE</option>
                                                        <option>YOUTUBE</option>
                                                        <option>VIDEO</option>
                                                        <option>FULL VIDEO</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12" id="youtubeTag">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Youtube Url</label>
                                                    <input type="text" name="youtube_link" value="{{$newsC->photos_vid}}" class="form-control" id="youtubeUrl">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="dropdown mr-1">
                                                    <div class="form-group">
                                                        <label for="sel1">Should Notify All ?</label>
                                                        <select class="form-control" name="should_notify" id="notifyAll">
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top: 10px; background-color: #fff; padding: 0px;margin-left: 10px">
                                                <div class="card" style="margin-left: 16px; margin-right: 16px; background-color: antiquewhite">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Write Some News Content Here</h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="col-lg-2 control-label"></label>
                                                    <textarea  id="summernote" name="news_content_data"  class="form-control quill-editor"> </textarea>

                                                </div>
                                            </div>

                                            <div class="row" style="margin-top: 32px;">
                                                <button id="postNewsBtn" type="submit" class="btn btn-primary pull-right">Post News
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        @if($newsC->what_is == "IMAGES" || $newsC->what_is == "FULL IMAGES" || $newsC->what_is == "MULTIPLES IMAGES")
                                            <img width="100%" height="250px" style="margin: 10px" id="img_box" src="https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/{{$newsC->photos_vid}}">
                                        @endif
                                        @if($newsC->what_is == "FULL VIDEOS" || $newsC->what_is == "VIDEOS" || $newsC->what_is == "YOUTUBE")
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="https://practicebuckett123.s3.ap-south-1.amazonaws.com/{{$newsC->photos_vid}}" allowfullscreen></iframe>
                                                </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

        @section('summer_note')
            <script>
                $('#summernote').summernote({
                    placeholder: 'Write something here...',
                    tabsize: 2,
                    height: 120,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
                $(document).ready(function () {
                    $(".note-editable")[0].innerText = "{!!html_entity_decode($newsC->news_content)!!}";
                });
            </script>


        @endsection

        @section('script')

            <script>
                $(document).ready(function () {
                    var whatIs = document.getElementById("whatIs");
                    if (whatIs.value === "IMAGES" || whatIs.value === "FULL IMAGES SINGLE") {
                        $("#youtubeTag").hide();
                        $("#upload_img").show();
                        $("#yVidRow").hide();
                        $("#multiple_imgs").hide();

                    } else if (whatIs.value === "FULL IMAGES MULTIPLE" || whatIs.value === "MULTIPLE IMAGES") {
                        $("#multiple_imgs").show();
                        $("#youtubeTag").hide();
                        $("#upload_img").hide();
                        $("#yVidRow").hide();
                    } else if (whatIs.value === "VIDEO" || whatIs.value === "FULL VIDEO") {
                        $("#upload_img").hide();
                        $("#yVidRow").show();
                        $("#youtubeTag").hide();
                        $("#multiple_imgs").hide();
                    } else {
                        $("#youtubeTag").show();
                        $("#upload_img").hide();
                        $("#yVidRow").show();
                        $("#multiple_imgs").hide();
                    }
                });


                function whatIsEvent() {
                    var whatIs = document.getElementById("whatIs");
                    if (whatIs.value === "IMAGES" || whatIs.value === "FULL IMAGES SINGLE") {
                        $("#youtubeTag").hide();
                        $("#upload_img").show();
                        $("#yVidRow").hide();
                        $("#multiple_imgs").hide();
                    } else if (whatIs.value === "FULL IMAGES MULTIPLE" || whatIs.value === "MULTIPLE IMAGES") {
                        $("#multiple_imgs").show();
                        $("#youtubeTag").hide();
                        $("#upload_img").hide();
                        $("#yVidRow").hide();
                    } else if (whatIs.value === "VIDEO" || whatIs.value === "FULL VIDEO") {
                        $("#upload_img").hide();
                        $("#yVidRow").show();
                        $("#upload_img").hide();
                        $("#youtubeTag").hide();
                        $("#multiple_imgs").hide();
                    } else {
                        $("#youtubeTag").show();
                        $("#upload_img").hide();
                        $("#yVidRow").show();
                        $("#multiple_imgs").hide();
                    }
                }

            </script>
            <script>
                var liveLocation = "";

                function initAutocomplete() {
                    var input = document.getElementById('pac-input');
                    var searchBox = new google.maps.places.SearchBox(input);
                    var markers = [];
                    // Listen for the event fired when the user selects a prediction and retrieve
                    // more details for that place.
                    searchBox.addListener('places_changed', function () {
                        var places = searchBox.getPlaces();
                        input.value = places[0].name;
                        liveLocation = places[0].name;

                        if (places.length == 0) {
                            return;
                        }

                    });

                }

            </script>

            <script>
                var selectDistrictT = "";

                function initAutoCompleteDistrict() {
                    var input = document.getElementById('selectDistrict');
                    var searchBox = new google.maps.places.SearchBox(input);
                    var markers = [];
                    // Listen for the event fired when the user selects a prediction and retrieve
                    // more details for that place.
                    searchBox.addListener('places_changed', function () {
                        var places = searchBox.getPlaces();
                        input.value = places[0].name;
                        selectDistrictT = places[0].name;

                        if (places.length == 0) {
                            return;
                        }

                    });

                }

                function initialize() {
                    initAutocomplete();
                    initAutoCompleteDistrict();
                }

            </script>
            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-tZ7uIHtNd0YAOkVnA7OYkKwN4_e-dlg&libraries=places&language=en&callback=initialize"
                async defer></script>

@endsection
