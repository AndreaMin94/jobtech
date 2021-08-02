@extends('layouts.app')

@section('content')
    <div class="container my-2">
        <div class="row text-center">
            <div class="col-12">
                <h1>
                    Quotation Dashboard
                </h1>
            </div>
        </div>
    </div>

    <div class="container my-2">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped border">
                    <thead>
                      <tr>
                        <th scope="col">n°</th>
                        <th scope="col">Client</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Notes</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($quotations as $quotation)
                        <tr>
                            <th scope="row">{{ $loop->index + 1}}</th>
                            <td>{{ $quotation->customer }}</td>
                            <td>{{ $quotation->total }}</td>
                            <td>{{ $quotation->notes }}</td>
                            <td>
                                <a href="{{ route('quotation.edit', $quotation->id) }}">
                                    <button class="btn btn-warning">
                                        Edit
                                    </button>
                                </a>
                            </td>
                          </tr>
                        @endforeach     
                    </tbody>
                  </table>
                  {{ $quotations->links() }}
            </div>
        </div>
    </div>
@endsection