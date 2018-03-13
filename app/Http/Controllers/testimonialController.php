<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class testimonialController extends Controller
{
    public function index()
    {
        return view('admin.testimonial.addtesfrm');
    }

    public function storetesdetails(Request $request)
    {

        $image = $request->file('tesimage');
        $name = $image->getClientOriginalName();
        $uploadPath = 'public/testimonial/';
        $image->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;
        $this->saveimage($request, $imageUrl);
        return redirect('/add/testimonial')->with('Tesdetailssv', 'Testimonials Details Saved Successfully');
    }

    protected function saveimage($request, $imageUrl)
    {
        $tesdetails = new Testimonial();
        $tesdetails->tesname = $request->tesname;
        $tesdetails->tesdescription = $request->tesdescription;
        $tesdetails->tesimage = $imageUrl;
        $tesdetails->publicationtesstatus = $request->publicationtesstatus;
        $tesdetails->save();
    }



    public function mangtesdetails(){
        $mangtes=Testimonial::all();
        return view('admin.testimonial.mangdtlstes',['mangtes'=>$mangtes]);
    }


    public function delettesdetails($id){
        $deltetes=Testimonial::find($id);
        $deltetes->delete();
        return redirect('/manage/testimonial')->with('delttesmsg','Testimonials Details Deleted Successfully');
    }

    public function edittesdetls($id){
        $edittesdlt=Testimonial::where('id',$id)->first();
        return view('admin.testimonial.edittespg',['edittesdlt'=>$edittesdlt]);
    }


    public function Updatetesmonialdetaisl(Request $request){
        $imageUrl=$this->imgexit($request);
        $uptesdtlssss=Testimonial::find($request->id);

        $uptesdtlssss->tesname=$request->tesname;
        $uptesdtlssss->tesdescription=$request->tesdescription;
        $uptesdtlssss->tesimage=$imageUrl;
        $uptesdtlssss->publicationtesstatus=$request->publicationtesstatus;
        $uptesdtlssss->save();

        return redirect('/manage/testimonial')->with('updttesdltsmsg','Testimonial Details Updated Successfully');

//        echo $imageUrl;
//        exit();

    }

    private function imgexit($request){
        $clintimg=Testimonial::where('id',$request->id)->first();
        $climg=$request->file('tesimage');
        if($climg){
            $oldimg=$clintimg->tesimage;
            unlink($oldimg);
            $name=$climg->getClientOriginalName();
            $uploadPath='public/testimonial/';
            $climg->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
        }else{
            $imageUrl=$clintimg->tesimage;
        }
        return $imageUrl;

    }


}
