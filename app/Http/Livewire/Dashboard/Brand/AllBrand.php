<?php

namespace App\Http\Livewire\Dashboard\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class AllBrand extends Component
{
    use WithPagination;
    public $paginatedItems = 15;
    public $searchTerm = "";
    public $title;

    public $editRowId = null;
    public $titleToEdit = "";

    protected $rules = [
        'title' => 'required|unique:brands',
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

        Brand::create([
            'title' => $this->title,
        ]);

        $this->emit('success', 'Brand Added!');
        $this->reset();

    }

    public function editRow($rowId)
    {
        $this->editRowId = $rowId;
        $this->titleToEdit = Brand::find($rowId)->title;
    }

    public function updateRow()
    {
        $this->validate([
            'titleToEdit' => 'required',
        ]);
        Brand::find($this->editRowId)->update(['title' => $this->titleToEdit]);
        $this->editRowId = null;
        $this->emit('success', 'Brand Updated!');

    }

    public function destroy($id)
    {
        Brand::find($id)->delete();
        $this->emit('success', 'Brand Deleted!');
    }

    public function render()
    {
        $brands = Brand::search('title', $this->searchTerm)->orderBy('created_at', 'DESC')->paginate($this->paginatedItems);
        return view('livewire.dashboard.brand.all-brand',[
            'brands'=>$brands
        ]);
    }
}
