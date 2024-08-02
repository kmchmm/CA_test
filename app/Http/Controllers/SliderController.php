<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;


class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        return view('welcome', compact('sliders'));
    }

    // public function getSliders(){
    //     $sliders = Slider::all();
    //     return response()->json($sliders);
    // }
}
