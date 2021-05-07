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

class ApprovedNewsController extends Controller
{
    function getNewsContent(){

        return DB::table('news_content')->join('users','news_content.posted_by', '=','users.name')
            ->join('count_news','news_content.id', '=','count_news.id')
            ->select(['news_content.*','users.designation','users.profile_img_url','users.user_type',
                'count_news.share_count','count_news.likes_count',
                'count_news.comments_count', 'count_news.view_count'])
            ->where('is_approved','APPROVED')
            ->orderByDesc("created_at")->paginate(15);

    }

    /*
     * getContent by id
     * */
    function getNewsContentById(Request $request){

        return DB::table('news_content')->join('users','news_content.posted_by', '=','users.name')
            ->join('count_news','news_content.id', '=','count_news.id')
            ->select(['news_content.*','users.designation','users.profile_img_url','users.user_type',
                'count_news.share_count','count_news.likes_count',
                'count_news.comments_count', 'count_news.view_count'])
            ->where('news_content.id', $request->id)->get();

    }

    /*
     * get news by news card
     * */
    function getNewsContentByNewsCard(Request $request){
        return DB::table('news_content')->join('users','news_content.posted_by', '=','users.name')
            ->join('count_news','news_content.id', '=','count_news.id')
            ->select(['news_content.*','users.designation','users.profile_img_url','users.user_type',
                'count_news.share_count','count_news.likes_count',
                'count_news.comments_count', 'count_news.view_count'])->where("edition", $request->edition)
            ->where('is_approved','APPROVED')
            ->orderByDesc("created_at")->paginate(15);
    }

    /*
     * post like count
     * */
    function postLikesCount(Request $request){
        $result = NewsCountDetails::find($request->id);
        $result->likes_count = $result->likes_count + 1;
        $result->save();

        return ["id" => $request->id, "success" => true, "message"=>"Likes Count Updated Successfully"];
    }


    /*
     *  post count
     * */

    function postShareCount(Request $request){
        $result = NewsCountDetails::find($request->id);
        $result->share_count = $result->share_count + 1;
        $result->save();

        return ["id" => $request->id, "success" => true, "message"=>"Share Count Updated Successfully"];
    }

    /*
     *  view count
     * */

    function postViewCount(Request $request){
        $result = NewsCountDetails::find($request->id);
        $result->view_count = $result->view_count + 1;
        $result->save();

        return ["id" => $request->id, "success" => true, "message"=>"View Count Updated Successfully"];
    }

    /*
     *  comment by news id
     * */
    function getCommentByNewsHash(Request $request){
        $result = Comments::where("id", $request->id)->first();
        return ["id" => $request->id, "success" => true, "total_likes_count"=>$result->news_likes];
    }

    function postCommentByNewsId(Request $request){
        $result = Likes::find($request->id);
        $result->news_likes = $result->news_likes + 1;
        $result->save();

        return ["id" => $request->id, "success" => true, "message"=>"Comment Posted Successfully"];
    }

}
