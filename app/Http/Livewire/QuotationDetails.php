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

    public function delete()
    {
        $this->emitUp('deleteQuotation', $this->quotation);
    }

    public function edit()
    {
        $this->emit('toggleEditMode');//toggle inCreateMode prop in CreateForm
        $this->emit('onEditModeEnter', $this->quotation);
    }

    public function render()
    {
        return view('livewire.quotation-details');
    }
}
