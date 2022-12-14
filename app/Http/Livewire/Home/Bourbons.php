<?php

namespace App\Http\Livewire\Home;

use App\Models\Aroma;
use App\Models\Bourbon;
use App\Models\BourbonAroma;
use App\Models\BourbonFlavor;
use App\Models\BourbonMashbills;
use App\Models\Brand;
use App\Models\Distillery;
use App\Models\Flavor;
use App\Models\MashBill;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Bourbons extends Component
{
    use WithPagination;
    public  $bourbon_aromas;
    public  $bourbon_brands;
    public $brand;
    public $searchTerm = "";
    public $flavor = [];
    public $aroma = [];
    public $mashbill = [];
    public $brand_filter =[];
    public $distillery = [];

    protected $queryString = [
        'aroma',
        'mashbill',
        'distillery',
        'brand_filter',
        'flavor',
    ];

    public function mount($slug){
        //dd($slug);
        $this->brand = Brand::where('slug', $slug)->get();
       // dd($this->brand);
    }

    public function render()
    {

        $query = Bourbon::where('title', 'like', '%' . $this->searchTerm . '%')
        ->when($this->aroma , function($q){

            $this->bourbon_aromas = BourbonAroma::select('bourbon_id')
            ->whereIn('aroma_id', $this->aroma)
            ->get();

                $q->whereIn('id',  $this->bourbon_aromas);
         })
         ->when($this->flavor , function($q){

            $this->bourbon_flavors = BourbonFlavor::select('bourbon_id')
            ->whereIn('flavor_id', $this->flavor)
            ->get();

                $q->whereIn('id',  $this->bourbon_flavors);
         })
         ->when($this->mashbill , function($q){

            $this->bourbon_mashbills = BourbonMashbills::select('bourbon_id')
            ->whereIn('mashbill_id', $this->mashbill)
            ->get();

                $q->whereIn('id',  $this->bourbon_mashbills);
         })
         ->when($this->brand_filter , function($q){

            $this->bourbon_brands = Brand::select('id')
            ->whereIn('title', $this->brand_filter)
            ->get();

                $q->whereIn('brand_id',  $this->bourbon_brands);
         })
         ->when($this->distillery , function($q){

            $this->bourbon_distilleries = Distillery::select('id')
            ->whereIn('title', $this->distillery)
            ->get();

                $q->whereIn('distillery_id',  $this->bourbon_distilleries);
         })
         ->where('brand_id', $this->brand[0]->id)
         ->paginate(12);
        $bourbons = $query;


        $aromas = Aroma::all();
        $mashbills = MashBill::all();
        $flavors = Flavor::all();
        $brands = Brand::all();
        $distilleries = Distillery::all();
        //dd(is_object($bourbons));
        return view('livewire.home.bourbons', compact('bourbons', 'aromas', 'brands', 'flavors', 'distilleries', 'mashbills'));
    }
}
