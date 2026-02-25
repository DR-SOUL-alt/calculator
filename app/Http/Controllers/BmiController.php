<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function index()
    {
        return view('bmi');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'weight' => 'required|numeric|min:1|max:500',
            'height' => 'required|numeric|min:50|max:300',
        ]);

        $weight = $request->weight;
        $height = $request->height / 100;

        $bmi = $weight / ($height * $height);
        $bmi = round($bmi, 2);


        if ($bmi < 18.5) {
            $category = 'Not enough weight';
            $color = 'warning';
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            $category = 'Normal weight';
            $color = 'success';
        } elseif ($bmi >= 25 && $bmi < 30) {
            $category = 'Overweight';
            $color = 'warning';
        } elseif ($bmi >= 30 && $bmi < 35) {
            $category = 'Obesity 1-st degree';
            $color = 'danger';
        } elseif ($bmi >= 35 && $bmi < 40) {
            $category = 'Obesity 2-nd degree';
            $color = 'danger';
        } else {
            $category = 'Obesity 3-rd degree';
            $color = 'danger';
        }

        return view('bmi', compact('bmi', 'category', 'color', 'weight', 'height'));
    }
}
