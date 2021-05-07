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

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $user = User::where('phone', $request->phone)->first();
        if(!$user){
            $user = new User();
            $user->name = $request->userName;
            $user->email = $request->email;
            $user->phone = $request->mobileNumber;
            $user->designation = $request->designation;
            $user->profile_img_url = $request->profileImageUrl;
            $user->district_choice = $request->districtChoices;
            $user->firesbase_token = $request->firebase_key;
            $user->save();
            return response()->json([
                'id' => $user->id,
                'message' => 'You are registered !!!',
                'success' => 'true',
            ]);
        }else {
            return response()->json([
                'id' => $user->id,
                'message' => 'User already Register',
                'success' => 'false',
            ]);
        }
    }

    public function getTokenUser(Request $request)
    {

        //        $request->validate([
//            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
//            'device_name' => 'required',
//        ]);

        $user = User::where('phone', $request->mobileNumber)->first();

        // if requested number is not in database. save it then generate token
        if(!$user){
            http_response_code(400 );
            return [
                "message" => "Something went wrong"
            ];
        }

        $token = $user->createToken($request->mobileNumber)->plainTextToken;

        return [
            "id" => $user->id,
            "userName" => $user->name,
            "email" => $user->email,
            "profileImageUrl" => $user->profile_img_url ? : "",
            "userType" => $user->user_type ? : "",
            "token" => $token,
        ];
    }

    public function verifyPhone(Request $request)
    {
        //        $request->validate([
//            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
//            'device_name' => 'required',
//        ]);

        $user = User::where('phone', $request->mobileNumber)->first();

        // if requested number is not in database. save it then generate token
        if(!$user){
            return [
                "is_present" => "no"
            ];
        }

        return [
            "is_present" => "yes"
        ];



    }

    public function logout(Request $request){
        $user = User::findOrFail($request->user_id);
        $user->tokens()->where('id', $request->tokenId)->delete();
        return response()->json([
            'id' => '0',
            'status' => 'true',
            'message' => 'Logout successful',
        ]);
    }

    public function uploadProfileImage(Request $request): array
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName=time().$file->getClientOriginalName();
            $filePath = 'enslive_object/user_content/' . $imageName;
            Storage::disk('s3')->put($filePath, file_get_contents($file));

            return [
                "url" => $imageName,
                "success" => "true",
                "message" => "Image uploaded successfully",
            ];

        } else {
            return [
                "url" => "",
                "success" => "true",
                "message" => "Image did not uploaded",
            ];
        }
    }

}
