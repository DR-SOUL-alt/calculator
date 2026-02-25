@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Calculator of mass index (BMI)</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('bmi.calculate') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="weight" class="col-md-4 col-form-label text-md-end">mass (kg)</label>

                                <div class="col-md-6">
                                    <input id="weight" type="number" step="0.1" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ old('weight', $weight ?? '') }}" required>

                                    @error('weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="height" class="col-md-4 col-form-label text-md-end">Heigh (cm)</label>

                                <div class="col-md-6">
                                    <input id="height" type="number" step="0.1" class="form-control @error('height') is-invalid @enderror" name="height" value="{{ old('height', $height ?? '') }}" required>

                                    @error('height')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Calculate BMI
                                    </button>
                                </div>
                            </div>
                        </form>

                        @if(isset($bmi))
                            <hr>
                            <div class="alert alert-{{ $color }}" role="alert">
                                <h4 class="alert-heading">Result:</h4>
                                <p>Your BMI: <strong>{{ $bmi }}</strong></p>
                                <p>Category: <strong>{{ $category }}</strong></p>
                                <hr>
                                <p class="mb-0">
                                    @if($color == 'success')
                                        Great! Nice!
                                    @elseif($color == 'warning')
                                        Are u feeling good?
                                    @else
                                    DIET dude!
                                    @endif
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
