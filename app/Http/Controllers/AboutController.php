<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use DB;

class AboutController extends Controller
{
    public function addaboutform(){
        return view('admin.about.adabfrm');
    }

    public function storeabout(Request $request){
        $svab=new About();
        $svab->about=$request->about;
        $svab->publicationaboutstatus=$request->publicationaboutstatus;
        $svab->save();
        return redirect('/add/about')->with('savabms','About Details Saved Successfully');
    }

    public function managabout(){
        //$mngabout=About::all();
        $mngabout=DB::table('abouts')->get();
        return view('admin.about.mangabout',['mngabout'=>$mngabout]);
    }

    public function dltabout($id){
        $delab=About::find($id);
        $delab->delete();
        return redirect('/manage/about')->with('delabmsg','Aboute Details Deleted Successfylly');
    }

    public function editabout($id){
        $edtabout=About::where('id',$id)->first();
        return view('admin.about.editaboutpg',['edtabout'=>$edtabout]);
    }

    public function updtabout(Request $request){
        $updtab=About::find($request->id);
        $updtab->about=$request->about;
        $updtab->publicationaboutstatus=$request->publicationaboutstatus;
        $updtab->save();

        return redirect('/manage/about')->with('updatabmsg','About Details Updated Successfully');

    }
}
