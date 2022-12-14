<?php

namespace App\Http\Livewire\Dashboard\Distillry;

use App\Models\Distillery;
use Livewire\Component;
use Livewire\WithPagination;

class AllDistillery extends Component
{
    use WithPagination;
    public $paginatedItems = 15;
    public $searchTerm = "";
    public $title;

    public $editRowId = null;
    public $titleToEdit = "";

    protected $rules = [
        'title' => 'required|unique:distilleries',
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

        Distillery::create([
            'title' => $this->title,
        ]);

        $this->emit('success', 'Distillery Added!');
        $this->reset();

    }

    public function editRow($rowId)
    {
        $this->editRowId = $rowId;
        $this->titleToEdit = Distillery::find($rowId)->title;
    }

    public function updateRow()
    {
        $this->validate([
            'titleToEdit' => 'required',
        ]);
        Distillery::find($this->editRowId)->update(['title' => $this->titleToEdit]);
        $this->editRowId = null;
        $this->emit('success', 'Distillery Updated!');

    }

    public function destroy($id)
    {
        Distillery::find($id)->delete();
        $this->emit('success', 'Distillery Deleted!');
    }
    public function render()
    {
        $distilleries = Distillery::search('title', $this->searchTerm)->orderBy('created_at', 'DESC')->paginate($this->paginatedItems);
        return view('livewire.dashboard.distillry.all-distillery', [
            'distilleries' => $distilleries,
        ]);
    }
}
