<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\teamImage;
use App\portImage;
use App\About;
use App\Service;
use App\Testimonial;
use App\Client;

use DB;


class FontendController extends Controller
{
    public function index(){
        //$servcfnt=DB::table('services')->where('publicationservicestatus',1)->get();
        //$prrrtim=DB::table('port_images')->where('pubStats',1)->get();
        //$temimg=DB::table('team_images')->where('publicationstatusy',1)-> get();
        //$abtfnt=DB::table('abouts')->where('publicationaboutstatus',1)->get();
        //return view('fontend.master',['temimg'=>$temimg],['prrrtim'=>$prrrtim],['servcfnt'=>$servcfnt]);
        return view('fontend.master')
            ->with('temimg',teamImage::where('publicationstatusy',1)-> get())
            ->with('prrrtim',portImage::where('pubStats',1)->get())
            ->with('frndaboutdlts',About::where('publicationaboutstatus',1)->get())
            ->with('fntservcdlts',Service::where('publicationservicestatus',1)->get())
            ->with('tesfntdtls',Testimonial::where('publicationtesstatus',1)->get())
            ->with('fntclntdlts',Client::where('publicationclientstatus',1)->get());
    }
}
