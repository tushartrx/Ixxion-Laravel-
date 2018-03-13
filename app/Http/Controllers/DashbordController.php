<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dashbord;
use DB;

class DashbordController extends Controller
{
    public function index(){
        return view('admin.pages.welcome');
    }

    public function AboutAdddPage(){
        return view('admin.about.addaboutpg');
    }

    public function saveavoutt(Request $request){

        $this->validate($request, [
            'description' => 'required',
            'publicationStatus' => 'required',
        ]);

        $addab=new Dashbord();

        $addab->description=$request->description;
        $addab->publicationStatus=$request->publicationStatus;
        $addab->save();
        return redirect('/add/about')->with('message','Data Saved Successfully');


    }

    public function Aboutmanage(){
        $aboutall = Dashbord::all();
        return view('admin.about.managaabout',['aboutall'=>$aboutall]);
    }

    public function deleteabout($id){
        //DB::table('Dashbords')->delete($id);
        $aboutall = Dashbord::find($id);
        $aboutall->Delete();
        return redirect('/manage')->with('mess','Data Delete Successfully');
        //return view('admin.about.managaabout');

    }

    public function EditPage($id){
      // $cy=Dashbord::where('id',$id)->frist();
        return view('admin.about.editpag',['contact'=>$contact]);
    }

    public function updatedata(Request $request){

//$ct=catgory::where('id',$request->id);
//        $addab->description=$request->description;
//        $addab->publicationStatus=$request->publicationStatus;
//        $addab->save();




        return redirect('/manage')->with('upmsg','Data Update Successfully');

    }
}
