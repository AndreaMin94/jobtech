<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateForm extends Component
{
    public $customer;
    public $total;
    public $notes;

    protected $rules = [
        'customer' => 'required|min:3',
        'total' => 'required|min:1|numeric',
        'notes' => 'required|min:10'
    ];

    protected $messages = [
        'customer.required' => "The customer name is required",
        'customer.min' => "The customer name must be longer than 3 characters",
        'total.required' => "The amount is required",
        'total.min' => "The amount must be greater than 1",
        'total.numeric' => 'The amount must be numeric',
        'notes.required' => 'Notes are required',
        'notes.min' => "Notes must be longer than 10 characters"   
    ];

    protected $listeners = [
        'cleanCreateForm'
    ];

    public function cleanCreateForm()
    {
       $this->customer = '';
       $this->total = null;
       $this->notes = '';
    }

    public function updatedCustomer()
    {
        $this->validateOnly('customer');
    }

    public function updatedTotal()
    {
        $this->validateOnly('total');
    }

    public function updatedNotes()
    {
        $this->validateOnly('notes');
    }

    public function create()
    {
        $this->validate();

        $this->emitUp('store',[
            'customer' => $this->customer,
            'total' => $this->total,
            'notes' => $this->notes,
        ]);
    }

    public function render()
    {
        return view('livewire.create-form');
    }
}
