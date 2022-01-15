@extends('layouts.app')



@section('content')
    @auth
        <div class="container ">
            <div class="row ">
                <div class="col-12 text-center">
                    <div class="mb-3">
                        <a href="{{ url('add-game') }}" class="btn btn-success" role="button">Add new game</a>
                    </div>
                </div>
            </div>
        </div>
    @endauth


    <div class="container">
        <div class="container-table">
            <div class="row">
                <div class="col-12">
                    <table class="table table-image">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Release</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($games as $game)
                            <tr>

                                <th scope="row"> {{ $game->id }}</th>
                                <td class="w-25">
                                    <img src="{{ asset('public/images/'.$game->image) }}"
                                         class="img-fluid img-thumbnail mojaVelkost" alt="...">
                                </td>
                                <td>{{ $game->name }}</td>
                                <td>{{$game->release}}</td>
                                <td><a href="{{ url('edit-game/'.$game->id) }}"
                                       class="btn btn-warning">Edit</a>
                                    <a href="{{ url('delete-game/'.$game->id) }}"
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

@endsection
