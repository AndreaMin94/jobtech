@extends('layouts.app')

@section('content')

    @livewire('admin-page', ['quotations' => App\Models\Quotation::paginate(5)])
@endsection