<?php

namespace App\Http\Livewire\Home;

use App\Models\Bourbon;
use App\Models\Brand;
use Livewire\Component;

class Main extends Component
{


    public function render()
    {
        $featured_bourbons = Bourbon::where('is_featured' , 1)->get();
     //   dd($featured_bourbons);
        $brands = Brand::latest()->take(5)->get();
        $recently_added = Bourbon::latest()->take(5)->get();
     

        return view('livewire.home.main' , compact('featured_bourbons', 'recently_added', 'brands'));
    }
}
