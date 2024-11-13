<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function aboutus()
    {
        return view('pages.aboutus');
    }

    public function contactus()
    {
        return view('pages.contactus');
    }

    public function contentwriters()
    {
        return view('pages.contentwriters');
    }

    public function creativewriting()
    {
        return view('pages.creativewriting');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function graphicsdesign()
    {
        return view('pages.graphicsdesign');
    }

    public function itandtelecom()
    {
        return view('pages.itandtelecom');
    }

    public function molabsteam()
    {
        return view('pages.molabsteam');
    }

    public function pastevents()
    {
        return view('pages.pastevents');
    }

    public function picturearchive()
    {
        return view('pages.picturearchive');
    }

    public function posterarchive()
    {
        return view('pages.posterarchive');
    }

    public function thanks()
    {
        return view('pages.thanks');
    }

    public function upcomingevents()
    {
        return view('pages.upcomingevents');
    }

    public function videoproduction()
    {
        return view('pages.videoproduction');
    }

    public function videos()
    {
        return view('pages.videos');
    }

    public function webdesign()
    {
        return view('pages.webdesign');
    }


}
