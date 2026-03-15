@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Cars</div>

                    <div class="card-body">
                        <a href="{{ route('cars.create') }}" class="btn btn-success float-end">Add new Car</a>
                        <hr class="mt-5">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Reg Number</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Owner (Lecturer)</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cars as $car)
                                <tr>
                                    <td>{{ $car->reg_number }}</td>
                                    <td>{{ $car->brand }}</td>
                                    <td>{{ $car->model }}</td>
                                    <td>{{ $car->lecturer->name }} {{ $car->lecturer->surname }}</td>
                                    <td>
                                        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
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
