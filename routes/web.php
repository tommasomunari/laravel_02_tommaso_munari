<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("homepage");

Route::get('/campionato1', function () {
    $arraysquadre = [
        ["nome"=> "milan", "anno"=> 1899],
        ["nome"=> "juventus", "anno"=> 1901],
        ["nome"=> "genoa", "anno"=> 1893],
        ["nome"=> "sampdoria", "anno"=> 1946]
    ];
    return view('seriea', ["squadre"=>$arraysquadre]);
})->name("seriea1");

Route::get('/campionato2', function () {
    $arraysquadre2 = [
        ["nome"=> "real madrid", "anno"=> 1902],
        ["nome"=> "barcellona", "anno"=> 1899],
        ["nome"=> "atletico madrid", "anno"=> 1903],
        ["nome"=> "athletic bilbao", "anno"=> 1898]
    ];
    return view('laliga', ["squadre2"=>$arraysquadre2]);
})->name("laliga1");

Route::get('/campionato3', function () {
    $arraysquadre3 = [
        ["nome"=> "manchester united", "anno"=> 1878],
        ["nome"=> "liverpool", "anno"=> 1892],
        ["nome"=> "arsenal", "anno"=> 1886],
        ["nome"=> "chelsea", "anno"=> 1905]
    ];
    return view('premier', ["squadre3"=>$arraysquadre3]);
})->name("premier1");


Route::get('/all', function(){
    $arraytotale = [
        ["nome"=> "milan", "anno"=> 1899],
        ["nome"=> "juventus", "anno"=> 1901],
        ["nome"=> "genoa", "anno"=> 1893],
        ["nome"=> "sampdoria", "anno"=> 1946],
        ["nome"=> "real madrid", "anno"=> 1902],
        ["nome"=> "barcellona", "anno"=> 1899],
        ["nome"=> "atletico madrid", "anno"=> 1903],
        ["nome"=> "athletic bilbao", "anno"=> 1898],
        ["nome"=> "manchester united", "anno"=> 1878],
        ["nome"=> "liverpool", "anno"=> 1892],
        ["nome"=> "arsenal", "anno"=> 1886],
        ["nome"=> "chelsea", "anno"=> 1905]
    ];
    return view('totale', ["tutti"=>$arraytotale]);
})->name("totale1");


