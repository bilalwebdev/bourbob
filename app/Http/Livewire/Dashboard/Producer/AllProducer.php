<?php

namespace App\Http\Livewire\Dashboard\Producer;

use App\Models\Producer;
use Livewire\Component;
use Livewire\WithPagination;

class AllProducer extends Component
{
    use WithPagination;
    public $paginatedItems = 15;
    public $searchTerm = "";
    public $title;

    public $editRowId = null;
    public $titleToEdit = "";

    protected $rules = [
        'title' => 'required|unique:producers',
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

        Producer::create([
            'title' => $this->title,
        ]);

        $this->emit('success', 'Producer Added!');
        $this->reset();

    }

    public function editRow($rowId)
    {
        $this->editRowId = $rowId;
        $this->titleToEdit = Producer::find($rowId)->title;
    }

    public function updateRow()
    {
        $this->validate([
            'titleToEdit' => 'required',
        ]);
        Producer::find($this->editRowId)->update(['title' => $this->titleToEdit]);
        $this->editRowId = null;
        $this->emit('success', 'Producer Updated!');

    }

    public function destroy($id)
    {
        Producer::find($id)->delete();
        $this->emit('success', 'Producer Deleted!');
    }
    public function render()
    {
        $producers = Producer::search('title', $this->searchTerm)->orderBy('created_at', 'DESC')->paginate($this->paginatedItems);
        return view('livewire.dashboard.producer.all-producer', [
            'producers' => $producers,
        ]);
    }
}
