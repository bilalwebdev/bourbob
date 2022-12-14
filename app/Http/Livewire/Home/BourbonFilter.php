<?php

namespace App\Http\Livewire\Home;

use App\Models\Aroma;
use App\Models\Bourbon;
use App\Models\Brand;
use App\Models\Distillery;
use App\Models\Flavor;
use App\Models\MashBill;
use App\Models\Producer;
use Livewire\Component;

class BourbonFilter extends Component
{

    public $av_aromas;
    public $av_flavors;
    public $av_mash_bills;
    public $av_distilleries;
    public $av_producers;
    public $av_brands;

    public $aromas = [];
    public $flavors = [];
    public $mash_bills = [];
    public $brands = [];
    public $producers = [];
    public $distillerys = [];

    protected $queryString = [
        'aromas', 'flavors', 'mash_bills',
        'brands',
        'producers',
        'distillerys',
    ];

    public function mount()
    {
        $this->av_aromas = Aroma::all();
        $this->av_flavors = Flavor::all();
        $this->av_mash_bills = MashBill::all();
        $this->av_distilleries = Distillery::all();
        $this->av_producers = Producer::all();
        $this->av_brands = Brand::all();
    }

    public function render()
    {
        $selected_aromas = $this->aromas;
        $selected_flavors = $this->flavors;
        $selected_mash_bills = $this->mash_bills;
        $selected_brands = $this->brands;
        $selected_producers = $this->producers;
        $selected_distillerys = $this->distillerys;

        $bourbons = Bourbon::where('id', '!=', 0);


        if ($selected_aromas) {
            $bourbons->whereHas('aromas', function ($query) use ($selected_aromas) {

                return $query->whereIn('aromas.id', $selected_aromas);
            });
        }
        if ($selected_flavors) {
            $bourbons->whereHas('flavors', function ($query) use ($selected_flavors) {

                return $query->whereIn('flavors.id', $selected_flavors);
            });
        }
        if ($selected_mash_bills) {
            $bourbons->whereHas('mashbills', function ($query) use ($selected_mash_bills) {

                return $query->whereIn('bourbon_mashbills.mashbill_id', $selected_mash_bills);
            });
        }
        if ($selected_brands) {
            $bourbons->whereHas('brand', function ($query) use ($selected_brands) {

                return $query->whereIn('brands.id', $selected_brands);
            });
        }
        if ($selected_producers) {
            $bourbons->whereHas('producer', function ($query) use ($selected_producers) {

                return $query->whereIn('producers.id', $selected_producers);
            });
        }
        if ($selected_distillerys) {
            $bourbons->whereHas('distillery', function ($query) use ($selected_distillerys) {

                return $query->whereIn('distilleries.id', $selected_distillerys);
            });
        }

        $bourbons = $bourbons->get();
        return view('livewire.home.bourbon-filter', compact('bourbons'));
    }
}
