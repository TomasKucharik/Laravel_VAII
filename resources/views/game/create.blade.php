@extends('layouts.app')

@section('content')
    <div class="form-group text-danger">
        @foreach($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </div>

    <div class="container">
        <form method="post" action="{{ url('game') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group ">
                <label for="name">name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name" required
                       pattern="[A-Za-z]{1,32}" maxlength="32" minlength="1"
                       value="{{ old('name',@$game->name)  }}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
            </div>

            <div class="form-group ">
                <label for="release">Release</label>
                <input type="number" class="form-control" id="release" name="release"
                       placeholder="Enter value" value=" {{ @$games->release }}" required min="1990" max="2022">
            </div>

            <div class="form-group ">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Description" required
                       pattern="[A-Za-z]{1,32}" maxlength="32" minlength="1"
                       value="{{ old('name',@$game->name)  }}">
            </div>


            <div class="form-group">
                <button type="submit" class="btn-primary form-control btn-sm">Submit</button>
            </div>


        </form>
    </div>

@endsection
