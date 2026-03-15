<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('lecturer')->get();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $lecturers = Lecturer::all();
        return view('cars.create', compact('lecturers'));
    }

    public function store(Request $request)
    {
        Car::create($request->all());
        return redirect()->route('cars.index');
    }

    public function edit(Car $car)
    {
        $lecturers = Lecturer::all();
        return view('cars.edit', compact('car', 'lecturers'));
    }

    public function update(Request $request, Car $car)
    {
        $car->update($request->all());
        return redirect()->route('cars.index');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index');
    }
}
