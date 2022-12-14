<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function privacyPolicy(){

        return view('dashboard.privacy-policy');

    }
    public function termsConditions(){

        return view('dashboard.terms-conditions');

    }
    public function emailSettings(){

        return view('dashboard.email-setting');

    }
}
