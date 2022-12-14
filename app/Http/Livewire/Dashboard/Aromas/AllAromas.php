<?php

namespace App\Http\Livewire\Dashboard\Aromas;

use App\Models\Aroma;
use Livewire\Component;
use Livewire\WithPagination;

class AllAromas extends Component
{
    use WithPagination;
    public $paginatedItems = 15;
    public $searchTerm = "";
    public $title;

    public $editRowId = null;
    public $titleToEdit = "";
    protected $rules = [
        'title' => 'required|unique:aromas',
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

        Aroma::create([
            'title' => $this->title,
        ]);

        $this->emit('success', 'Aroma Added!');
        $this->reset();

    }

    public function editRow($rowId)
    {
        $this->editRowId = $rowId;
        $this->titleToEdit = Aroma::find($rowId)->title;
    }

    public function updateRow()
    {
        $this->validate([
            'titleToEdit' => 'required',
        ]);
        Aroma::find($this->editRowId)->update(['title' => $this->titleToEdit]);
        $this->editRowId = null;
        $this->emit('success', 'Aroma Updated!');

    }

    public function destroy($id)
    {
        Aroma::find($id)->delete();
        $this->emit('success', 'Aroma Deleted!');
    }

    public function render()
    {

        $aromas = Aroma::search('title', $this->searchTerm)->orderBy('created_at', 'DESC')->paginate($this->paginatedItems);


        return view('livewire.dashboard.aromas.all-aromas', [
            'aromas' => $aromas,
        ]);
    }
}
