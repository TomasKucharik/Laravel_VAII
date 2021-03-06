@extends('layouts.app')



@section('content')

    @auth
        <div class="container ">
            <div class="row ">
                <div class="col-12 text-center">
                    <div class="mb-3">
                        <a href="{{ url('add-news') }}" class="btn btn-success mojeTlacitko" role="button">Add news</a>
                    </div>
                </div>
            </div>
        </div>
    @endauth


    <div class="container">
        @foreach($newses as $news)
            <div id="intro" class="p-5 text-center jumbotron mt-5">
                <h1 class="mb-0 h4"> {{ $news->title }}</h1>
            </div>


            <div class="container">
                <div class="row mt-5">
                    <div class="col-4">
                        <img src="{{ asset('public/images/'.$news->image) }}"
                             class="img-fluid shadow-2-strong rounded-5 mb-4" alt=""/>
                    </div>
                    <div class="col-8">
                        <p>{{ ($news->text) }}</p>
                    </div>
                </div>
            </div>

            <div class="progress">
                <div class="progress-bar" style="width:100%"></div>
            </div>
        @endforeach


    </div>




@endsection
