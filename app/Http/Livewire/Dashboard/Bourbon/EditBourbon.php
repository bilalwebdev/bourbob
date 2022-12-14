<?php

namespace App\Http\Livewire\Dashboard\Bourbon;

use App\Models\BourbonFlavor;
use App\Models\BourbonMashbills;
use App\Models\Brand;
use App\Models\Distillery;
use App\Models\Producer;
use App\Models\State;
use Livewire\Component;

class EditBourbon extends Component
{

    public $bourbon;

    public $brands;
    public $categories;
    public $distilleries;
    public $producers;
    public $aromas;
    public $flavors;
    public $states;
    public $mashbills;

    public $selectedAromas;



    public $bourbonMashbills;

    public $addedFlavors;

    protected $rules = [
        'bourbon.title' => "required",
        'bourbon.description' => "string|nullable",
        "bourbon.brand_id" => "required",
        "bourbon.producer_id" => "required",
        "bourbon.distillery_id" => "required",
        "bourbon.state_id" => "nullable",
        "bourbon.video" => "string|nullable",
        "bourbon.note" => "string|nullable",
        "bourbon.age" => "nullable|numeric|between:0,99999.99",
        "bourbon.proof" => "nullable|numeric|between:0,99999.99",
        'bourbonMashbills.*.amount' => "nullable",

    ];

    public function mount($bourbon)
    {
        $this->bourbon = $bourbon;
        $this->brands = Brand::all();
        $this->distilleries = Distillery::all();
        $this->producers = Producer::all();
        $this->states = State::all();

    }

    public function saveImage($imgKey)
    {
        $this->bourbon->update([
            'image' => $imgKey,
        ]);
        $this->emit('success', 'Photo Uploaded!');
    }

    public function updateBourbon()
    {

        $this->validate();
        $this->bourbon->update();

        $this->emit('success', 'Info Updated!');

    }


    public function render()
    {

        // ray($this->bourbon->flavors);
        return view('livewire.dashboard.bourbon.edit-bourbon');
    }
}
