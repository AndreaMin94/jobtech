<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EditForm extends Component
{
    public $quotation;

    public function __construct($quotation)
    {
        $this->quotation = $quotation;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.edit-form');
    }
}
