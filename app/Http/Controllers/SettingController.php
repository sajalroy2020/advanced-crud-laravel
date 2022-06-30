<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        return view('setting');
    }

    public function save(Request $request){
        $id=$request->id;
        if(isset($id)){
            $data=Setting::findorfail($id);
            $data->name=$request->name;
            $data->email=$request->email;
            $data->number=$request->number;
            $data->update();
            return redirect()->route('list.setting');
        }else{
            Setting::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'number'=>$request->number,
            ]);

            return redirect()->route('setting');
        }
        
    }

    public function list(){
        $data['setting']=Setting::get();
        return view('list',$data);
    }

    public function delete($id){
        Setting::where('id',$id)->delete();
        return back();
    }

    public function edit($id){
        $data['edit']= Setting::findorfail($id);
        return view('setting', $data);
    }
}
