@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Lecturers</div>

                    <div class="card-body">
                        <a href="{{ route('lecturers.create') }}" class="btn btn-success float-end">Add new Lecturer</a>
                        <hr class="mt-5">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Birth date</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Cars</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lecturers as $lecturer)
                                <tr>
                                    <td>{{ $lecturer->name }}</td>
                                    <td>{{ $lecturer->surname }}</td>
                                    <td>{{ $lecturer->birthday }}</td>
                                    <td>{{ $lecturer->phone }}</td>
                                    <td>{{ $lecturer->email }}</td>
                                    <td>
                                        @foreach($lecturer->cars as $car)
                                            {{ $car->brand }} {{ $car->model }} ({{ $car->reg_number }})<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST" style="display:inline">
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
