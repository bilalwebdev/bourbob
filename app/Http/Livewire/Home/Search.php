<?php

namespace App\Http\Livewire\Home;

use App\Models\Bourbon;
use App\Models\Brand;
use Livewire\Component;

class Search extends Component
{


    public $query;

    public $bourbons = [];
    public $brands = [];

    public function mount(){
        $this->query = '';
        $this->bourbons = '';
        $this->brands = '';
    }

    public function updatedQuery(){

        $this->bourbons = Bourbon::where('title', 'like', '%'.$this->query.'%')->get()->toArray();
        $this->brands = Brand::where('title', 'like', '%'.$this->query.'%')->get()->toArray();
      // dd($this->bourbons);
    }

    public function render()
    {
        return view('livewire.home.search');
    }
}
