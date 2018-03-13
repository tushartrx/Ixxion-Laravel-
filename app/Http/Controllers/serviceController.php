<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;


class serviceController extends Controller
{
    public function addservcfrm(){
        return view('admin.service.addsrvcfrm');
    }

    public function storeservice(Request $request){
        $svesrv=new Service();
        $svesrv->service=$request->service;
        $svesrv->publicationservicestatus=$request->publicationservicestatus;
        $svesrv->save();
        return redirect('/add/service')->with('saveservms','Services Details Saved Successfully');
    }


    public function mangservc(){
        $mngsrc=Service::all();
        return view('admin.service.mangserv',['mngsrc'=>$mngsrc]);
    }

    public function deletsrv($id){
        $deltsrv=Service::find($id);
        $deltsrv->delete();
        return redirect('/manage/service')->with('sercdltmrsg','Services Details Deleted Successfully');
    }

    public function edtesrv($id){
        $edetsrv=Service::where('id',$id)->first();
        return view('admin.service.edetservpg',['edetsrv'=>$edetsrv]);
    }


    public function updtsrvcdtls(Request $request){
        $updtsrc=Service::find($request->id);
        $updtsrc->service=$request->service;
        $updtsrc->publicationservicestatus=$request->publicationservicestatus;
        $updtsrc->save();

        return redirect('/manage/service')->with('updtsrvmsg','Services Details Updtated Successfully');
    }
}
