<x-layout>

    <x-header title="Tutte Le Ricette"/>

    <div class="container">
        <div class="row justify-content-evenly align-items-top my-4">
            @foreach ($receipts as $receipt)
            <div class="col-12 col-md-3 d-flex justify-content-center">
                <x-receipt-card :receipt="$receipt"/>
            </div>
                
            @endforeach
        </div>
    </div>
    

</x-layout>
