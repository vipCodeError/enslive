<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Likes;
use App\Models\NewsCountDetails;
use App\Models\Share;
use Illuminate\Http\Request;
use App\Models\NewsContent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostNewsController extends Controller
{
    public function postNews(Request $request){

       // $imgUri = $this->upload_post_image($request);
        $newsContent = new NewsContent();
        $newsContent->district_name = $request->districtName;
        $newsContent->edition = $request->mEdition;
        $newsContent->is_approved = "NOT APPROVED";
        $newsContent->liveLocation = $request->liveLocation;
        $newsContent->news_content = $request->newsContent;
        $newsContent->news_title = $request->newsTitle;
        $newsContent->photos_vid = $request->photosVid;
        $newsContent->posted_by = auth()->user()->name;
        $newsContent->should_notify = $request->should_notify;
        $newsContent->what_is = $request->whatIs;
        $newsContent->save();

        $newsCountDetails = new NewsCountDetails();
        $newsCountDetails ->id = $newsContent->id;
        $newsCountDetails->save();

        return ["id" => $newsContent->id,
            "success" => "true",
            "message" => "News Posted Successfully"];
    }

    public function upload_post_image(Request $request): array
    {
//        $request->validate([
//            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048'
//        ]);

        $images=array();
        if($request->hasFile('image')){
            $files = $request->file('image');
            foreach($files as $file){

                $extension = $file->getClientOriginalExtension();
                $imageName = time().rand(1,100).'.'.$extension;
                $filePath = 'enslive_object/news_content/'.$imageName;
                Storage::disk('s3')->put($filePath,  file_get_contents($file));
                $images[]=$filePath;
            }

            if(sizeof($images) == 0){
                $extension = $files->getClientOriginalExtension();
                $imageName = time().rand(1,100).'.'.$extension;
                $filePath = 'enslive_object/news_content/'.$imageName;
                Storage::disk('s3')->put($filePath,  file_get_contents($files));

                return ["url" => $filePath,
                    "message" => "Successfully Uploaded !!!",
                    "success" => "true"];
            }

            return ["url" => implode("|",$images),
                "message" => "Successfully Uploaded !!!",
                "success" => "true"];

        }else {


            return ["url" => "",
                "message" => "Something Went Wrong",
                "success" => "false"];
        }
    }
}
