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
                @component('components.edit-form', ['quotation' => $quotation])
                    
                @endcomponent
               {{-- <x-edit-form :quotation="{{ $quotation }}" /> --}}
            </div>
        </div>
    </div>

   
@endsection