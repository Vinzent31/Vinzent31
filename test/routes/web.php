<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    $nama = 'Vinzent Gabriel';
    $umur = '16';
    return view('welcome', ['data' => $nama], ['umur' => 16]);
    // return view ('welcome', compact('data', 'umur'));
    // return view('welcome')
    // -> with('data', 'Jijijijja')
    // -> with ('umur', 19);
});

Route::get('/about', function (){
    $nama = 'Gabriel';
    $umur = 16;
    return view ('about', ['data' => $nama ], ['um' => $umur]);
});

Route :: get ('/index', function (){
  $data = [
    ['nomor' => 1. ,'nama' => 'Vinzent', 'nilai' => 90, 'id'=> '  001'],
    ['nomor' => 2. ,'nama' => 'Gabriel', 'nilai' => 80, 'id'=>'  002'],
    ['nomor' => 3. , 'nama' => 'Pratama', 'nilai' => 70, 'id'=>'  003']
  ];
    return view('siswa.index', ['data' => $data]);
});


Route :: get ('/show/{id}', function ($id){
    // dd($id);
    return view ('siswa.show', ['id' => $id]);
});

Route::get ('/contact', function(){
      return view ('contact');
});