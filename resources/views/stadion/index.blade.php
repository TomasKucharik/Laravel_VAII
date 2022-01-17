@extends('layouts.app')

@section('content')
    @auth
        <div class="container ">
            <div class="row ">
                <div class="col-12 text-center">
                    <div class="mb-3">
                        <a href="{{ url('add-stadion') }}" class="btn btn-success" role="button">Add news</a>
                    </div>
                </div>
            </div>
        </div>
    @endauth


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
                                <th scope="col">Name</th>
                                <th scope="col">Desciption</th>
                                <th scope="col">Trainer</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($stadions as $stadion)
                                <tr>

                                    <th scope="row"> {{ $stadion->id }}</th>
                                    <td class="w-25">
                                        <img src="{{ asset('public/images/'.$stadion->image) }}"
                                             class="img-fluid img-thumbnail mojaVelkost" alt="...">
                                    </td>
                                    <td>{{ $stadion->name }}</td>
                                    <td>{{$stadion->description}}</td>
                                    <td>{{$stadion->trainer}}</td>
                                    <td><a href="{{ url('edit-stadion/'.$stadion->id) }}"
                                           class="btn btn-warning">Edit</a>
                                        <a href="{{ url('delete-stadion/'.$stadion->id) }}"
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
