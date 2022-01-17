@extends('layouts.app')

@section('content')
    <div class="form-group text-danger">
        @foreach($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </div>

    <div class="container">
        <form method="post" action="{{ url('pokedex') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group ">
                <label for="name">name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name" required
                        maxlength="32" minlength="1"
                       value="{{ old('name',@$pokedex->name)  }}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
            </div>

            <div class="form-group ">
                <label for="hp">hp</label>
                <input type="number" class="form-control" id="hp" name="hp"
                       placeholder="Enter value" value=" {{ @$pokedex->hp }}" required min="1" max="10">
            </div>

            <div class="form-group ">
                <label for="attack">Attack</label>
                <input type="number" class="form-control" id="attack" name="attack"
                       placeholder="Enter value" value=" {{ @$pokedex->attack }}" required min="1" max="10">
            </div>

            <div class="form-group ">
                <label for="defense">Defense</label>
                <input type="number" class="form-control" id="defense" name="defense"
                       placeholder="Enter value" value=" {{ @$pokedex->defense }}" required min="1" max="10">
            </div>


            <div class="form-group">
                <button type="submit" class="btn-primary form-control btn-sm">Submit</button>
            </div>


        </form>
    </div>

@endsection
