<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsContent;

class ApprovedNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsContent = NewsContent::orderByDesc("created_at")->paginate(10);
        return view('admin_panel.approvednews.index', compact('newsContent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newsC = NewsContent::where("id", decrypt($id))->first();
        $newsC->news_content = str_replace( "\n","",$newsC->news_content);
        return view('admin_panel.approvednews.edit', compact('newsC'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $newsContent = NewsContent::find($request->newsId);
        $newsContent->is_approved = $request->is_approved;
        $newsContent->save();

		//if($request->should_notify  == "Yes"){
          if($request->is_approved == "APPROVED"){
              $this->sendFCM($newsContent->what_is,
                  $newsContent->news_content,
                  $newsContent->district_name,
                  $newsContent->edition,
                  $newsContent->liveLocation,
                  $newsContent->posted_by,
                  $newsContent->news_title,
                  $newsContent->photos_vid);
          }
       // }
        

        return redirect()->route("approved_news.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsContent = NewsContent::find($id);
        $newsContent->delete();

        // $response = ["id" => $request->news_hash, "success" => true, "message" => "Successfully deleted !!!"];
        return redirect()->route("approved_news.index");
    }

    function sendFCM($contentType,$contentNews,
                     $selectDistrict,
                     $newsCategories,
                     $liveLocation,
                     $postedBy,
                     $title,
                     $photos_url
    ) {
        $url = 'https://fcm.googleapis.com/fcm/send';
        $photo_u = $photos_url ? : "";
        $fields = array (
             'to' => "/topics/all",
          // 'to' => "fiImwIXyTxqdZm1YoJUGnI:APA91bG7pDukqB-083EW9LUNyITs0kU8REghI1B3U2damre0HAP6UFnSelsVoa-HGut4QcvR3vO65azM1QYvQNkd8EC_WnXK3kA_4VgYL15GzOR47z9JugxQpNLuVg-hBB8mqIx0Xur-",
            'data' => array (
                'contentType' => $contentType ? : "",
                'contentNews' => $contentNews ? : "",
                'selectDistrict' => $selectDistrict ? : "",
                'newsCategories' => $newsCategories ? : "",
                'liveLocation' => $liveLocation ? : "",
                'postedBy' => $postedBy ? : "",
                'title_t' => $title ? : "",
                'image_i' => "https://d4f9k68hk754p.cloudfront.net/fit-in/712x712/".$photo_u
            )
        );
        $fields = json_encode ( $fields );
        $headers = array (
            'Authorization: key=' . "AAAAPygabOo:APA91bG9x19mXol2EWCHvk9rxZfyFO6H_t07zp3LW8Xvxb3bLznCdB79-KHNwQeCEkeTHwdLf4-qVnIGrRnONuWbTf4AstWX0Firq2tB6D-JUgWcUh3_X0PCTOyusc0wOD0WquiXtex5",
            'Content-Type: application/json'
        );

        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, true );
        curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

        $result = curl_exec ( $ch );
        curl_close ( $ch );
    }
}
