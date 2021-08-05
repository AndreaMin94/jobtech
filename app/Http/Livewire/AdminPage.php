<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Quotation;
use Livewire\WithPagination;
use App\Repositories\Interfaces\QuotationRepositoryInterface;

class AdminPage extends Component 
{
   

    public function render()
    {
        return view('livewire.admin-page', [
            'quotations' => Quotation::orderBy('id', 'desc')->paginate(3)
        ]);
    }
}
