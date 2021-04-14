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
                        <div class="card">
                            <div class="card-body">
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
                                    <table class="table table-striped table-hover table-bordered" style="width:100%"
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
                                                    <div class="btn-group dropdown">
                                                        <button
                                                            class="btn btn-primary dropdown-toggle dropdown-toggle-icon"
                                                            data-toggle="dropdown" type="button">
                                                            Actions <i class="dropdown-caret"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li style="margin: 4px;">
                                                                <button class="btn btn-warning" type="submit"><a
                                                                        href="{{route('approved_news.edit', encrypt($newsc->id))}}">Edit</a>
                                                                </button>
                                                            </li>
                                                            <li style="margin: 4px;">
                                                                <form
                                                                    action="{{route('update_status.update', [$newsc, 'newsId' => $newsc->id, 'is_approved' => 'APPROVED'])}}"
                                                                    onsubmit="return confirm('Are you want to APPROVED ?');"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <button class="btn btn-info" type="submit">CONFIRM
                                                                        APPROVED
                                                                    </button>
                                                                </form>
                                                            </li>

                                                            <li style="margin: 4px;">
                                                                <form
                                                                    action="{{route('approved_news.update', [$newsc, 'newsId' => $newsc->id, 'is_approved' => 'REJECTED'])}}"
                                                                    onsubmit="return confirm('Are you want to REJECT ?');"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <button class="btn btn-info" type="submit">REJECT
                                                                    </button>
                                                                </form>
                                                            </li>

                                                            <li style="margin: 4px;">
                                                                <form
                                                                    action="{{route('approved_news.destroy', $newsc->id)}}"
                                                                    onsubmit="return confirm('Are you want to DELETE ?');"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-info" type="submit">DELETE
                                                                    </button>
                                                                </form>
                                                            </li>

                                                            <li style="margin: 4px;">
                                                                <form
                                                                    action="{{route('approved_news.update',[$newsc, 'newsId' => $newsc->id, 'is_approved' => 'MANY MISTAKE'])}}"
                                                                    onsubmit="return confirm('Are you want to SET AS MISTAKE ?');"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <button class="btn btn-info" type="submit">MANY
                                                                        MISTAKE
                                                                    </button>
                                                                </form>
                                                            </li>

                                                            <li style="margin: 4px;">
                                                                <form
                                                                    action="{{route('approved_news.update', [$newsc, 'newsId' => $newsc->id, 'is_approved' => 'DUPLICATE'])}}"
                                                                    onsubmit="return confirm('Are you want to SET AS DUPLICATE ?');"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <button class="btn btn-info" type="submit">
                                                                        DUPLICATE
                                                                    </button>
                                                                </form>
                                                            </li>

                                                        </ul>
                                                    </div>

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
            </div>

        </div>

        <!--Modal PopUp-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="static"
             data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLabel">
                            <div id="title_news_modal"></div>
                        </h5>

                        <button type="button" class="close" id="closeBtn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body" style="margin-left:8px;margin-right:8px;">
                        <div class="row">
                            <h6>News ID :: </h6>
                            <h6 id="hash_id"></h6>
                        </div>

                        <div class="row" id="imgOrVidModal">
                            <div class="col-8">
                                <h5 id="title_img_or_vid"></h5>
                                <a id="img_or_vid_link" href=""></a>
                            </div>
                        </div>

                        <div class="row" id="district_liv_loc">
                            <div class="col-8">
                                <h3 id="district_name"></h3>
                                <h3 id="live_location"></h3>
                            </div>
                        </div>

                        <div class="row" id="md_body_cont">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="modal_close" data-dismiss="modal">Close
                        </button>
                        <button type="button" class="btn btn-warning" id="edit_modal">Edit</button>
                        <button type="button" class="btn btn-warning" id="reject_modal">Reject</button>
                        <button type="button" class="btn btn-warning" id="duplicate_modal">Duplicate</button>
                        <button type="button" class="btn btn-warning" id="many_mistake_modal">Many Mistake</button>
                        <button type="button" class="btn btn-warning" id="delete_modal">Delete</button>
                        <button type="button" class="btn btn-primary" id="confirm_modal">Confirm Approved</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
