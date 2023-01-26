<?php

use App\Models\Country;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('/about', function () {
    return "Hi Aboout Page";
});
/*Route::get('/contact', function () {
    return "Hi Contact Page";
});*/

////Route::get('/post/{id}/{name}', function ($id, $name) {
//    return "This is post number " . $id . " " . $name;
//});

Route::get('admin/posts/example', array('as' => 'admin.home', function () {
    $url = route('admin.home');
    return "this url is " . $url;
}));

//Route::get('/posts',[PostsController::class,'index']);
//Route::get('/posts/{id}/{name}',[PostsController::class,'showPost']);
Route::get('/contact',[PostsController::class,'contact']);

Route::get('/insert', function (){
    DB::insert('insert into posts(title,content) values (?,?)',['PHP with Laravel','Laravel is the best thing that has happened to PHP']);
});
/*
Route::get('/read',function (){
   $results = DB::select('select * from posts where id=?',[1]);

   foreach ($results as $post){
       return $post->content;
   }
});*/

Route::get('/update',function (){
   $updated=DB::update('update posts set title="Update title" where id=?',[1]);
   return $updated;
});

Route::get('/delete',function (){
   $deleted=DB::delete('delete from posts where id=?',[2]);
   if ($deleted){
       echo "<h1>Deleted</h1>";
   }else{
       echo "<h1>Couldn't find it</h1>";
   }
});


/*
|--------------------------------------------------------------------------
| Eloquent
|--------------------------------------------------------------------------
*/

Route::get('/read',function (){
   $posts = Post::all();
   foreach ($posts as $post){
       return $post ->title;
   }
});

Route::get('/e-create',function (){
    Post::create(['title'=>'the create method','content'=>'WOW I\'am learning a lot!']);
});

Route::get('/forcedelete',function (){
    Post::onlyTrashed()->where('is_admin',0)->forceDelete();
});

/*
|--------------------------------------------------------------------------
| Eloquent Relationships
|--------------------------------------------------------------------------
*/

Route::get('/user/{id}/post',function ($id){
   return User::find($id)->post()->content;
});

Route::get('/post/{$id}/user', function ($id){
    return Post::find($id)->user->name;
});

Route::get('/user/{id}/role',function ($id){
    $user = User::find($id)->roles()->orderBy('id','desc')->get();

    return $user;

/*
    foreach ($user->roles as $role){
        return $role->name;
    }*/
});

Route::get('user/pivot',function (){
   $user=User::find(1);

   foreach ($user->roles as $role){
       echo $role->pivot->created_at;
   }
});

Route::get('/user/{id}/country',function ($id){
    //user'a ait countr_id ye göre çağırır.
    $country=Country::find($id);
    foreach ($country->posts as $post){
        return $post->title;
    }
});

//Polymorphic Relations

Route::get('user/photos',function (){
    $user=User::find(1);

    foreach ($user->photos as $photo){
        return $photo;
    }
});
Route::get('post/photos',function (){
    $post=Post::find(1);

    foreach ($post->photos as $photo){
        return $photo;
    }
});




