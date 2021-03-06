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
        <form method="post" action="{{ url('update-news/'.$news->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group ">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title" required
                       maxlength="32" minlength="1"
                       value="{{ old('title',@$news->title)  }}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
            </div>

            <div class="form-group ">
                <label for="text">text</label>
                <input type="text" class="form-control" id="text" name="text"
                       placeholder="Enter text" value=" {{ old('text',@$news->text)}}" required >
            </div>


            <div class="form-group">
                <button type="submit" class="btn-primary form-control btn-sm">Submit</button>
            </div>


        </form>
    </div>

@endsection
