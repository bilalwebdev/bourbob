<?php

namespace App\Http\Livewire\Home;

use App\Models\Distillery;
use Livewire\Component;
use Livewire\WithPagination;

class Distilleries extends Component
{

    use WithPagination;
    public $searchTerm = "";

    public function render()
    {
        $distilleries = Distillery::where('title', 'like', '%' . $this->searchTerm . '%')->paginate(12);
        return view('livewire.home.distilleries', compact('distilleries'));
    }
}
