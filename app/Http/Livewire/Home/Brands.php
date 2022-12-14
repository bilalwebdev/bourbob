<?php

namespace App\Http\Livewire\Home;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class Brands extends Component
{

    use WithPagination;
    public $searchTerm = "";


    public function render()
    {
       $brands = Brand::where('title', 'like', '%' . $this->searchTerm . '%')->paginate(12);
       //dd($brands);
        return view('livewire.home.brands', compact('brands'));
    }
}
