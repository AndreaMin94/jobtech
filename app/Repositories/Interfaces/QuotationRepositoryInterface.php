<?php

namespace App\Repositories\Interfaces;

use App\Models\Quotation;
use Illuminate\Http\Request;
use App\Http\Requests\QuotationRequest;

interface QuotationRepositoryInterface {
    public function index();
    public function findById($id);
    public function update($params, $quotationId);
    public function delete(Quotation $quotation);
    public function store($params);
}