@extends('layouts.app')



@section('content')
@auth
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
@endauth

    <div class="wrapper">
        <div class="cards_wrap">
            @foreach($pokedexes as $pokedex)


                <div class="card_item ">
                    <div class="card_inner">
                        <div class="card_top">
                            <img src="{{ asset('public/images/'.$pokedex->image) }}" class="card-img-top mensiaKarticka img-fluid center"
                                 alt="Pokedex">
                        </div>
                        <div class="card_bottom ">
                            <div class="card_category">
                                <h5 class="card-title">{{ $pokedex->name }}</h5>
                                <p class="card-text">Some quick example text to build on the card title and make
                                    up
                                    the
                                    bulk
                                    of
                                    the card's content.</p>
                            </div>

                            <div class="card_info">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">HP: {{ $pokedex->hp }}</li>
                                    <li class="list-group-item">Attack: {{ $pokedex->attack }}</li>
                                    <li class="list-group-item">Defense: {{ $pokedex->defense }}</li>
                                    @auth
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
                                    @endauth
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            @endforeach
        </div>
    </div>



@endsection
