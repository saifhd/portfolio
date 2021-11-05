<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Settings\SettingsRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    //

    public function index(){

        $settings=User::first();
        // dd($settings);
        return view('admin.settings.edit',compact('settings'));

    }

    public function update(SettingsRequest $request,$id){
        $user=User::findOrFail($id);
        $user->update([
            'name'=>$request->name,
            'email' => $request->email,
            'description' => $request->description,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'mobile' => $request->mobile,
            'address_line_1' => $request->address_line_1,
            'address_line_2' => $request->address_line_2,
            'about' => $request->about,
            'github'=> $request->github,
            'bitbucket' => $request->bitbucket,
        ]);
        if($request->has('cv')){
            $cv=$request->file('cv')->store('Cv','public');
            $cv_path=config('app.url').'/storage/'.$cv;
            $user->update([
                'cv'=>$cv_path
            ]);
        }
        if ($request->has('avatar')) {
            $avatar = $request->file('avatar')->store('avatars', 'public');
            $avatar_path = config('app.url') . '/storage/' . $avatar;
            $user->update([
                'avatar' => $avatar_path
            ]);
        }
        return redirect()->back()->with('success','Settings Updated');
    }
}
