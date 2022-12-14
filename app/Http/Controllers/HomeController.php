<?php

namespace App\Http\Controllers;

use App\Models\Bourbon;
use App\Models\Brand;
use App\Models\Distillery;
use App\Models\SiteSettings;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.main');
    }

    public function bourbonDetails($slug)
    {
        $bourbon = Bourbon::where('slug', $slug)->first();
        return view('home.bourbon-detail', compact('bourbon'));
    }

    public function bourbons($slug)
    {
        return view('home.bourbons', compact('slug'));
    }

    public function allDistilleries()
    {
        $distilleries = Distillery::all();
        return view('home.distilleries', compact('distilleries'));
    }

    public function bourbonFilter()
    {
        return view('home.bourbon-filter');
    }

    public function privacyPolicy()
    {
        $site = SiteSettings::first();
        return view('home.privacy-policy', compact('site'));
    }

    public function termsConditions()
    {
        $site = SiteSettings::first();
        return view('home.terms-conditions', compact('site'));
    }
    public function contactUs()
    {
        return view('home.contact-us');
    }
    public function aboutUs()
    {
        return view('home.about-us');
    }
}
