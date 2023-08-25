<?php

namespace App\Http\Controllers;

use App\Models\Ks;
use Illuminate\Http\Request;

class KsController extends Controller
{
    //
    function show(){
        $data['ks'] = Ks::all();
        return view('ks',$data);
    }
    function add(){
        $data = [
            'action'=>url('ks/create'),
            'tombol'=>'simpan',
            'contact'=>(object)[
                'nama'=>'',
                'email'=>'',
                'No_telp'=>'',
                'pesan'=>''
            ]
        ];
        return view ('ksform', $data);

    }

    function create (Request $req){
        Ks::create([
            'nama'=>$req->nama,
            'email'=>$req->email,
            'No_telp'=>$req->No_telp,
            'pesan'=>$req->pesan
        ]);
        return redirect('/');
    }
    // function hapus($id){
    //     $contact = Ks::where('id',$id)->first();
    //     $contact->delete();
    //     // Storage::delete($portofolio->foto);
    //     return redirect('ks');
    // }
    // function edit ($id){
    //     $data['ks']=Ks::find($id);
    //     $data['action']=url('ks/update').'/'.$data['ks']->id;
    //     $data['tombol']='update';
    //     return view('ksform',$data);
    // }
    // function update(Request $req){
    //     Ks::where('id',$req->id)->update([
    //         'nama'=>$req->nama,
    //         'email'=>$req->email,
    //         'No_telp'=>$req->No_telp,
    //         'pesan'=>$req->pesan
    //     ]);
    //     return redirect('ks');
    // }
}
