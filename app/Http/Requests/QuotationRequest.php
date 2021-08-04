<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuotationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer' => 'required|min:3',
            'total' => 'required|min:1|numeric',
            'notes' => 'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'customer.required' => "The customer name is required",
            'customer.min' => "The customer name must be longer than 3 characters",
            'total.required' => "The amount is required",
            'total.min' => "The amount must be greater than 1",
            'total.numeric' => 'The amount must be numeric',
            'notes.required' => 'Notes are required',
            'notes.min' => "Notes must be longer than 10 characters"
        ];
    }
}
