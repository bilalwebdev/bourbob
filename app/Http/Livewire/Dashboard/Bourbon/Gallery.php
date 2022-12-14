<?php

namespace App\Http\Livewire\Dashboard\Bourbon;

use App\Models\BourbonGallery;
use Livewire\Component;

class Gallery extends Component
{

    public $bourbon;

    public function mount($bourbon)
    {
        $this->bourbon = $bourbon;
    }

    public function saveImage($imgKey)
    {
        BourbonGallery::create([
            'bourbon_id' => $this->bourbon->id,
            'image' => $imgKey,
        ]);
        $this->emit('success', 'Photo Uploaded!');
    }


    public function deleteImage($id)
    {
        BourbonGallery::find($id)->delete();

        $this->emit('success', 'Photo Deleted!');
    }

    public function render()
    {
        $images = BourbonGallery::where('bourbon_id', $this->bourbon->id)->latest()->get();
        return view('livewire.dashboard.bourbon.gallery', compact('images'));
    }
}
