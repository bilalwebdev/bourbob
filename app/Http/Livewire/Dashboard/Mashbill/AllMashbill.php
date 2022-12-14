<?php

namespace App\Http\Livewire\Dashboard\Mashbill;

use App\Models\MashBill;
use Livewire\Component;
use Livewire\WithPagination;

class AllMashbill extends Component
{
    use WithPagination;
    public $paginatedItems = 15;
    public $searchTerm = "";
    public $title;

    public $editRowId = null;
    public $titleToEdit = "";

    protected $rules = [
        'title' => 'required|unique:mash_bills',
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

        MashBill::create([
            'title' => $this->title,
        ]);

        $this->emit('success', 'Mashbill Added!');
        $this->reset();

    }

    public function editRow($rowId)
    {
        $this->editRowId = $rowId;
        $this->titleToEdit = MashBill::find($rowId)->title;
    }

    public function updateRow()
    {
        $this->validate([
            'titleToEdit' => 'required',
        ]);
        MashBill::find($this->editRowId)->update(['title' => $this->titleToEdit]);
        $this->editRowId = null;
        $this->emit('success', 'Mashbill Updated!');

    }

    public function destroy($id)
    {
        MashBill::find($id)->delete();
        $this->emit('success', 'Mashbill Deleted!');
    }

    public function render()
    {
        $mashbills = MashBill::search('title', $this->searchTerm)->orderBy('created_at', 'DESC')->paginate($this->paginatedItems);
        return view('livewire.dashboard.mashbill.all-mashbill' , [
            'mashbills' => $mashbills,
        ]);
    }
}
