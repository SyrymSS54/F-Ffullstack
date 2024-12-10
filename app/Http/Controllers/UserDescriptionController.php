<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserDescription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserDescriptionController extends Controller
{
    public function index()
    {
        return view('personal');
    }

    public function read(UserDescription $userDescription)
    {
        $result = $userDescription::where( 'user_id',Auth::id())->first(['image','firstname','lastname','tel','email']);

        if(is_null($result))
        {
            $userDescription->user_id = Auth::id();
            $userDescription->email = Auth::user()->email;

            $userDescription->save();
            $result = $userDescription::where( 'user_id',Auth::id())->first(['image','firstname','lastname','tel','email']);
        }

        return response()->json($result);
    }

    public function update(Request $request,UserDescription $userDescription)
    {
        $validator = Validator::make($request->all(),[
            "email" => 'email|nullable',
            "firstname" => 'string|nullable',
            "image" => 'string|nullable',
            "lastname" => 'string|nullable',
            'tel' => 'string|nullable'
        ]);

        if($validator->fails()){
            return response()->json([]);
        }

        $validated = $validator->safe()->only(['email','firstname','image','lastname','tel']);

        $result = $userDescription::where( 'user_id',Auth::id())->first(['image','firstname','lastname','tel','email']);

        if(is_null($result))
        {
            $userDescription->user_id = Auth::id();
            $userDescription->email = $validated['email'];
            $userDescription->firstname = $validated['firstname'];
            $userDescription->image = $validated['image'];
            $userDescription->lastname = $validated['lastname'];
            $userDescription->tel = $validated['tel'];

            $userDescription->save();

            return response()->json(['status'=>True]);
        }

        $userDescription::where( 'user_id',Auth::id())->update(['email'=>$validated['email'],'firstname'=>$validated['firstname'],'image'=>$validated['image'],'lastname'=>$validated['lastname'],'tel'=>$validated['tel']]);
        return response()->json(['status'=>True]);
    }

    public function download_photo(Request $request,UserDescription $userDescription)
    {
        
        if($request->hasFile('image'))
        {
            $disk = Storage::build([
                'driver' => 'local',
                'root' => storage_path('app/public/personal'),
            ]);
            $photo = $request->file('image');
            $photo_name = $photo->hashName();
            $disk->put($photo_name,file_get_contents($photo));
            $userDescription::where( 'user_id',Auth::id())->update(['image'=>$photo_name]);
            return response()->json(['status'=>True]);
        }

        return response()->json(['status'=>False]);
    }
}
