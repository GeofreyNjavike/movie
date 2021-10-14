<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = 'https://api.themoviedb.org/3/movie/11?api_key=e9da8ad14faa2d50aa6453fd09945e52';
        $trending = 'https://api.themoviedb.org/3/trending/movie/day?api_key=e9da8ad14faa2d50aa6453fd09945e52';
        $pop = 'https://api.themoviedb.org/3/movie/popular?api_key=e9da8ad14faa2d50aa6453fd09945e52&language=en-US&page=1';
        $vid = 'https://api.themoviedb.org/3/movie/550/videos?api_key=e9da8ad14faa2d50aa6453fd09945e52&language=en-US';
        $latest = 'https://api.themoviedb.org/3/movie/latest?api_key=e9da8ad14faa2d50aa6453fd09945e52&language=en-US';
        $video = Http::get($vid)->json();
        $trending = Http::get($trending)->json();
        $response = Http::get($data);
        $response = $response->json();
        $trending = $trending['results'][0];
        $latest = Http::get($latest);
        $popular = Http::get($pop)->json();
        $trend =  $popular['results'];
        return view('welcome', ['response' => $response, 'trending' => $trending, 'trend' => $trend]);
    }

    public function review(Request $request, $id)
    {
        $details = 'https://api.themoviedb.org/3/movie/' . $id . '?api_key=e9da8ad14faa2d50aa6453fd09945e52&language=en-US';
        $cast = 'https://api.themoviedb.org/3/movie/' . $id . '/credits?api_key=e9da8ad14faa2d50aa6453fd09945e52&language=en-US';
        $data = Http::get($details)->json();
        $cast = Http::get($cast)->json();
        return view('movie', compact('data', 'cast'));
    }
}
