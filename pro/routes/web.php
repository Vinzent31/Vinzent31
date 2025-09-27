<?php

use Illuminate\Support\Facades\Route;

Route :: get ('/beranda', function (){
    return view ('beranda');
});

Route :: get ('/menu', function (){
    return view ('menu');
});

Route :: get ('/team', function (){
    return view ('team');
});