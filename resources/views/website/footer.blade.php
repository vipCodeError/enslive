@extends('website.layout.app')
@section('footers')
    <hr class="border_line">
    <div class="footer shadow-sm p-3 mb-0 bg-white rounded">
        <br>
        <div class="row d-flex justify-content-between ">
            <div class="col-12 col-sm-12 col-md-2 col-lg-2 download_at">
                <h5>Downloads</h5>
                <a href="https://play.google.com/store/apps/details?id=com.enslive"><i class="fa fa-android" aria-hidden="true"></i></a>
            </div>

            <div class="col-12 col-sm-12 col-md-2 col-lg-2 enslive_txt">
                <h5>ENS Live</h5>
            </div>

            <div class="col-12 col-sm-12 col-md-2 col-lg-2 follow_us">
                <h5>Follow us</h5>
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
                    <h4><a href="">About Us</a></h4> |
                    <h4><a href="">Privacy</a></h4> |
                    <h4><a href="">Contact Us</a></h4> |
                    <h4><a href="">Terms and Conditions</a></h4>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6" style="text-align: right">
                    <h4><a href="">Copyright@2020ENSLive</a></h4>
                </div>
            </div>
        </div>

    </div>
@endsection
