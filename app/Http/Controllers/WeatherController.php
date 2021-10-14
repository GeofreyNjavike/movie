<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        return view('forecast');
    }
}
