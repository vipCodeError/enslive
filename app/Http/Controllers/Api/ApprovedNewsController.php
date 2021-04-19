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
            ->orderByDesc("created_at")->paginate(15);

    }

    /*
     * get news by news card
     * */
    function getNewsContentByNewsCard(Request $request){
        return NewsContent::where("edition", $request->edition)->orderByDesc("created_at")->paginate(15);
    }

    /*
     * like count
     * */
    function getLikesCountById(Request $request){
        $result = NewsCountDetails::where("id", $request->id)->first();
        return ["id" => $request->id, "success" => true, "total_likes_count"=>$result->news_likes];
    }

    function postLikesCount(Request $request){
        $result = NewsCountDetails::find($request->id);
        $result->news_likes = $result->news_likes + 1;
        $result->save();

        return ["id" => $request->id, "success" => true, "message"=>"News Updated Successfully"];
    }


    /*
     *  share count
     * */
    function getShareCountByNewsId(Request $request){
        $result = NewsCountDetails::where("id", $request->id)->first();
        return ["id" => $request->id, "success" => true, "total_likes_count"=>$result->news_likes];
    }

    function postShareCount(Request $request){
        $result = NewsCountDetails::find($request->id);
        $result->news_likes = $result->news_likes + 1;
        $result->save();

        return ["id" => $request->id, "success" => true, "message"=>"News Updated Successfully"];
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

        return ["id" => $request->id, "success" => true, "message"=>"News Updated Successfully"];
    }

}
