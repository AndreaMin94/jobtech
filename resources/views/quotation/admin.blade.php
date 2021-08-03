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

    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif 
    </div>
    

    <div class="container my-5">

        <div class="row text-center">
            <div class="col-12">
                <h2>
                    Create new quotation
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('quotation.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" name="customer" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Total</label>
                        <input type="number" name="total" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Notes</label>
                        <textarea class="form-control" name="notes"></textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-primary my-2">Submit</button>
              </form>
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
                        <th scope="col">Created Date</th>
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
                            <td>{{ $quotation->created_at->format('d/m/y') }}</td>
                            <td class="d-inline">
                                <a href="{{ route('quotation.edit', $quotation->id) }}">
                                    <button class="btn btn-warning">
                                        Edit
                                    </button>
                                </a>
                                <form action="{{ route('quotation.delete', $quotation) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
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