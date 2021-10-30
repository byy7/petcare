<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class AdminController extends Controller
{
    public function view(){
        $data= DB::table('users') ->paginate(5);
        return view('admin',['admin'=>$data]);
    }

    public function tampil($id){
        $show = DB::table('users')->where('id',$id)->get();
        return view('show',['show'=>$show]);
    }

    public function edit($id){
        $dt = DB::table('users')->where('id',$id)->get();
        return view ('edit',['edit'=>$dt]);
    }

    public function update(Request $request){
        DB::table('users')->where('id',$request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
            // 'role'=>$request->role,
        return redirect('admin');
    }

    public function hapus($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect('admin');
    }

}
