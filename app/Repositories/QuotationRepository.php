<?php

namespace App\Repositories;

use App\Models\Quotation;
use Illuminate\Http\Request;

Class QuotationRepository {

    public function index()
    {
       return Quotation::orderBy('id', 'desc')->paginate(5);
       
    }

    public function findById($id)
    {
        return Quotation::find($id);
    }

    public function update(Request $req, Quotation $quotation)
    {
        $quotation->update($req->all());
        return $quotation;
    }
}