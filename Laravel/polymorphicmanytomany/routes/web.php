<?php

use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

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

Route::get('/create', function () {
    $post = Post::create(['name' => "My First Post"]);
    $tag1 = Tag::find(1);
    $post->tags()->save($tag1);
    $video = Video::create(['name' => 'video.mov']);
    $tag2 = Tag::find(2);
    $video->tags()->save($tag2);
});

Route::get('/read/',function (){
   $post=Post::find(5);
   foreach ($post->tags as $tag){
       echo $tag;
   }
});

Route::get('/update',function (){
   $post=Post::find(5);
   foreach ($post->tags as $tag){
       return $tag->whereName('PHP')->update(['name'=>'Updated PHP']);
   }
});


