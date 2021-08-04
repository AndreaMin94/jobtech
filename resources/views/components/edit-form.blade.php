
    <!-- Be present above all else. - Naval Ravikant -->
<from method="POST" action="{{ route('quotation.update', $quotation) }}">
    @csrf
    <div class="form-group">
        <label>Customer Name</label>
        <input type="text" name="customer" class="form-control" value="{{ $quotation->customer }}">
        @error('customer')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Total</label>
        <input type="number" name="total" class="form-control" value="{{ $quotation->total }}">
        @error('total')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Notes</label>
        <textarea class="form-control" name="notes">{{ $quotation->notes }}</textarea>
        @error('notes')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary my-2">Submit</button>
</form>