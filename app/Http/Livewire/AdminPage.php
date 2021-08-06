<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Quotation;
use Livewire\WithPagination;
use App\Repositories\Interfaces\QuotationRepositoryInterface;

class AdminPage extends Component implements QuotationRepositoryInterface
{
   private $repository;
   public $quotations;

   protected $listeners = [
       'create', 'edit', 'update', 'delete'
   ];

   public function __construct()
   {
       $this->repository = QuotationRepositoryInterface::class;
   }

    public function index()
    {
       return Quotation::orderBy('id', 'desc')->paginate(5); 
    }

    public function findById($id)
    {
        return Quotation::find($id);
    }

    public function update($params, Quotation $quotation)
    {
        $quotation->update($params);
        return $quotation;
    }

    public function delete(Quotation $quotation)
    {
        $quotation->delete();
    }

    public function store($params)
    {
        // return Quotation::create([
        //     'customer' => $req->input('customer'),
        //     'total' => $req->input('total'),
        //     'notes' => $req->input('notes')
        // ]);
    }

    public function render()
    {
        return view('livewire.admin-page');
    }
}
