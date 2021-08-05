<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Quotation;
use Livewire\WithPagination;

class QuotationTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    


    public function render()
    {
        $quotations = Quotation::paginate(5);
        return view('livewire.quotation-table', compact('quotations'));
    }
}
