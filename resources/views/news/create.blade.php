@extends('layouts.app')

@section('content')
    <div class="form-group text-danger">
        @foreach($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </div>

    <div class="container">
        <form method="post" action="{{ url('news') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group ">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title" required
                       pattern="[A-Za-z]{1,32}" maxlength="32" minlength="1"
                       value="{{ old('title',@$news->title)  }}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
            </div>

            <div class="form-group ">
                <label for="text">text</label>
                <input type="text" class="form-control" id="text" name="text"
                       placeholder="Enter text" value=" {{ @$news->text }}" required >
            </div>


            <div class="form-group">
                <button type="submit" class="btn-primary form-control btn-sm">Submit</button>
            </div>


        </form>
    </div>

@endsection
