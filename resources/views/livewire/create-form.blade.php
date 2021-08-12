<form  wire:submit.prevent="create">
    
    <div class="form-group">
        <label class="text--secondary font-weight-bold">Customer Name</label>
        <input type="text" wire:model.lazy="customer" name="customer" class="form-control" >
        @error('customer')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label class="text--secondary font-weight-bold">Total</label>
        <input type="number" wire:model.lazy="total"  name="total" class="form-control">
        @error('total')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label class="text--secondary font-weight-bold">Notes</label>
        <textarea class="form-control" wire:model.lazy="notes"  name="notes"></textarea>
        @error('notes')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn--secondary px-3 font-weight-bold my-2">{{ $inCreateMode ? 'Create' : 'Edit' }}</button>
    <button wire:click.prevent="cleanCreateForm" type="submit" class="btn btn--primary font-weight-bold px-3">Clear</button>

</form>