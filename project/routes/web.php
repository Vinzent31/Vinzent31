<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    $data = [
        ['id'=> 001, 'nama' => 'Vinzent', 'nilai' => 90],
        ['id'=> 002, 'nama' => 'Gabriel', 'nilai' => 80],
        ['id'=> 003, 'nama' => 'Pratama', 'nilai' => 70],
    ] ;
    return view('welcome', ['data' => $data]);
});

Route :: get ('/about', function (){
    return view ('about');
});