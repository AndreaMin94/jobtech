
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
                @livewire('quotation-details', ['quotation' => $quotation], key($quotation->id))
            @endforeach     
        </tbody>
    </table>
    {{ $quotations->links() }}
</div>