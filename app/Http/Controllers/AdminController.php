<?php

namespace App\Http\Controllers;

use App\Models\aboutBottomRight;
use App\Models\aboutPostGrid;
use App\Models\aboutTeam;
use App\Models\aboutTeamHeading;
use App\Models\bottomLeft;
use App\Models\bPopularPost;
use App\Models\businessGrid;
use App\Models\businessPage;
use App\Models\contact;
use App\Models\cPopularPost;
use App\Models\footerRecentPost;
use App\Models\HomeHero;
use App\Models\homePolitics;
use App\Models\homeTravel;
use App\Models\leftBusiness;
use App\Models\leftCulture;
use App\Models\politicsLeft;
use App\Models\pPopularPost;
use App\Models\rightBusiness;
use App\Models\rightCulture;
use App\Models\topAbout;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        Parent::__construct();
    }
    public function index()
    {
        try {
            $value = HomeHero::all();
            $bValue = leftBusiness::all();
            $rValue = rightBusiness::all();
            $gValue = businessGrid::all();
            $cValue =leftCulture::all();
            $pValue = homePolitics::all();

            //featch single data from database start
            $value1 = homeTravel::first();
            $value2 = homeTravel::skip(1)->take(1)->get()->first();
            $value3 = homeTravel::skip(2)->take(1)->get()->first();
            $value4 = homeTravel::latest()->first();
            //featch single data from database end
            $rcValue1 = rightCulture::first();
            $rcValue2 = rightCulture::skip(1)->take(1)->get()->first();
            return view('frontend.pages.index',compact('value','bValue','rValue','gValue','cValue','rcValue1','rcValue2','pValue','value1','value2','value3','value4'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function category()
    {
        try {
            return view('frontend.pages.category');
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function blog()
    {
        try {
            return view('frontend.pages.blog');
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function culture()
    {
        try {
            $value = rightCulture::paginate(4);
            $cpValue = cPopularPost::all();
            return view('frontend.pages.culture',compact('value','cpValue'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function business()
    {
        try {
            $popularpost = bPopularPost::all();
            $businessPage = businessPage::paginate(5);
            return view('frontend.pages.business',compact('businessPage','popularpost'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function politics()
    {
        try {
            $politicsValue = politicsLeft::all();
            $popularPolitics = pPopularPost::all();
            return view('frontend.pages.politics',compact('politicsValue','popularPolitics'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function travel()
    {
        try {
            return view('frontend.pages.travel');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function about()
    {
        try {
            $aboutTeam = aboutTeam::all();
            $postGrid = aboutPostGrid::all();
            $aboutTeamHeading = aboutTeamHeading::latest()->first();
            $bottomLeft = bottomLeft::latest()->first();
            $value1 = topAbout::first();
            $value2 = topAbout::latest()->first();
            $aboutBottomRight = aboutBottomRight::all();
            return view('frontend.pages.about',compact('value1','value2','postGrid','aboutTeam','aboutTeamHeading','bottomLeft','aboutBottomRight'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function single_blog()
    {
        try {
            return view('frontend.pages.single_blog');
        } catch (\throwable $th) {
            return $th;
        }
    }



    public function contact()
    {
        try {
            return view('frontend.pages.contact');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function contact_store(request $request)
    {
        try{
            $data = new contact();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->subject = $request->subject;
            $data->message = $request->message;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        }catch(\throwable $th){
            return $th;
        }
    }

}
