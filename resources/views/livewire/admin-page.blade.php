<>
    
    <div class="container my-2">
        <div class="row text-center">
            <div class="col-12">
                <h1>
                    Quotation Dashboard
                </h1>
            </div>
        </div>
    </div>

    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif 
    </div>
    

    <div class="container my-5">

        <div class="row text-center">
            <div class="col-12">
                <h2>
                    Create new quotation
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
             @livewire('create-form')
            </div>
        </div>
    </div>

    
    @livewire('quotation-table')
    

</div>