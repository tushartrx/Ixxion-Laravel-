<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\portImage;
use DB;

class PortfolioController extends Controller
{
    public function addfomr(){
        return view('admin.prot.addfrm');
    }

    public function stroeImageData(Request $request){

        $image=$request->file('pimg');
        $name=$image->getClientOriginalName();
        $uploadPath='public/portimg/';
        $image->move($uploadPath,$name);
        $imageUrl=$uploadPath.$name;
        $this->saveimage($request,$imageUrl);
        return redirect('/add/prot/Image')->with('svnsg','Image Saved Successfully');
    }

    protected function saveimage( $request,$imageUrl){
        $img=new portImage();
        $img->title=$request->title;
        $img->dscritn=$request->dscritn;
        $img->pimg=$imageUrl;
        $img->pubStats=$request->pubStats;
        $img->save();

    }


    public function ManagePrtImg(){
        $mprtIm=DB::table('port_images')->get();
        return view('admin.prot.mngprtim',['mprtIm'=>$mprtIm]);
    }


    public function dddt($id){
        $dttttt=portImage::find($id);
        $dttttt->delete();
        return redirect('/manage/port/img')->with('dttttttms','Portfolio Details Deleted Successfully');
    }


    public function editportdeltd($id){
        $editportdetls=portImage::where('id',$id)->first();
        return view('admin.prot.editportdets',['editportdetls'=>$editportdetls]);
    }


    public function updtportimgdetls(Request $request){
        $imageUrl=$this->imgexit($request);
        $upprtdetsa=portImage::find($request->id);

        $upprtdetsa->title=$request->title;
        $upprtdetsa->dscritn=$request->dscritn;
        $upprtdetsa->pimg=$imageUrl;
        $upprtdetsa->pubStats=$request->pubStats;

        $upprtdetsa->save();

        return redirect('/manage/port/img')->with('updtedprtdetlsimg','Client Details Updated Successfully');

//        echo $imageUrl;
//        exit();

    }

    private function imgexit($request){
        $clintimg=portImage::where('id',$request->id)->first();
        $climg=$request->file('pimg');
        if($climg){
            $oldimg=$clintimg->pimg;
            unlink($oldimg);
            $name=$climg->getClientOriginalName();
            $uploadPath='public/portimg/';
            $climg->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
        }else{
            $imageUrl=$clintimg->pimg;
        }
        return $imageUrl;
    }




}
