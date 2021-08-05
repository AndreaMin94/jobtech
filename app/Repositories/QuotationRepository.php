<?php

namespace App\Repositories;

use App\Models\Quotation;
use Illuminate\Http\Request;
use App\Http\Requests\QuotationRequest;
use App\Repositories\Interfaces\QuotationRepositoryInterface;

Class QuotationRepository implements QuotationRepositoryInterface {

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
}