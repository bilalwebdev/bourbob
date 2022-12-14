<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Bourbon;
use App\Models\Distillery;
use App\Models\Producer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $bourbons = Bourbon::all();

        $distilleries = Distillery::all();

        $producers = Producer::all();

        return view('dashboard.main', compact('bourbons', 'distilleries', 'producers'));
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
