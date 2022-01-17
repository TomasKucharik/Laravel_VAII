@extends('layouts.app')



@section('content')

    <div class="wrapper">
        <div class="cards_wrap">
            @foreach($games as $game)
                <div class="cardBoxFlip">
                    <div class="cardFlip">
                        <div class="frontFlip">
                            <img src="{{ asset('public/images/'.$game->image) }}" class="img-fluid rounded-circle">
                        </div>
                        <div class="backFlip">
                            <h3>Name</h3>
                            <p>{{ $game->name }}</p>
                            <h3>Release</h3>
                            <p>{{ $game->release }}</p>

                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

@endsection
