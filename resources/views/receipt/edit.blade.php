<x-layout>

    <x-header title="Modifica la Ricetta" />

    <x-display-errors />

    <x-display-message message='receipt_success' />

    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-12 col-md-6">
                <form class="rounded-4 bg-color-3 text-color-1 p-4 shadow" enctype="multipart/form-data" action="{{ route('receipt.update', compact('receipt')) }}" method="POST">
                    @csrf
                    @method('PUT') {{-- HTML NON SUPPORTA PUT E CON POST IL DB NON SI AGGIORNA!!!! --}}
                     <div class="mb-3 text-center">
                        <h2 name="title">{{$receipt->title}}</h2>
                        <input type="hidden" name="title" value="{{ $receipt->title }}">
                        {{-- <label for="title" class="form-label">Titolo Ricetta</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$receipt->title}}"> --}}
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia di piatto</label>
                        <input type="text" name="type" class="form-control" id="ntypee" value="{{$receipt->type}}">
                    </div>
                    <div class="mb-3">
                        <label for="short_description" class="form-label">Descrizione del piatto</label>
                        <textarea name="short_description" class="form-control" id="short_description" rows="4">{{$receipt->short_description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Ricetta completa</label>
                        <textarea name="description" class="form-control" id="description" rows="8">{{$receipt->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine</label>
                        <input name="img" class="form-control" type="file" id="img">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
