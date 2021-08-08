<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Quotation;
use Livewire\WithPagination;
use App\Repositories\QuotationRepository;
use App\Http\Controllers\QuotationController;
use App\Repositories\Interfaces\QuotationRepositoryInterface;

class AdminPage extends Component 
{
   private $repository;
   public $quotations;

   protected $listeners = [
       'store', 'edit', 'update', 'deleteQuotation' => 'delete', 'refreshAdminPage' => '$refresh'
   ];

   public function __construct()
   {
       $this->repository = new QuotationRepository();
   }



    // public function index()
    // {
    //    return Quotation::orderBy('id', 'desc')->paginate(5); 
    // }

    // public function findById($id)
    // {
    //     return Quotation::find($id);
    // }

    // public function update($params, Quotation $quotation)
    // {
    //     $quotation->update($params);
    //     return $quotation;
    // }

    public function delete(Quotation $quotation)
    {
        $this->repository->delete($quotation);
        $this->emit('refreshQuotationTable');
    }

    public function store($params)
    {  
        $this->repository->store($params);
        $this->emit('refreshQuotationTable');
        $this->emit('cleanCreateForm');
    }

    public function render()
    {
        return view('livewire.admin-page');
    }
}
