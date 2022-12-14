<?php

namespace App\Http\Livewire\Dashboard\Flavors;

use App\Models\Flavor;
use Livewire\Component;
use Livewire\WithPagination;

class AllFlavors extends Component
{
    use WithPagination;
    public $paginatedItems = 15;
    public $searchTerm = "";
    public $title;

    public $editRowId = null;
    public $titleToEdit = "";

    protected $rules = [
        'title' => 'required|unique:flavors',
    ];

    protected $messages = [
        'titleToEdit.required' => 'The title field can not be blank',

    ];

    public function updatingSearchTerm()
    {
        $this->resetPage();
    }

    public function createRow()
    {

        $this->validate();

        Flavor::create([
            'title' => $this->title,
        ]);

        $this->emit('success', 'Flavor Added!');
        $this->reset();

    }

    public function editRow($rowId)
    {
        $this->editRowId = $rowId;
        $this->titleToEdit = Flavor::find($rowId)->title;
    }

    public function updateRow()
    {
        $this->validate([
            'titleToEdit' => 'required',
        ]);
        Flavor::find($this->editRowId)->update(['title' => $this->titleToEdit]);
        $this->editRowId = null;
        $this->emit('success', 'Flavor Updated!');

    }

    public function destroy($id)
    {
        Flavor::find($id)->delete();
        $this->emit('success', 'Flavor Deleted!');
    }

    public function render()
    {

        $flavors = Flavor::search('title', $this->searchTerm)->orderBy('created_at', 'DESC')->paginate($this->paginatedItems);

        return view('livewire.dashboard.flavors.all-flavors', [
            'flavors' => $flavors,
        ]);
    }

}
