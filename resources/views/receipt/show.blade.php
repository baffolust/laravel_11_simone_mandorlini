<x-layout>

    <x-header title="{!! $receipt->title !!}" />

    <div class="container-fluid mx-5">
        <div class="row justify-content-start align-items-top mt-5 mx-5">
            <div class="col-12 col-md-3">
                <img src="{{ Storage::url($receipt->img) }}" alt="immagine {{ $receipt->title }}" class="receipt-img-show">
            </div>
            <div class="col-12 col-md-8">
                <h4>Descrizione della ricetta</h4>
                <p>{{$receipt->description}}</p>
            </div>
        </div>
    </div>


</x-layout>
