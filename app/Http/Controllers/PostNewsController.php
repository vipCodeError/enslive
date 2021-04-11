<?php

namespace App\Http\Controllers;

use App\Models\NewsContent;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Controllers\BaseController;

class PostNewsController extends BaseController
{
    function index(){
        return view('admin_panel.postnews.create');
    }

    function show(){

    }

    function store(Request $request){
        $newsContent = new NewsContent();
        $newsContent->district_name = $request->district;
        $newsContent->edition = $request->edition;
        $newsContent->is_approved = "NOT APPROVED";
        $newsContent->liveLocation = $request->live_location;
        $newsContent->long_content = $request->long_content;
        $newsContent->news_content = $request->news_content_data;
        $newsContent->news_hash = $request->news_hash;
        $newsContent->news_title = $request->news_title;
        $newsContent->photos_vid = $request->photos_vid;
        $newsContent->posted_by = $request->posted_by;
        $newsContent->should_notify = $request->should_notify;
        $newsContent->what_is = $request->what_is;
        $newsContent->save();

        return redirect()->route("post_news.index");
    }

    function update(Request $request){
        $newsContent = NewsContent::where("news_hash", $request->news_hash)->first();
        $newsContent->district_name = $request->district;
        $newsContent->edition = $request->edition;
        $newsContent->is_approved = $request->is_approved;
        $newsContent->live_location = $request->live_location;
        $newsContent->long_content = $request->long_content;
        $newsContent->news_content = $request->news_content;
        $newsContent->news_hash = $request->news_hash;
        $newsContent->news_title = $request->news_title;
        $newsContent->photos_vid = $request->photos_vid;
        $newsContent->posted_by = $request->posted_by;
        $newsContent->should_notify = $request->should_notify;
        $newsContent->what_is = $request->what_is;
        $newsContent->save();

        return redirect()->route("post_news.index");
    }

    function edit(Request $request){
        $newsContent = NewsContent::where("news_hash", $request->news_hash)->find();
        return view('admin_panel.postnews.index', compact('newsContent'));
    }

    function destroy(Request $request){

    }
}
