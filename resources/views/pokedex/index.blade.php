@extends('layouts.app')


@section('content')


    <script src="{{ asset('js/javascript.js') }}">

    </script>

    @auth
        @if(\Illuminate\Support\Facades\Auth::user()->name == 'admin')
            <div class="container ">
                <div class="row ">
                    <div class="col-12 text-center">
                        <div class="mb-3">
                            <a href="{{ url('add-pokedex') }}" class="btn btn-success mojeTlacitko" role="button">Add
                                new pokemon to
                                pokedex</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endauth



    <div class="wrapper">
        <div class="cards_wrap ">
            @foreach($pokedexes as $pokedex)


                <div class="card_item pokedex_{{ $pokedex->id }}  ">
                    <div class="card_inner mojePozadieKarticky">
                        <div class="card_top">
                            <img src="{{ asset('public/images/'.$pokedex->image) }}"
                                 class="center  mojMalyObrazok  "
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
                                        @if(\Illuminate\Support\Facades\Auth::user()->name == 'admin')
                                            <li class="list-group-item">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12 text-center">
                                                            <a href="{{ url('edit-pokedex/'.$pokedex->id) }}"
                                                               class="btn btn-warning">Edit</a>

                                                            <button value="{{$pokedex->id}}"
                                                                    class="deletePokedex btn btn-danger"
                                                                    id="complexConfirm">Delete
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
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
