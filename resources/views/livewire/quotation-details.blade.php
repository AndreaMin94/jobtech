<tr>
    <th scope="row">{{ $quotation->id}}</th>
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