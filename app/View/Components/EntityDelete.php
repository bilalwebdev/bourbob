<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EntityDelete extends Component
{
    public $message;
    public $trigger;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message, $trigger)
    {
        $this->message = $message;
        $this->trigger = $trigger;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.entity-delete');
    }
}
