<?php

use Illuminate\Support\Facades\Route;

// yaha pe '/' ka matlab hai ki ye hmari root directory yani main file ke url ko run
// karte hi use route kardegi view folder ke welcome.blade.php ki taraf

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post', function () {
//     return view('post');// ye kya hai view folder mein jaake meri post file ko run kardega
//     // return "<h1> this will work the same as above </h1>";// means ham koi file ko return karne ki jagah 
//     // directly html ka code bhi run kar sakte hai
// });

Route::view('/yoi','post');
// view method dusra tareeka hai routing ka rather than using get() method of route class
// '/yoi' - hogya hamaara URL keyword that initializes thE GIVen view file
// 'post' - hogyi hamari view file


// route ke andar subroute kaise create kare
Route::get('/yoi/koi', function () {
    return view('firstpost');
});
