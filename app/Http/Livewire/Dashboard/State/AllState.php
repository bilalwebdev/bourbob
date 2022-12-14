<?php

namespace App\Http\Livewire\Dashboard\State;

use App\Models\State;
use Livewire\Component;
use Livewire\WithPagination;

class AllState extends Component
{
    use WithPagination;
    public $paginatedItems = 15;
    public $searchTerm = "";
    public $title;

    public $editRowId = null;
    public $titleToEdit = "";

    protected $rules = [
        'title' => 'required|unique:states',
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

        State::create([
            'title' => $this->title,
        ]);

        $this->emit('success', 'State Added!');
        $this->reset();

    }

    public function editRow($rowId)
    {
        $this->editRowId = $rowId;
        $this->titleToEdit = State::find($rowId)->title;
    }

    public function updateRow()
    {
        $this->validate([
            'titleToEdit' => 'required',
        ]);
        State::find($this->editRowId)->update(['title' => $this->titleToEdit]);
        $this->editRowId = null;
        $this->emit('success', 'State Updated!');

    }

    public function destroy($id)
    {
        State::find($id)->delete();
        $this->emit('success', 'State Deleted!');
    }

    public function render()
    {
        $states = State::search('title', $this->searchTerm)->orderBy('created_at', 'DESC')->paginate($this->paginatedItems);
        return view('livewire.dashboard.state.all-state', [
            'states' => $states,
        ]);
    }
}
