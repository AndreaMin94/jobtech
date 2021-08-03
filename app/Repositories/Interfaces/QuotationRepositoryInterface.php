<?php

namespace App\Repositories\Interfaces;

use App\Models\Quotation;
use Illuminate\Http\Request;

interface QuotationRepositoryInterface {
    public function index();
    public function findById($id);
    public function update(Request $req, Quotation $quotation);
    public function delete(Quotation $quotation);
    public function store(Request $req);
}