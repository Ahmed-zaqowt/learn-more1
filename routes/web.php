<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('users' , function(){
    return 'users' ;
});
/*
Route::get('users/profile/{name}' , function($name){
    return 'users profile ' . $name ;
});

Route::get('users/profile' , function(){
    return 'users profile ' ;
});*/
/*
Route::get('users/profile/{name?}' , function($name = null){
    if($name == null){
       return 'response null' ;
    }else{
     return 'users profile ' . $name ;
    }
});*/


Route::get('news/{id?}' , function($id = null){

    if($id != null ){
        return 'news ' . $id ;
    }

    return 'all news ... ' ;
});





Route::put('put' , function(){});
Route::delete('delete' , function(){});





























