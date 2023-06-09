@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Part Details</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $part->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $part->name }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ $part->price }}</td>
            </tr>
            <tr>
                <th>Vehicle ID</th>
                <td>{{ $part->vehicle_id }}</td>
            </tr>
            </tbody>
        </table>
        <a href="{{ route('parts.edit', ['id' => $part->id]) }}">Edit</a>
        <form method="POST" action="{{ route('parts.destroy', ['id' => $part->id]) }}" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-link text-danger">Delete</button>
        </form>
    </div>
@endsection
