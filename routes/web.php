<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
	return '<h1>Halo Bray!!!!</h1>'
	.'Selamat datang di webapp asepsaepul<br>'
	.'Laravel,emang keren.';
});

Route::get('/about/1', function(){
	return '<h1>Saya Adalah Asep saepul Rohmat</h1>';
});

Route::get('/about/{page}', function($a){
	return '<h1>ini halaman about + '.$a.'</h1>';
});	
Route::get ('/kantin', function(){
	return view('kantin');
});
Route::get('/kantin/{asep}/{b}/{c}',function($a,$b,$c){
	return '<h1>Makananya :<br>'.$a.'</h1>'
	.'<h1>Minumanya :<br> '.$b.'</h1>'
	.'<h1>Tambah Cemilan :<br> '.$c.'</h1>';
});
Route::get('user/{name?}',function($name = 'Asep'){
  return 'Nama saya '.$name;	
});