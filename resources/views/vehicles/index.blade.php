@extends('layouts.app')

@section('content')
    <h1 class="text-center">Vehicles</h1>
    <div class="container">
        <table class="table mt-3">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Year</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->name }}</td>
                    <td>{{ $vehicle->manufacturer }}</td>
                    <td>{{ $vehicle->year }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('vehicles.edit', $vehicle) }}">Edit</a>
                        <form method="POST" action="{{ route('vehicles.destroy', $vehicle) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
