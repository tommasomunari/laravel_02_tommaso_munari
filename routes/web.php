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
    $squadre = [
        ["id"=> 1, "nome"=> "milan", "anno"=> 1899],
        ["id"=> 2,"nome"=> "juventus", "anno"=> 1901],
        ["id"=> 3,"nome"=> "genoa", "anno"=> 1893],
        ["id"=> 4,"nome"=> "sampdoria", "anno"=> 1946],
        ["id"=> 5,"nome"=> "real madrid", "anno"=> 1902],
        ["id"=> 6,"nome"=> "barcellona", "anno"=> 1899],
        ["id"=> 7,"nome"=> "atletico madrid", "anno"=> 1903],
        ["id"=> 8,"nome"=> "athletic bilbao", "anno"=> 1898],
        ["id"=> 9,"nome"=> "manchester united", "anno"=> 1878],
        ["id"=> 10,"nome"=> "liverpool", "anno"=> 1892],
        ["id"=> 11,"nome"=> "arsenal", "anno"=> 1886],
        ["id"=> 12,"nome"=> "chelsea", "anno"=> 1905]
    ];
    return view('totale', ["squadre"=>$squadre]);
})->name("totale1");


Route::get('/all/dettaglio/{id}', function ($id){
    $squadre = [
        ["id"=> 1, "nome"=> "milan", "anno"=> 1899],
        ["id"=> 2,"nome"=> "juventus", "anno"=> 1901],
        ["id"=> 3,"nome"=> "genoa", "anno"=> 1893],
        ["id"=> 4,"nome"=> "sampdoria", "anno"=> 1946],
        ["id"=> 5,"nome"=> "real madrid", "anno"=> 1902],
        ["id"=> 6,"nome"=> "barcellona", "anno"=> 1899],
        ["id"=> 7,"nome"=> "atletico madrid", "anno"=> 1903],
        ["id"=> 8,"nome"=> "athletic bilbao", "anno"=> 1898],
        ["id"=> 9,"nome"=> "manchester united", "anno"=> 1878],
        ["id"=> 10,"nome"=> "liverpool", "anno"=> 1892],
        ["id"=> 11,"nome"=> "arsenal", "anno"=> 1886],
        ["id"=> 12,"nome"=> "chelsea", "anno"=> 1905]
    ];
    foreach ($squadre as $squadra) {
        if($id == $squadra["id"]){
            return view ("dettaglio", ["squadra"=>$squadra]);
        }
    }
})->name("dettaglio1");

