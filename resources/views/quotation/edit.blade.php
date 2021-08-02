@extends('layouts.app')

@section('content')
    <div class="container my-2">
        <div class="row text-center">
            <div class="col-12">
                <h1>
                    Edit Quotation
                </h1>
            </div>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('quotation.update', $quotation) }}">
                    @csrf
                    <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" name="customer" class="form-control" value="{{ $quotation->customer }}">
                    </div>
                    <div class="form-group">
                        <label>Total</label>
                        <input type="number" name="total" class="form-control" value="{{ $quotation->total }}">
                    </div>
                    <div class="form-group">
                        <label>Notes</label>
                        <textarea class="form-control" name="notes">{{ $quotation->notes }}</textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary my-2">Submit</button>
              </form>
            </div>
        </div>
    </div>

   
@endsection