<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <tr>
            <th >ID</th>
            <th >Image</th>
            <th >Name</th>
            <th >Description</th>
            <th >Trainer</th>
        </tr>
        @foreach($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td><img src="{{ asset('public/images/'.$row->image) }}"
                         class="img-fluid img-thumbnail mojaVelkost" alt="..."></td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->description }}</td>
                <td>{{ $row->trainer }}</td>

            </tr>
        @endforeach
    </table>

    {!! $data->links() !!}

</div>
