<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pageRoute($page_id)
    {
        return view('subPage')->with(compact('page_id'));
    }
    public function galleryRoute(){
        return view('gallery');
    }
    public function eventRoute(){
        return view('events');
    }
    public function aboutUsRoute(){
        return view('aboutUs');
    }
    public function contactUsRoute(){
        return view('contactUs');
    }
}
