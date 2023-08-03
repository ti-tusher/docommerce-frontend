<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function animationPhotographyVideography()
    {
        return view('animation-photography-videography');
    }
    public function digitalmarketing()
    {
        return view('digital-marketing');
    }
    public function brandService()
    {
        return view('brand-service');
    }
    public function delivery()
    {
        return view('delivery');
    }
    public function sellWebsite()
    {
        return view('sell-on-own-website');
    }
    public function sellInstagram()
    {
        return view('sell-on-instagram');
    }
    public function sellFacebook()
    {
        return view('sell-on-facebook');
    }
    public function sellMobileApp()
    {
        return view('sell-on-mobile-app');
    }
    public function sellPOS()
    {
        return view('sell-on-pos');
    }
    public function storeManagement()
    {
        return view('store-management');
    }
    public function mobileApp()
    {
        return view('mobile-app');
    }
    public function pricing()
    {
        return view('pricing');
    }
    public function freeTraining()
    {
        return view('free-training.index');
    }
    public function freeTraining2()
    {
        return view('free-training.other-pages');
    }
    public function freeTrainingDetails()
    {
        return view('free-training.details');
    }
    public function dropshipping()
    {
        return view('dropshipping');
    }
    public function supplier()
    {
        return view('supplier');
    }
    public function verification()
    {
        return view('verification');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function careers()
    {
        return view('careers');
    }
}
