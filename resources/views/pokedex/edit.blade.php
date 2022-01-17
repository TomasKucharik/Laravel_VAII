@extends('layouts.app')

@section('content')
    <div class="form-group text-danger">
        <div class="container">
        @foreach($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
        </div>
    </div>

    <div class="container">
        <form method="post" action="{{ url('update-pokedex/'.$pokedex->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group ">
                <label for="name">name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name"   maxlength="32" minlength="1"
                       value="{{ old('name',@$pokedex->name)  }}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" value="{{ old('image',@$pokedex->image)  }}">
            </div>

            <div class="form-group ">
                <label for="hp">hp</label>
                <input type="number" class="form-control" id="hp" name="hp"
                       placeholder="Enter value" value="{{ old('hp',@$pokedex->hp)  }}" required min="1" max="10">
            </div>

            <div class="form-group ">
                <label for="attack">Attack</label>
                <input type="number" class="form-control" id="attack" name="attack"
                       placeholder="Enter value" value="{{ old('attack',@$pokedex->attack)  }}" required min="1" max="10">
            </div>

            <div class="form-group ">
                <label for="defense">Defense</label>
                <input type="number" class="form-control" id="defense" name="defense"
                       placeholder="Enter value" value="{{ old('defense',@$pokedex->defense)  }}" required min="1" max="10">
            </div>


            <div class="form-group">
                <button type="submit" class="btn-primary form-control ">Submit</button>
            </div>


        </form>
    </div>

@endsection
