@extends("admin_panel.layouts.adminapp")

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
                <div class="collapse navbar-collapse justify-content-end">
                </div>
            </div>
        </nav>
    @include('util/flash-message')
    <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- search User things End -->
                    <div class="col-md-8" id="user_edit_details">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Add New Reporter Profile</h4>
                                <p class="card-category">Complete your profile</p>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('add_user.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6 col-lg-7">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-static">User Name</label>
                                                        <input type="text" name="user_name" class="form-control"
                                                               id="userName">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-static">User Password</label>
                                                        <input type="password" name="password" class="form-control"
                                                               id="userPass">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-static">Email</label>
                                                        <input type="email" name="email" class="form-control"
                                                               id="email">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-static">Mobile Number</label>
                                                        <input type="phone" name="mobile_number" class="form-control"
                                                               id="mobileNumber">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-static">Designation</label>
                                                        <input type="text" name="desig" class="form-control"
                                                               id="designation">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-static">District Choices</label>
                                                        <input type="text" name="search_district" id="pac-input"
                                                               placeholder="Search District" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-static">Is Admin ?</label>
                                                        <select name="is_admin_select" class="form-control"
                                                                id="isAdminSelect">
                                                            <option>Select Permission</option>
                                                            <option>REPORTER</option>
                                                            <option>ADMIN</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-3" style="margin-top: 64px;">
                                            <div class="col-md-12">
                                                <div class="card card-profile">
                                                    <div class="card-avatar">
                                                        <a href="javascript:;">
                                                            <img id="profileImg" class="img"
                                                                 src="assets/img/dummy_person.png"/>
                                                        </a>
                                                    </div>
                                                    <div class="card-body">
                                                        <input type="file" name="image" class="form-control"
                                                               id="profilePicsUpload"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" id="adduserBtn" class="btn btn-primary pull-right">Add New
                                        User
                                    </button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endsection

        @section('script')
            <script>
                $("#profileImg").hide();

                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#profileImg').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }

                $("#profilePicsUpload").change(function () {
                    readURL(this);
                    $("#profileImg").show();
                });
            </script>
@endsection
