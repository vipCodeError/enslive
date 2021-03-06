<?php

namespace App\Http\Controllers;

use App\Models\NewsContent;
use App\Models\NewsCountDetails;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        $newsContent->news_content = $request->news_content_data;
        $newsContent->news_hash = $request->news_hash;
        $newsContent->news_title = $request->news_title;

        if ($request->what_is == "YOUTUBE"){
            $newsContent->photos_vid = $request->youtube_link;
        }else {
            $imgUri = $this->upload_post_image($request);
            $newsContent->photos_vid = $imgUri;
        }

        $newsContent->posted_by = auth()->user()->name;
        $newsContent->should_notify = $request->should_notify;
        $newsContent->what_is = $request->what_is;
        $newsContent->save();

        $newsCountDetails = new NewsCountDetails();
        $newsCountDetails->id = $newsContent->id;
        $newsCountDetails->save();

        return redirect()->route("post_news.index")->with('success','News created successfully!');
    }

    function update(Request $request, $id){
        $newsContent = NewsContent::where("id", $id)->first();

        $newsContent->district_name = $request->district;
        $newsContent->edition = $request->edition;
        $newsContent->is_approved = "NOT APPROVED";
        $newsContent->liveLocation = $request->live_location;
        if ($request->news_content_data != ""){
            $newsContent->news_content = $request->news_content_data;
        }
        $newsContent->news_hash = $request->news_hash;
        $newsContent->news_title = $request->news_title;

        if ($request->what_is == "YOUTUBE"){
            $newsContent->photos_vid = $request->youtube_link;
        }else {
            if($request->hasFile('image')) {

                $imgUri = $this->upload_post_image($request);

                $newsContent->photos_vid = $imgUri;
            }
        }

        $newsContent->posted_by = auth()->user()->name;
        $newsContent->should_notify = $request->should_notify;
        $newsContent->what_is = $request->what_is;
        $newsContent->save();

        return redirect()->route("post_news.index")->with('success','News Updated successfully!');
    }

    function edit(Request $request){
        $newsContent = NewsContent::where("news_hash", $request->news_hash)->find();
        return view('admin_panel.postnews.index', compact('newsContent'));
    }

    function destroy(Request $request){

    }

    public function upload_post_image(Request $request): string
    {
//        $request->validate([
//            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048'
//        ]);

        $images=array();
        if($request->hasFile('image')){
            $files = $request->file('image');

            foreach($files as $file){
                // echo $file;
                $extension = $file->getClientOriginalExtension();
                $imageName = time().rand(1,100).'.'.$extension;
                $filePath = 'enslive_object/news_content/.'.$imageName;
                Storage::disk('s3')->put($filePath,  file_get_contents($file));
                $images[]=$filePath;
            }

            if(sizeof($images) == 0){
                $extension = $files->getClientOriginalExtension();
                $imageName = time().rand(1,100).'.'.$extension;
                $filePath = 'enslive_object/news_content/.'.$imageName;
                Storage::disk('s3')->put($filePath,  file_get_contents($files));

                return $filePath;
            }

            return implode("|",$images);
        }else {


            return "";
        }
    }

}
