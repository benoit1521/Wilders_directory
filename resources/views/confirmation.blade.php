@extends('layouts.app')

@section('content')
<div class="text-center">
<h1>Vous avez ajouté un nouvel utilisateur !</h1>
    <div class="card" style="width: 18rem;">

        <img src="/images/{{$photo}}" class="card-img-top" alt="photoWilder">

        <div class="card-body">
            <h5 class="card-title">{{$wilder->lastname}} {{$wilder->name}}</h5>
            <p class="card-text">Ecole : {{$wilder->school}}</p>
            <p class="card-text">Promo : {{$wilder->promo}}</p>
            <p class="card-text">Language : {{$wilder->language}}</p>
            <p class="card-text">Description : {{$wilder->description}}</p>
            <p class="card-text">Groupe : {{$wilder->where}}</p>
            <p class="card-text">Motivations : {{$wilder->why}}</p>
            <p class="card-text">Avenir : {{$wilder->tomorrow}}</p>
        </div>

    </div>

    <a href="{{route('wilder')}}">Ajouter un nouvel utilisateur</a>
</div>
@endsection