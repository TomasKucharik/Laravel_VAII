@extends('layouts.app')



@section('content')


    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Stadiony</h4>
                <hr>
            </div>
            <div class="card-body">
                <div style="overflow-x: auto">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Trainer</th>
                            {{--                        <th>Action</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($stadions as $stadion)
                            <tr>
                                <td>{{ $stadion->id }}</td>
                                <td class="w-25">
                                    <img src="{{ asset('public/images/'.$stadion->image) }}"
                                         class="img-fluid img-thumbnail mojaVelkost" alt="...">
                                </td>
                                <td>{{ $stadion->name }}</td>
                                <td>{{ $stadion->description }}</td>
                                <td>{{ $stadion->trainer }}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




@endsection
