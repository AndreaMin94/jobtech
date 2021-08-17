<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label class="text--secondary font-weight-bold">Cerca preventivo tramite il nome del cliente</label>
                <input wire:model="search" type="text" class="form-control">
                <button wire:click="clearSearch" class="btn btn--primary font-weight-bold my-2">Pulisci</button>
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-3">
            <table class="table table-striped border">
                <thead>
                <tr>
                    <th scope="col">n°</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Totale</th>
                    <th scope="col">Note</th>
                    <th scope="col">Data di creazione</th>
                    <th scope="col">Azioni</th>
                </tr>
                </thead>
                <tbody>
                    @if (count($quotations) > 0)
                        @foreach ($quotations as $quotation)
                            @livewire('quotation-details', ['quotation' => $quotation], key($quotation->id))
                        @endforeach 
                    @else
                        <h1>Non ci sono quotation da mostrare</h1>
                    @endif
                       
                </tbody>
            </table>
            {{ $quotations->links() }}
        </div>
    </div>
</div>