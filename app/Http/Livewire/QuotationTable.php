<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Quotation;
use Livewire\WithPagination;

class QuotationTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    
    protected $listeners = [
        'refreshQuotationTable' => '$refresh',
    ];

    public function clearSearch()
    {
        $this->search = '';
    }

    
    public function render()
    {
        if($this->search == ''){
            $quotations = Quotation::orderBy('id', 'desc')->paginate(5);
        } else {
            $quotations = Quotation::where('customer' , 'like', '%'.$this->search.'%')->paginate(5);
        }
        return view('livewire.quotation-table', ['quotations' => $quotations]);
    }
}
