@extends('layout.template')

@section('content')
<div class = "container">
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Created At</th>
            <th>Update At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($points as $point)
        <tr>
            <td>{{ $point->id }}</td>
            <td>{{ $point->name }}</td>
            <td>{{ $point->description }}</td>
            <td>
                <img src="{{ asset('storage/images/' . $point->image) }}" alt=""
                width="200" title="{{ $point->image }}">
            </td>
            <td>{{ $point->created_at }}</td>
            <td>{{ $point->updated_at }}</td>
        </tr>
        @endforeach

        @foreach ($polylines as $polyline)
        <tr>
            <td>{{ $polyline->id }}</td>
            <td>{{ $polyline->name }}</td>
            <td>{{ $polyline->description }}</td>
            <td>
                <img src="{{ asset('storage/images/' . $polyline->image) }}" alt=""
                width="200" title="{{ $polyline->image }}">
            </td>
            <td>{{ $polyline->created_at }}</td>
            <td>{{ $polyline->updated_at }}</td>
        </tr>
        @endforeach

        @foreach ($polygons as $polygon)
        <tr>
            <td>{{ $polygon->id }}</td>
            <td>{{ $polygon->name }}</td>
            <td>{{ $polygon->description }}</td>
            <td>
                <img src="{{ asset('storage/images/' . $polygon->image) }}" alt=""
                width="200" title="{{ $polygon->image }}">
            </td>
            <td>{{ $polygon->created_at }}</td>
            <td>{{ $polygon->updated_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
