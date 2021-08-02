<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;
use App\Repositories\QuotationRepository;

class QuotationController extends Controller
{
    private $repository;

    public function __construct(QuotationRepository $repository)
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

    public function update(Request $req, Quotation $quotation)
    {
        $quotation = $this->repository->update($req, $quotation);
        return redirect()->route('quotation.edit', compact('quotation'))->with('message', 'Quotation updated succesfully');
    }

}
