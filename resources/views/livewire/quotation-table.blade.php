
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