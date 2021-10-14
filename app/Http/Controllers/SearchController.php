<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query =  $request->data;
        $req = 'https://api.themoviedb.org/3/search/multi?api_key=' . env('API_KEY') . '&language=en-US&query=' . $query . '&page=1&include_adult=false';
        $results = Http::get($req)->json();
        $results = $results['results'][0];
        return view('search', ['results' => $results]);
    }
}
