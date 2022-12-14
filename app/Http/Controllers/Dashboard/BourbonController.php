<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Bourbon;

class BourbonController extends Controller
{
    public function aromas()
    {
        return view('dashboard.aromas.main');
    }

    public function flavors()
    {
        return view('dashboard.flavors.main');
    }

    public function mashbills()
    {
        return view('dashboard.mashbill.main');
    }

    public function distilleries()
    {

        return view('dashboard.distillery.main');
    }

    public function categories()
    {
        return view('dashboard.category.main');
    }

    public function producers()
    {
        return view('dashboard.producer.main');
    }

    public function brands()
    {
        return view('dashboard.brand.main');
    }

    public function states()
    {
        return view('dashboard.state.main');
    }

    public function bourbons()
    {
        return view('dashboard.bourbon.main');
    }

    public function editBourbons(Bourbon $bourbon)
    {
        // return $bourbon;
        return view('dashboard.bourbon.edit-bourbon', compact('bourbon'));
    }
    public function editBourbonsProperties(Bourbon $bourbon)
    {
        // return $bourbon;
        return view('dashboard.bourbon.edit-bourbon-properties', compact('bourbon'));
    }
    public function editBourbonsGallery(Bourbon $bourbon)
    {
        // return $bourbon;
        return view('dashboard.bourbon.edit-bourbon-gallery', compact('bourbon'));
    }
}
