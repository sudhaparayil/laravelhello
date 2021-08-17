<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;

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

Route::get('/contact', [ContactUsFormController::class, 'createForm']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about-us', function () {
    return view('post.aboutus');
});
Route::get('/about/{id}/{name}', function () {
   // echo request("test");
   // die;

    $id = request("id");
    $name=request("name");
    $test=request("test");
    $data = [
        "message" => "this is a msg",
        "price" => "220",
        "items" => ["apple","orange","mango"],
        "id" => $id,
        "name" => $name,
        "test" => $test
    ];
    //return [$id,$name];
   return view('about',$data);
});
Route::get("/posts/{id}","App\Http\Controllers\PostsController@index");

Route::get("/article",function(){
 //$article=App\Models\Article::all();
 //$article=App\Models\Article::take(2)->get();
 $article=App\Models\Article::latest()->get();
//return view("post.list-article",["article"=>$articles]);
return view("post.list-article",[compact("articles")]);
 //dump($article);
});


Route::get("/list","App\Http\Controllers\ArticleController@index");
Route::get("/create","App\Http\Controllers\ArticleController@create");