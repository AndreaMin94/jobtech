<form  wire:submit.prevent="create">
    
    <div class="form-group">
        <label>Customer Name</label>
        <input type="text" wire:model.lazy="customer" name="customer" class="form-control" >
        @error('customer')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Total</label>
        <input type="number" wire:model.lazy="total"  name="total" class="form-control">
        @error('total')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Notes</label>
        <textarea class="form-control" wire:model.lazy="notes"  name="notes"></textarea>
        @error('notes')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
   
    <button type="submit" class="btn btn-primary font-weight-bold my-2">Submit</button>
    <button wire:click.prevent="cleanCreateForm" type="submit" class="btn btn-warning font-weight-bold">Clear</button>

</form>