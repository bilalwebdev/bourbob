<?php

namespace App\Http\Livewire\Dashboard\Bourbon;

use App\Models\Bourbon;
use Livewire\Component;
use Livewire\WithPagination;

class AllBourbon extends Component
{
    use WithPagination;
    public $paginatedItems = 15;
    public $searchTerm = "";
    public $title;
    public $featured;
    public $checked;


    public $editRowId = null;

    protected $rules = [
        'title' => 'required|unique:bourbons',
    ];
    protected $messages = [
        'titleToEdit.required' => 'The name field can not be blank',

    ];



    public function updatingSearchTerm()
    {
        $this->resetPage();
    }
    public function featured($featured)
    {;
        $bourbon = Bourbon::find($featured);
      
        $bourbon->update(
            [
                'is_featured' => !$bourbon->is_featured
            ]
        );
    }
    public function createRow()
    {

        $this->validate();

        $bourbon = Bourbon::create([
            'title' => $this->title,
        ]);

        $this->emit('success', 'Bourbon Added!');
        redirect()->route('dashboard.bourbons.edit', $bourbon->slug);
    }





    public function destroy($id)
    {
        Bourbon::find($id)->delete();
        $this->emit('success', 'Bourbon Deleted!');
    }

    public function render()
    {
        $bourbons = Bourbon::search('title', $this->searchTerm)->orderBy('created_at', 'DESC')->paginate($this->paginatedItems);
        return view('livewire.dashboard.bourbon.all-bourbon', [
            'bourbons' => $bourbons,
        ]);
    }
}
