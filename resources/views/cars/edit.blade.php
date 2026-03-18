@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Car</div>

                    <div class="card-body">
                        <form action="{{ route('cars.update', $car->id) }}" method="post">
                            @csrf
                            @method('put')

                            <div class="mb-3">
                                <label class="form-label">Registration Number:</label>
                                <input class="form-control" type="text" name="reg_number" value="{{ $car->reg_number }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Brand:</label>
                                <input class="form-control" type="text" name="brand" value="{{ $car->brand }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Model:</label>
                                <input class="form-control" type="text" name="model" value="{{ $car->model }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Owner (Lecturer):</label>
                                <select name="owner_id" class="form-control" required>
                                    <option value="">Select Owner</option>
                                    @foreach($owners as $owner)
                                    <option value="{{ $owner->id }}" {{ $owner->id == $car->owner_id ? 'selected' : '' }}>
                                        {{ $owner->name }} {{ $owner->surname }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <hr>
                            <button class="btn btn-success">Update Car</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
