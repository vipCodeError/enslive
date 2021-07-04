@extends("admin_panel.layouts.adminapp")

@section('content')
    <div class="main-panel" id="main_popup">
        <div id="loader"></div>
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
        <!-- End Navbar -->
        <div class="content" style="position:relative">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <!--  get data by options-->
                        <div class="row">
                            <div class="form-group col-4 ">
                                <label for="inputState">Select option to be displayed</label>
                                <select id="inputState" class="form-control">
                                    <option selected>All</option>
                                    <option value="IN_PROGRESS">IN PROGRESS</option>
                                    <option value="REJECTED">REJECTED</option>
                                    <option value="MANY_MISTAKE">MANY MISTAKE</option>
                                </select>

                            </div>

                            <div class="form-group col-4 align-self-center">
                                <div class="form-group">
                                    <label>Select Date</label>
                                    <input id="date_picker" type="date" name="bday" max="3000-12-31"
                                           min="1000-01-01" class="form-control">
                                </div>
                            </div>


                            <button type="button" id="search_btn_data" class="btn btn-warning align-self-end">
                                Search
                            </button>

                        </div>

                        <!-- table-->
                        <div class="row">
                            <table class="table table-striped table-hover table-responsive" style="width:100%"
                                   id="dtBasicExample">
                                <thead>
                                <tr>
                                    <th scope="col">News Title</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Created By</th>
                                    <th scope="col">Status</th>
                                    <th>#</th>
                                </tr>
                                </thead>
                                <tbody id="table_list_news">
                                @foreach($newsContent as $newsc)
                                    <tr>
                                        <td>{{$newsc->news_title}}</td>
                                        <td>{{$newsc->created_at}}</td>
                                        <td>{{$newsc->posted_by}}</td>
                                        @if($newsc->is_approved == "APPROVED")
                                            <td style="color: #1b5e20; font-weight: bold">{{$newsc->is_approved}}</td>
                                        @else
                                            <td style="color: #0b3251">{{$newsc->is_approved}}</td>
                                        @endif
                                        <td>
                                        @if($newsc->is_approved == "APPROVED")
                                                <h4>Edit</h4>
                                        @else
                                                <button class="btn btn-warning" type="submit"><a
                                                        href="{{route('approved_news.edit', encrypt($newsc->id))}}">Edit</a>
                                                </button>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="col-lg-12 clearfix">
                            <div class="float-left"
                            {{ $newsContent->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
