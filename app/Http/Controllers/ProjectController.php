<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    function show(){
        $data['project']=Project::all();
        return view('project',$data);
    }

    function add(){
        $data = [
            'action'=>url('project/create'),
            'tombol'=>'simpan',
            'project'=>(object)[
                'name'=>'',
                'deskripsi'=>'',
                'foto'=>''
            ],
        ];
        return view ('projectform', $data);

    }
    function create (Request $req){
        Project::create([

            'name'=>$req->name,
            'deskripsi'=>$req->deskripsi,
            'foto' => $req->file('foto')->store('foto')

            // 'foto'=>$req->foto
        ]);
        return redirect('project');
    }
    function hapus($id){
        $project=Project::where('id',$id)->first();
        $project->delete();
        // Storage::delete($project->foto);
        return redirect('project');
    }

    function edit ($id) {
        $data['project']=Project::find($id);
        $data['action']= url('project/update').'/'.$data['project']->id;
        $data['tombol']='update';
        return view('projectform',$data);
    }
    function update(Request $req){

        Project::where('id',$req->id)->update([
            'name'=>$req->name,
            'deskripsi'=>$req->deskripsi,
            // 'foto' => $req->file('foto')->store('foto')
            'foto' => $req->file('foto')->store('foto')

        ]);
        return redirect('project');
    }
}
