@extends('layouts.app')

@section('content')
    <div class="form-group text-danger">
        @foreach($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </div>

    <div class="container">
        <form method="POST" action="{{ url('stadion') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group ">
                <label for="name">name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name" required
                       pattern="[A-Za-z]{1,32}" maxlength="32" minlength="1"
                       value="{{ old('name',@$stadion->name)  }}" >
            </div>

            <div class="form-group">
{{--                <label for="exampleFormControlFile1">Example file input</label>--}}
{{--                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>--}}
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input class="form-control" type="file" id="formFileMultiple" name="image" required multiple />
            </div>

            <div class="form-group ">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                       placeholder="Enter description" value=" {{ @$stadion->description }}" required >
            </div>

            <div class="form-group ">
                <label for="trainer">Trainer name</label>
                <input type="text" class="form-control" id="trainer" name="trainer"
                       placeholder="Enter text" value=" {{ @$stadion->trainer }}" required >
            </div>




            <div class="form-group">
                <button type="submit" class="btn-primary form-control btn-sm">Submit</button>
            </div>


        </form>
    </div>

@endsection
