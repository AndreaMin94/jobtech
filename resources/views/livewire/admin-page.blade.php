<div>
    
    <div class="container my-2">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="text-accent font-weight-bold">
                    Manage Quotations 
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

        <div class="row text-left">
            <div class="col-12">
                <h2 class="my-2 text-accent font-weight-bold">
                    Create new quotation
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 my-2">
             @livewire('create-form')
            </div>
        </div>
    </div>

    
    @livewire('quotation-table')
    

</div>