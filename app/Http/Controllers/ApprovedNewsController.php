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

}
