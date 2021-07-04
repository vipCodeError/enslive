<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        Enslive
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('public/css/material-dashboard.css')}}" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('public/css/index.css')}}" rel="stylesheet"/>
    <link href="{{ asset('public/css/dashboard.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/news-content.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/tag_editor.css')}}" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.1/css/bootstrapValidator.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css">
    <link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.js" type="text/javascript" />
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.1/css/bootstrapValidator.min.css">

</head>

<body>
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="public/assets/img/sidebar-1.jpg">

        <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
                <img width="100px" height="70px" src="{{ asset('public/img/enslogo.jpg')}}"/>

            </a></div>
        <div class="sidebar-wrapper" style="display: flex;
    justify-content: space-between;
    flex-direction: column;">
            <ul class="nav">
                <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route("admin")}}">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if(auth()->user()->user_type == 'ADMIN')
                <li class="nav-item ">
                    <a class="nav-link" href="{{route("profile_user.create")}}">
                        <i class="material-icons">person</i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("add_user.index")}}">
                        <i class="material-icons">person</i>
                        <p>Add User</p>
                    </a>
                </li>
                @endif
                <li class="nav-item {{ (request()->is('post_news')) ? 'active' : '' }} ">
                    <a class="nav-link" href="{{route("post_news.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>Post News</p>
                    </a>
                </li>
                @if(auth()->user()->user_type == 'ADMIN')
                <li class="nav-item {{ (request()->is('approved_news')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route("approved_news.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>Approved User News</p>
                    </a>
                </li>
                @endif
                <li class="nav-item ">
                 <li class="nav-item ">
                    <a class="nav-link" href="{{route("poll_add.index")}}">
                        <i class="material-icons">library_books</i>
                        <p>Post Poll</p>
                    </a>
                </li>
                @if(auth()->user()->user_type == 'REPORTER')
                <li class="nav-item {{ (request()->is('review_news')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('review_news.index')}}">
                        <i class="material-icons">library_books</i>
                        <p>Review News</p>
                    </a>
                </li>
                @endif
                </ul>
                <ul class="nav" style="margin-bottom: 16px">
                <li class="nav-item">
                    <a class="nav-link" href="{{route("logout")}}">
                        <i class="material-icons">dashboard</i>
                        <p style="font-weight: bold">Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @yield('content')
    <footer class="footer">
        <div class="container-fluid">
            <div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, made with <i class="material-icons">favorite</i> by
                <a href="" target="_blank">vipCodeError</a>.
            </div>
        </div>
    </footer>
</div>
</div>

@yield('tag_editor')
@yield('summer_note')

<!--   Core JS Files   -->
<script src="{{ asset('public/js/core/jquery.min.js')}}"></script>
<script src="{{ asset('public/js/notify.js')}}"></script>
<script src="{{ asset('public/js/core/popper.min.js')}}"></script>
<script src="{{ asset('public/js/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{ asset('public/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!-- Plugin for the momentJs  -->
<script src="{{ asset('public/js/plugins/moment.min.js')}}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{ asset('public/js/plugins/sweetalert2.js')}}"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('public/js/plugins/jquery.validate.min.js')}}"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('public/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('public/js/plugins/bootstrap-selectpicker.js')}}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('public/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{ asset('public/js/plugins/jquery.dataTables.min.js')}}"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('public/js/plugins/bootstrap-tagsinput.js')}}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('public/js/plugins/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ asset('public/js/plugins/fullcalendar.min.js')}}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ asset('public/js/plugins/jquery-jvectormap.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('public/js/plugins/nouislider.min.js')}}"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('public/js/plugins/arrive.min.js')}}"></script>
<!-- Chartist JS -->
<script src="{{ asset('public/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('public/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('public/js/material-dashboard.js')}}" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->

@yield('script')

</body>

</html>
