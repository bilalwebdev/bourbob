<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use App\Models\SiteSettings;

class TermsConditions extends Component
{
    public $site;
    //   public $content;

    protected $rules = [
        'site.terms_conditions' => 'required'
    ];

    public function mount()
    {
        $this->site = SiteSettings::first();
         $this->content = $this->site->terms_conditions;
    }
    public function save()
    {
        $this->site->update();

        $this->emit('success', 'Terms and conditions updated!');

    //    redirect()->route('dashboard.terms-conditions');
    }

    public function updateContent($value)
    {

        $this->site->terms_conditions = $value;
    }
    public function render()
    {
        return view('livewire.dashboard.terms-conditions');
    }
}
