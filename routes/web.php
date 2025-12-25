<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/


Route::get('/', function () {
    return redirect('/home');
});

        // HOME
Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

        // ABOUT 
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Rahmad Alvian Andrianto",
        "kelas" => "Teknik Informatika - Universitas Duta Bangsa",
        "hobi" => [
            "Web Development", 
            "Merakit PC & Hardware", 
            "Server Administration (Linux)", 
            "IoT & Arduino"
        ]
    ]);
});

        // KONTAK
Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Contact"
    ]);
});