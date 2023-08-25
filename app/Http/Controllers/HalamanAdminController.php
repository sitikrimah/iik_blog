<?php

namespace App\Http\Controllers;

use App\Models\Ks;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Http\Request;

class HalamanAdminController extends Controller
{
    //
    function show(){
        $data['ks'] = Ks::all();
        $data['project'] = Project::all();
        $data['team'] = Team::all();
        return view('home',$data);
    }
}
