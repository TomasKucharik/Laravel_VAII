@extends('layouts.app')

@section('content')

    <div class="container ">
        <div class="row ">
            <div class="col-12 text-center">
                <div class="mb-3">
                    <a href="{{ url('add-pokedex') }}" class="btn btn-success" role="button">Add new pokemon to
                        pokedex</a>
                </div>
            </div>
        </div>
    </div>


    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($pokedexes as $pokedex)
                            <div class="col-md-3 mb-3 mr-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('public/images/'.$pokedex->image) }}" class="card-img-top"
                                         alt="Pokedex">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $pokedex->name }}</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the
                                            bulk
                                            of
                                            the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">HP: {{ $pokedex->hp }}</li>
                                        <li class="list-group-item">Attack: {{ $pokedex->attack }}</li>
                                        <li class="list-group-item">Defense: {{ $pokedex->defense }}</li>
                                        <li class="list-group-item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <a href="{{ url('edit-pokedex/'.$pokedex->id) }}"
                                                           class="btn btn-warning">Edit</a>
                                                        <a href="{{ url('delete-pokedex/'.$pokedex->id) }}"
                                                           class="btn btn-danger btn-sm">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
