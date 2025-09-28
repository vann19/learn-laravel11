<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

$movies = [];

 for($i = 0; $i < 10; $i++) {
        $movies[] = [
            'title' => 'Movies' . $i,
            'year' => '2022',
            'genre' => 'Action',
        ];
    }

Route::get('/movie', function() use($movies) {
    return $movies;
});

Route::post('/movie', function () use($movies) {
    $movies[] = [
        'title' => request('title'),
        'year' => request('year'),
        'genre' => request('genre'),
    ];

    return $movies;
});

Route::put('/movie', function() use($movies) {
    $movies[3]['title'] = request('title'); 
    $movies[3]['year'] = request('year'); 
    $movies[3]['genre'] = request('genre'); 

    return $movies;
});
