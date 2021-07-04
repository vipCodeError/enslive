<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Likes;
use App\Models\NewsCountDetails;
use App\Models\Share;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\NewsContent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AddUserController extends Controller
{
    public function getUserData(Request  $request){
        $user_data = User::where('phone', '=', $request->phone_no)->first();
        return $user_data;
    }

    public function updateUserData(Request $request){

        $user = User::where('name', '=', $request->user_name)->first();
        $user->email = $request->email;
        $user->user_type = $request->userType;
        $user->designation = $request->designation;
        $user->phone = $request->phone_number;
        $user->save();

        return ["success" => "Updated Successfully"];

    }
}
