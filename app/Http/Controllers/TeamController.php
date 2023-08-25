<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    function show(){
        // $data['team']=Team::all();
        // return view('team',$data);

        $data['team']=Team::all();
        // return view('halamanAdmin',$data);
        return view('team',$data);
    }

    function add(){
        $data = [
            'action'=>url('team/create'),
            'tombol'=>'simpan',
            'team'=>(object)[
                'nama'=>'',
                'jabatan'=>''
                // 'foto'=>''
            ],
        ];
        return view ('teamform', $data);

    }
    function create (Request $req){
        Team::create([

            'nama'=>$req->nama,
            'jabatan'=>$req->jabatan
            // 'foto' => $req->file('foto')->store('foto')

            // 'foto'=>$req->foto
        ]);
        return redirect('team');
    }
    function hapus($id){
        $team=Team::where('id',$id)->first();
        $team->delete();
        // Storage::delete($portofolio->foto);
        return redirect('team');
    }

    function edit ($id) {
        $data['team']=Team::find($id);
        $data['action']= url('team/update').'/'.$data['team']->id;
        $data['tombol']='update';
        return view('teamform',$data);
    }
    function update(Request $req){

        Team::where('id',$req->id)->update([
            'nama'=>$req->nama,
            'jabatan'=>$req->jabatan

        ]);
        return redirect('team');
    }

}
