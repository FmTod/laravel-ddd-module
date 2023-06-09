@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Vehicle Details</h1>

        <p><strong>ID:</strong> {{ $vehicle->id }}</p>
        <p><strong>Name:</strong> {{ $vehicle->name }}</p>
        <p><strong>Manufacturer:</strong> {{ $vehicle->manufacturer }}</p>
        <p><strong>Year:</strong> {{ $vehicle->year }}</p>

        <h2>Parts</h2>

        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vehicle->parts as $part)
                <tr>
                    <td>{{ $part->id }}</td>
                    <td>{{ $part->name }}</td>
                    <td>{{ $part->price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>x
    </div>
@endsection
