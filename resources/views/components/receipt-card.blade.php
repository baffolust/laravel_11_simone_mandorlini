<div class="card receipt-card-custom" style="width: 18rem;">
    <img src="{{Storage::url($receipt->img)}}" class="card-img-top receipt-card-img-custom" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$receipt->title}}</h5>
        <p class="card-text">{{$receipt->short_description}}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Tipo: {{$receipt->type}} </li>
        <li class="list-group-item">Autore: {{$receipt->author}} </li>
    </ul>
    <div class="card-body">
        <a href="{{route('receipt.show', compact('receipt'))}}" class="card-link">Vai alla ricetta</a>
    </div>
</div>
