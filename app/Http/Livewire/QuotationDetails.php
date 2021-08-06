<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Quotation;
use App\Repositories\Interfaces\QuotationRepositoryInterface;

class QuotationDetails extends Component 
{
    public $quotation;
    
    public function mount(Quotation $quotation)
    {
        $this->quotation = $quotation;
    }

    public function render()
    {
        return view('livewire.quotation-details');
    }
}
