<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\SiteSettings;
use Livewire\Component;

class PrivacyPolicy extends Component
{
    public $site;
    //   public $content;

    protected $rules = [
        'site.privacy_policy' => 'required'
    ];

    public function mount()
    {
        $this->site = SiteSettings::first();
         $this->content = $this->site->privacy_policy;
    }
    public function save()
    {
        $this->site->update();

        $this->emit('success', 'Privacy Policy updated!');

    //    redirect()->route('dashboard.privacy-policy');
    }

    public function updateContent($value)
    {

        $this->site->privacy_policy = $value;
    }
    public function render()
    {
        return view('livewire.dashboard.privacy-policy');
    }
}
