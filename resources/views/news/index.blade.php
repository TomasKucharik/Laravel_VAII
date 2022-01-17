@extends('layouts.app')

{{--<link href="{{ asset('css/karticka.css') }}" rel="stylesheet">--}}

@section('content')
    @auth
        <div class="container ">
            <div class="row ">
                <div class="col-12 text-center">
                    <div class="mb-3">
                        <a href="{{ url('add-news') }}" class="btn btn-success" role="button">Add news</a>
                    </div>
                </div>
            </div>
        </div>
    @endauth


    {{--    <div class="row">--}}
    {{--        <div class="col-4"></div>--}}
    {{--        <div class="col-4">--}}
    {{--            <table class="table-striped table-bordered table">--}}
    {{--                <thead>--}}
    {{--                <tr>--}}
    {{--                    <th>Title</th>--}}
    {{--                    <th>text</th>--}}
    {{--                </tr>--}}
    {{--                </thead>--}}

    {{--                <tbody>--}}
    {{--                @foreach($newses as $new)--}}
    {{--                    <tr>--}}
    {{--                        <td> {{ $new->title}} </td>--}}

    {{--                        <td> {{ $new->text}} </td>--}}
    {{--                    </tr>--}}
    {{--                @endforeach--}}
    {{--                </tbody>--}}

    {{--            </table>--}}
    {{--        </div>--}}
    {{--        <div class="col-4"></div>--}}
    {{--    </div>--}}
    {{--    </div>--}}
    <div class="container">
        <div class="container-table">
            <div class="row">
                <div class="col-12">
                    <div style="overflow-x: auto">
                        <table class="table table-image">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">text</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($newses as $news)
                                <tr>

                                    <th scope="row"> {{ $news->id }}</th>
                                    <td class="w-25">
                                        <img src="{{ asset('public/images/'.$news->image) }}"
                                             class="img-fluid img-thumbnail mojaVelkost" alt="...">
                                    </td>
                                    <td>{{ $news->title }}</td>
                                    <td>{{$news->text}}</td>
                                    <td><a href="{{ url('edit-news/'.$news->id) }}"
                                           class="btn btn-warning">Edit</a>
                                        <a href="{{ url('delete-news/'.$news->id) }}"
                                           class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
