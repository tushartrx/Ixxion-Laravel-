<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class clintController extends Controller
{
    public function index(){
        return view('admin.client.addclientfrm');
    }

    public function storeclientdetails(Request $request){
        $image=$request->file('clientimg');
        $name=$image->getClientOriginalName();
        $uploadPath='public/clientImage/';
        $image->move($uploadPath,$name);
        $imageUrl=$uploadPath.$name;
        $this->saveimage($request,$imageUrl);
        return redirect('/add/clint')->with('saveclientdetails','Client Details Saved Successfully');
    }

    protected function saveimage( $request,$imageUrl){
        $svclient=new Client();

        $svclient->clientimg=$imageUrl;
        $svclient->publicationclientstatus=$request->publicationclientstatus;
        $svclient->save();
    }


    public function managclientdetails(){
        $mangclient=Client::all();
        return view('admin.client.mangclientpg',['mangclient'=>$mangclient]);
    }


    public function deleteclientdetails($id){
        $deleclin=Client::find($id);
        $deleclin->delete();
        return redirect('/manage/clint')->with('deletclntmsg','Client Details Deleted Successfully');
    }


    public function editclinteditails($id){
        $edtclintstls=Client::where('id',$id)->first();
        return view('admin.client.editclntpg',['edtclintstls'=>$edtclintstls]);
    }

    public function updateclientdetais(Request $request){
        $imageUrl=$this->imgexit($request);
        $upcl=Client::find($request->id);
        $upcl->clientimg=$imageUrl;
        $upcl->publicationclientstatus=$request->publicationclientstatus;
        $upcl->save();

        return redirect('/manage/clint')->with('uldtclntmsg','Client Details Updated Successfully');

//        echo $imageUrl;
//        exit();

    }

    private function imgexit($request){
            $clintimg=Client::where('id',$request->id)->first();
            $climg=$request->file('clientimg');
            if($climg){
                $oldimg=$clintimg->clientimg;
                unlink($oldimg);
                $name=$climg->getClientOriginalName();
                $uploadPath='public/clientImage/';
                $climg->move($uploadPath,$name);
                $imageUrl=$uploadPath.$name;
            }else{
                $imageUrl=$clintimg->clientimg;
            }
            return $imageUrl;


    }
}
