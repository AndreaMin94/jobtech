<tr>
    <th scope="row">{{ $quotation->id}}</th>
    <td>{{ $quotation->customer }}</td>
    <td>{{ $quotation->total }}</td>
    <td>{{ $quotation->notes }}</td>
    <td>{{ $quotation->created_at->format('d/m/y') }}</td>
    <td class="d-inline">
        <button wire:click="edit" class="btn btn--primary mx-2">
            Edit
        </button>
        <button wire:click="delete" class="btn btn-danger">Delete</button>
    </td>
</tr>