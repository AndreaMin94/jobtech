<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;
use App\Http\Requests\QuotationRequest;
use App\Repositories\Interfaces\QuotationRepositoryInterface;

class QuotationController extends Controller
{
    private $repository;

    public function __construct(QuotationRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function admin()
    {
        $quotations = $this->repository->index();
        return view('quotation.admin', compact('quotations'));
    }

    public function edit($id)
    {
        $quotation = $this->repository->findById($id);
        return view('quotation.edit', compact('quotation'));
    }

    public function update($params, Quotation $quotation)
    {
        $quotation = $this->repository->update($params, $quotation);
        return redirect()->route('quotation.edit', compact('quotation'))->with('message', 'Quotation updated succesfully');
    }

    public function delete(Quotation $quotation)
    {
        $this->repository->delete($quotation);
        return redirect()->route('quotation.admin')->with('message', "The quotation with ID $quotation->id has been deleted");
    }

    public function store($params)
    {
        $quotation = $this->repository->store($params);
        return redirect()->route('quotation.admin')->with('message', "A new quotation has been created");
    }

}
