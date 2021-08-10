<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label class="text--secondary font-weight-bold">Search By Customer Name</label>
                <input wire:model="search" type="text" class="form-control">
                <button wire:click="clearSearch" class="btn btn--primary font-weight-bold my-2">Clear</button>
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-3">
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
    </div>
</div>