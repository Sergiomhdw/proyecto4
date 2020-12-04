<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Image;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',[App\Http\Controllers\HomeController::class, 'admin'])->name('admin');



Route::get('cosas', function (){
    $images = Image::all();
    foreach($images as $image){
    echo "<br>".$image->image_path;
    echo "<br>".$image->description;
    echo "<br>".$image->user->name." ".$image->user->surname;
    //Si la imagen tiene asociado algun comentario
    if(count($image->comments) >= 1){
    echo '<h4>Comentarios:</h4>';
    foreach($image->comments as $comment){
    echo "#>".$comment->user->name.' '.$comment->user->surname.":";
    echo $comment->content."<br>";
    }
    }
    echo "<br>@>LIKES: ". count($image->likes);
    echo "<hr>";
    }
});