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
        <button wire:click="delete" class="btn btn-danger">Delete</button>
        
    </td>
</tr>