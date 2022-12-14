<?php

namespace App\Http\Livewire\Dashboard\Bourbon;

use App\Models\Aroma;
use App\Models\BourbonAroma;
use App\Models\BourbonFlavor;
use App\Models\BourbonMashbills;
use App\Models\Flavor;
use App\Models\MashBill;
use Livewire\Component;

class BourbonProperties extends Component
{

    public $bourbon;
    public $aromasList;
    public $flavorsList;
    public $mashbillsList;

    public $addedMashbills;
    public $addedFlavors;
    public $addedAromas;

    public $selected_mashbill_id;
    public $selected_flavor_id;
    public $selected_aroma_id;

    protected $rules = [

        'addedMashbills.*.pivot.amount' => "nullable",

    ];

    public function mount($bourbon)
    {
        $this->bourbon = $bourbon;

        $this->aromasList = Aroma::all();
        $this->flavorsList = Flavor::all();
        $this->mashbillsList = MashBill::all();

        $this->addedMashbills = $this->bourbon->mashbills->toArray();
        $this->addedFlavors = $bourbon->flavors->toArray();
        $this->addedAromas = $bourbon->aromas->toArray();
    }

    public function addMashbill()
    {

        $exists = BourbonMashbills::where('bourbon_id', $this->bourbon->id)->where('mashbill_id', $this->selected_mashbill_id)->first();

        if ($exists) {
            $this->emit('error', 'Mashbill already added');
            return;
        }
        $this->validate([
            'selected_mashbill_id' => 'required'
        ]);
        BourbonMashbills::create([
            'bourbon_id' => $this->bourbon->id,
            'mashbill_id' => $this->selected_mashbill_id,
            'amount' => 0,
        ]);
        $this->bourbon = $this->bourbon->refresh();
        $this->addedMashbills = $this->bourbon->mashbills->toArray();
    }

    public function updateMashBills()
    {

        BourbonMashbills::where('bourbon_id', $this->bourbon->id)->delete();

        foreach ($this->addedMashbills as $mashbill) {
            BourbonMashbills::create($mashbill['pivot']);
        }

        $this->emit('success', 'Mashbills Updated!');
    }

    public function deleteAddedMashbill($id)
    {
        BourbonMashbills::where('mashbill_id', $id)->where('bourbon_id', $this->bourbon->id)->delete();
        $this->bourbon = $this->bourbon->refresh();
        $this->addedMashbills = $this->bourbon->mashbills->toArray();
    }

    public function addFlavor()
    {
        $exists = BourbonFlavor::where('bourbon_id', $this->bourbon->id)->where('flavor_id', $this->selected_flavor_id)->first();

        if ($exists) {
            $this->emit('error', 'Flavor already added');
            return;
        }

        $this->validate([
            'selected_flavor_id' => 'required'
        ]);

        BourbonFlavor::create([
            'bourbon_id' => $this->bourbon->id,
            'flavor_id' => $this->selected_flavor_id,
        ]);
        $this->bourbon = $this->bourbon->refresh();
        $this->addedFlavors = $this->bourbon->flavors->toArray();
    }

    public function deleteAddedFlavor($id)
    {
        // $id is the original flavor table id
        BourbonFlavor::where('flavor_id', $id)->where('bourbon_id', $this->bourbon->id)->delete();

        $this->bourbon = $this->bourbon->refresh();
        $this->addedFlavors = $this->bourbon->flavors->toArray();
    }
    public function markDominantFlavor($id)
    {
        $flavor = BourbonFlavor::where('flavor_id', $id)->where('bourbon_id', $this->bourbon->id)->first();

        $flavor->dominant = !$flavor->dominant;

        $flavor->save();

        $this->bourbon = $this->bourbon->refresh();
        $this->addedFlavors = $this->bourbon->flavors->toArray();
    }

    public function addAroma()
    {
        $exists = BourbonAroma::where('bourbon_id', $this->bourbon->id)->where('aroma_id', $this->selected_aroma_id)->first();

        if ($exists) {
            $this->emit('error', 'Aroma already added');
            return;
        }

        $this->validate([
            'selected_aroma_id' => 'required'
        ]);

        BourbonAroma::create([
            'bourbon_id' => $this->bourbon->id,
            'aroma_id' => $this->selected_aroma_id,
        ]);
        $this->bourbon = $this->bourbon->refresh();
        $this->addedAromas = $this->bourbon->aromas->toArray();
    }
    public function deleteAddedAroma($id)
    {
        // $id is the original aroma table id
        BourbonAroma::where('aroma_id', $id)->where('bourbon_id', $this->bourbon->id)->delete();

        $this->bourbon = $this->bourbon->refresh();
        $this->addedAromas = $this->bourbon->aromas->toArray();
    }

    public function markDominantAroma($id)
    {
        $aroma = BourbonAroma::where('aroma_id', $id)->where('bourbon_id', $this->bourbon->id)->first();

        $aroma->dominant = !$aroma->dominant;

        $aroma->save();

        $this->bourbon = $this->bourbon->refresh();
        $this->addedAromas = $this->bourbon->aromas->toArray();
    }

    public function render()
    {
        return view('livewire.dashboard.bourbon.bourbon-properties');
    }
}
