@extends('layout.mainLayout')
@section('main-content')


    <div class="product-container">
        <div class="card" style="width: 30rem;">
            <img class="card-img-top" src="{{$beer->img_url}}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><span class="init">Nome:</span> {{$beer->name}}</h5>
            <p class="card-text"><span class="init">Gradazione alcolica:</span> {{$beer->alcohol_content}}</p>
            <p class="card-text"><span class="init">Descrizione:</span> {{$beer->description}}</p>
            <p class="card-text"><span class="init">Prezzo:</span> {{$beer->price}}0$</p>
            <p class="card-text"><span class="init">Origine:</span> {{$beer->origin}}</p>
            <a href="/beers" class="btn btn-primary">All beers</a>
            </div>
        </div>
    </div>

@endsection
