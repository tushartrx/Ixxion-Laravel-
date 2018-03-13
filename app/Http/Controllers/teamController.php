<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teamImage;
use DB;

class teamController extends Controller
{
    public function addImage()
    {
        return view('admin.team.addform');
    }

    public function saveTeamImage(Request $request)
    {
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $uploadPath = 'public/images/';
        $image->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;
        $this->saveimage($request, $imageUrl);
        return redirect('/add/teammember')->with('message', 'Image Saved Successfully');
    }

    protected function saveimage($request, $imageUrl)
    {
        $img = new teamImage();
        $img->name = $request->name;
        $img->desination = $request->desination;
        $img->image = $imageUrl;
        $img->publicationstatusy = $request->publicationstatusy;
        $img->save();

    }

    public function manageteamImage()
    {
        $teamimg = DB::table('team_images')->get();
        return view('admin.team.mangpg', ['teamimg' => $teamimg]);
    }

    public function delttemimg($id)
    {
        $tmimg = teamImage::find($id);
        $tmimg->delete();
        return redirect('/manage/teammember')->with('dlmsg', 'Image Delete Successfully');
    }


    public function edittemdelts($id)
    {
        $edttmdets = teamImage::where('id', $id)->first();
        return view('admin.team.edittempg', ['edttmdets' => $edttmdets]);
    }


    public function updatetemdlets(Request $request){
        $imageUrl=$this->imgexit($request);
        $upteaglrts=teamImage::find($request->id);

        $upteaglrts->name=$request->name;
        $upteaglrts->desination=$request->desination;
        $upteaglrts->image=$imageUrl;
        $upteaglrts->publicationstatusy=$request->publicationstatusy;
        $upteaglrts->save();

        return redirect('/manage/teammember')->with('uptemdetls','Team Details Updated Successfully');

//        echo $imageUrl;
//        exit();

    }

    private function imgexit($request){
        $clintimg=teamImage::where('id',$request->id)->first();
        $climg=$request->file('image');
        if($climg){
            $oldimg=$clintimg->image;
            unlink($oldimg);
            $name=$climg->getClientOriginalName();
            $uploadPath='public/images/';
            $climg->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
        }else{
            $imageUrl=$clintimg->image;
        }
        return $imageUrl;
    }


}
