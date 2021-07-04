@extends("admin_panel.layouts.adminapp")
@section('content')
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">User Profile</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <!-- search User things -->
                    <div class="col-md-8" style="margin-top: 25px;">

                        <form>
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="Enter phone number" id="searchPhoneNumberText">
                                </div>
                                <div class="col-auto">
                                    <button type="button" onclick="searchUser();" class="btn btn-outline-primary">Search User</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- search User things End -->

                    <div class="col-md-8" id="user_edit_details">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Edit Profile</h4>
                                <p class="card-category">Complete your profile</p>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('profile_user.update', 0) }}" method="POST">
                                    <input name="_method" type="hidden" value="PATCH">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="bmd-label-static">User Name</label>
                                                <input type="text" name="user_name" class="form-control" id="userName">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Email</label>
                                                <input type="email" name="email" class="form-control" id="email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Designation</label>
                                                <select class="form-control" name="desig" id="designation">
                                                    <option>Reporter</option>
                                                    <option>Sr. Reporter</option>
                                                    <option>District Reporter</option>
                                                    <option>Bureau Chief</option>
                                                    <option>State Reporter</option>
                                                    <option>Chief Reporter</option>
                                                    <option>Ens Media House</option>
                                                    <option>Freelancer Reporter</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Is Admin ?</label>
                                                <select class="form-control" name="permission" id="isAdminSelect">
                                                    <option>Select Permission</option>
                                                    <option>REPORTER</option>
                                                    <option>ADMIN</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4" id="user_profile_pics">
                        <div class="card card-profile">
                            <div class="card-avatar">
                                <a href="javascript:;">
                                    <img id="profileImg" class="img" src="{{asset('public/img/dummy_person.png')}}" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 id="profileDesignation" class="card-category text-gray"></h6>
                                <h4 id="profileName" class="card-title"></h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection

@section('script')
            <script>
                function searchUser() {
                    var mobileNumber = document.getElementById("searchPhoneNumberText");

                    $.ajax({
                        type: "POST",
                        url: "/api/get_user_data",
                        data: {
                            'phone_no': mobileNumber.value,
                        },
                        cache: false,
                        success: function(data) {
                            //                    $("#resultarea").text(data);
                            var jsonData = data;
                            document.getElementById("userName").value = jsonData["name"].replace(".","");
                            document.getElementById("email").value = jsonData["email"].replace(".","");
                            document.getElementById("designation").value = jsonData["designation"];
                            if (jsonData["designation"].value == "REPORTER"){
                                document.getElementById("designation").selectedIndex = "1"
                            }else if (jsonData["designation"].value == "Sr. Reporter"){
                                document.getElementById("designation").selectedIndex = "2"
                            }else if (jsonData["designation"].value == "District Reporter"){
                                document.getElementById("designation").selectedIndex = "3"
                            }else if (jsonData["designation"].value == "Bureau Chief"){
                                document.getElementById("designation").selectedIndex = "4"
                            }else if (jsonData["designation"].value == "State Reporter"){
                                document.getElementById("designation").selectedIndex = "5"
                            }else if (jsonData["designation"].value == "Chief Reporter"){
                                document.getElementById("designation").selectedIndex = "6"
                            }else if (jsonData["designation"].value == "Ens Media House"){
                                document.getElementById("designation").selectedIndex = "7"
                            }

                            if (jsonData["user_type"] === "USER") {
                                document.getElementById("isAdminSelect").selectedIndex = "1";
                            } else {
                                document.getElementById("isAdminSelect").selectedIndex = "2";
                            }

                            document.getElementById("profileImg").src = "https://d4f9k68hk754p.cloudfront.net/fit-in/300x400/enslive_object/user_content/" + jsonData["profile_img_url"];
                            document.getElementById("profileDesignation").innerHTML = jsonData["designation"];
                            document.getElementById("profileName").innerHTML = jsonData["name"];
                        }
                    });



                }

                function updateDetails() {
                    var mobileNumber = document.getElementById("searchPhoneNumberText");
                    var userName = document.getElementById("userName");
                    var email = document.getElementById("email");
                    var userType = document.getElementById("isAdminSelect");
                    var designation = document.getElementById("designation");

                    $.ajax({
                        type: "POST",
                        url: "/api/update_user_data",
                        data: {
                            'user_name' : userName.value,
                            'email' : email.value,
                            'userType' : userType.value,
                            'designation' : designation.value,
                            'phone_number': mobileNumber.value
                        },
                        cache: false,
                        success: function(data) {
                            //                    $("#resultarea").text(data);
                            var jsonData = JSON.parse(data);
                            if(jsonData["success"] === 'yes'){
                                $.notify("Updated Successfuly !!!");
                            }

                        }
                    });

                }

            </script>
@endsection
