@extends("admin_panel.layouts.adminapp")
@section('content')
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
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
    @include('util/flash-message')
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- search User things End -->
                    <div class="col-md-8" id="user_edit_details">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Poll Question</h4>
                                <p class="card-category">Enter the details of poll</p>
                            </div>
                            <div class="card-body">
                                <form form class="form-horizontal" action="{{ route('poll_add.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Questions</label>
                                                <input type="text" name="question" class="form-control" id="question">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="card card-profile">

                                                <div class="card-body">
                                                    <label class="bmd-label-static">Select the background image for Poll</label>
                                                    <input type="file" name="file" id="uploadFiles" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="bmd-label-static">First Options</label>
                                                <input type="text" name="first_option" class="form-control" id="firstOptions">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Second Options</label>
                                                <input type="text" name="second_option" class="form-control" id="secondOptions">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Third Options</label>
                                                <input type="text" name="third_option" class="form-control" id="thirdOptions">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Fourth Options</label>
                                                <input type="text" name="fourth_option" class="form-control" id="fourthOptions">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Right Choices</label>
                                                <select name="right_option" class="form-control" id="rightChoices">
                                                    <option>Select right option</option>
                                                    <option>First</option>
                                                    <option>Second</option>
                                                    <option>Third</option>
                                                    <option>Fourth</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" id="addPollBtn" class="btn btn-primary pull-right">Submit New Pollr</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
