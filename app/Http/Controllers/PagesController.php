<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Education;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    //
    public function index(){
        $user=User::first();
        $careers= Career::all();
        $educations=Education::all();
        $skills=Skill::all();
        $projects=Project::all();
        return view('welcome',compact('user','careers','educations', 'skills','projects'));
    }

    public function getDownload()
    {
        $user=User::select('name','cv')->first();
        $url= $user->cv;
        $url_array=explode('/',$url);
        $file_name=(end($url_array));
        $headers = array(
                'Content-Type: application/pdf',
                );

        return response()->download(public_path(). '/storage/cv/'.$file_name, $user->name.'_resume.pdf', $headers);

    }
}
