<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsContent;

class ApprovedNewsController extends Controller
{
    function getNewsContent(){
        return NewsContent::orderByDesc("created_at")->paginate(15);

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
    function getLikesCountByNewsHash(Request $request){

    }

    function postLikesCount(){

    }


    /*
     *  share count
     * */
    function getShareCountByNewsHash(Request $request){

    }

    function postShareCount(){

    }

    /*
     *  comment by news id
     * */
    function getCommentByNewsHash(Request $request){

    }

    function postCommentByNewsId(){

    }

}
