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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post', function () {
//     return view('post');
// });

// Another way to create rout
// creating rout alwas remember first param it route name and second param is view name.
// Route::view('/post', 'post');

// Create rout with different view.
// Route::get('/helloAmbikesh', function () {
//     return view('post');
// });

// Create sub rout.
// Route::get('/post/firstpost', function(){
//     return view('firstpost');
// });

// Create sub routes:
// Route::put('/update/getElemetnt:id' , function() {
//     return view("This is my update the resourses there are two types are data This is not founding data");
// });

// Pass parameters in the routes
// Route::get('post/{id?}', function(string $id = null ){
//     if($id){
//         return "<h1> Post ID : " . $id . "</h1>";
//     }
//     return "<h1> No ID found </h1>";
// }); 


// Pass multiple paramts in multiple routes with multiple parameters

// Route::get('/post/{id?}/comment/{comment_id?}', function(string $id=null, string $comment_id=null){
//     if($id){
//         return "<h1> Post ID : " . $id . "comment ID is " . $comment_id . "</h1>";
//     }else{
//         return "<h1> No ID and comment found </h1>";
//     }
    
// });


/**
 * How to validate paramters with type, so lets say you want user should enter specific type of parameter then you can restrict them
 * -----------------------------------------------------------------------------------------------------------------------------
 * 
 * There are three ways ( functions ) that you can use to validate
 *  Only Numbers ---> http://localhost/post/10 ============> whereNummber('id') | id is the paramter
 *  Only Alphabests ---> http://localhost/post/room =======> whereAlpha('room')
 *  Alphaand Numeri both ----> http://localhost/post/room10 ====> whereAlphaNumeric('room20')
 *  Validate Alphabets ------> http://localhost/song ============> whereIn('category', ['movie', 'song'])
 *  Validate with Regular Expression ----> http://localhost/@10room =======> where('id', '[@0-9+]')
 */

 // For numeric values
 /**
    Route::get('/post/{id}', function(string $id){
        if($id){
            return "<h1> Post ID : " . $id . "</h1>";
        }else{
            return "<h1> No ID found </h1>";
        }
    })->whereNumber('id'); // Only for number
  */


// For Alphabetic values
  /**
    Route::get('/post/{id}', function(string $id){
        if($id){
            return "<h1> Post ID : " . $id . "</h1>";
        }else{
            return "<h1> No ID found </h1>";
        }
    })->whereAlpha('id'); // Only for number
  */

  // For AlphaNumeric Values
  /**
    Route::get('/post/{id}', function(string $id){
        if($id){
            return "<h1> Post ID : " . $id . "</h1>";
        }else{
            return "<h1> No ID found </h1>";
        }
    })->AlphaNumeric('id'); // Only for number
  */


   // For whereIn Values
  /**
    Route::get('/post/{id}', function(string $id){
        if($id){
            return "<h1> Post ID : " . $id . "</h1>";
        }else{
            return "<h1> No ID found </h1>";
        }
    })->whereIn('id', ['room', 'service', 'partner', 'flate']); // Only for number  
  */

  // For Regular Expression
  /**
    Route::get('/post/{id}', function(string $id){
        if($id){
            return "<h1> Post ID : " . $id . "</h1>";
        }else{
            return "<h1> No ID found </h1>";
        }
    })->where('id','[0-9]+' ; // Only number allowed  
  */


  // For Regular Expression
  /**
    Route::get('/post/{id}', function(string $id){
        if($id){
            return "<h1> Post ID : " . $id . "</h1>";
        }else{
            return "<h1> No ID found </h1>";
        }
    })->where('id','[a-zA-Z]+' ; // Only character allowed  
  */

  /**
   * -------------------------------------------------------------------------------------------------------------------------
   *  ============================= LET'S DISCUSS ABOUT NAMING ROUTE =========================================================
   * 
   *  DEFINITION : This 'name' function helps to set the route route default name so lets say if future you're going to change the
   *  route name then this help you to keep you other route name as it is it just it will change to loadinng view file
   * -------------------------------------------------------------------------------------------------------------------------
   * 
   * 
   */

  Route::get('/post',function(){
    return view('post');
  })->name('post');


Route::get('/about', function(){
    return view('about');
})->name('about');

