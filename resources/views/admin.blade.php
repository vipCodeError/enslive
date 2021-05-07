@extends("admin_panel.layouts.adminapp")

@section('content')
    <div class="main-panel" style="margin-top:25px;font-family: monospace;">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
            </div>
        </nav>

        <!--   Cards         -->
        <div class="col-12 col-sm-12" style="margin-top:35px;">
            <div class="row" id="flex_things">
                <div class="col-12 col-sm-7" id="card_details">
                    <div class="row" id="first_row_flex">
                        <div id="totalpost">
                            <h4 id="title_card">Total Post</h4>
                            <h6 id="totalpostcount">{{$totalPost}}</h6>
                        </div>

                        <div id="totalpost">
                            <h4 id="title_card">Total Appr. Post</h4>
                            <h6 id="totalapprcount">{{$totalApproved}}</h6>
                        </div>

                        <div id="totalpost">
                            <h4 id="title_card">Total Rej. Post</h4>
                            <h6 id="totalrejtcount">{{$totalRejected}}</h6>
                        </div>
                    </div>

                    <div class="row" id="first_row_flex">
                        <div id="totalpost">
                            <h4 id="title_card">Total Dupl. Post</h4>
                            <h6 id="totalduplcount">{{$totalDuplicate}}</h6>
                        </div>

                        <div id="totalpost">
                            <h4 id="title_card">Total Video Post</h4>
                            <h6 id="totalvidcount">{{$totalVideo}}</h6>
                        </div>

                        <div id="totalpost">
                            <h4 id="title_card">Total Pend. Post</h4>
                            <h6 id="totalpendcount">{{$totalPending}}</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-4" id="profile_card_details">
                    <div class="row">
                        <div class="col-4 col-sm-4">
                            <img id="profile_pics" class="rounded-circle" width="100px" height="80px" src="{{$user->profile_img_url}}" />
                        </div>

                        <div class="vl"></div>

                        <div class="col-6 col-sm-6" id="profile_det">
                            <h6 id="user_name">{{$user->name}}</h6>
                            <h6 id="designation">{{$user->designation}}</h6>
                            <h4 id="joined_label">Joined At</h4>
                            <h6 id="joined_date">{{$user->created_at}}</h6>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">


                    <h5 id="recent_acti_title">Recent Activity</h5>
                    <table id="recent_table" class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Posted Time</th>
                        </tr>
                        </thead>
                        <tbody >
                            @foreach($newsContent as $nContent)
                                <tr>
                                    <td>{{$nContent->news_title}}</td>
                                    @if($nContent->is_approved == "APPROVED")
                                        <td style="color: white; background-color: green">{{$nContent->is_approved}}</td>
                                    @else
                                        <td style="color: gray; background-color: green">{{$nContent->is_approved}}</td>
                                    @endif
                                    <td>{{$nContent->created_at}}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
