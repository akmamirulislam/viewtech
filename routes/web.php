<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('viewtech.pages.home');
});

////////// Home Controller //////////

// home route
Route::get('/home', 'HomeController@index');
// about route
Route::get('/about', 'HomeController@getAbout');
// contact route
Route::get('/contact', 'HomeController@getContact');
// testimonials route
Route::get('/testimonials', 'HomeController@getAllTestimonials');
// Blog routes
Route::get('/blog', 'HomeController@getAllBlogs');
Route::get('/blog-details', 'HomeController@getBlogDetails');
// Project routes
Route::get('/projects', 'HomeController@getAllProjects');
Route::get('/project-details', 'HomeController@getProjectDetails');
// services routes
Route::get('/services', 'HomeController@getAllServices');
Route::get('/services-architectural-planning', 'HomeController@getServiceOne');
Route::get('/services-decoration-furniture', 'HomeController@getServiceTwo');
Route::get('/services-landscape-design', 'HomeController@getServiceThree');
Route::get('/services-interior-design', 'HomeController@getServiceFour');
Route::get('/services-sustainable-design', 'HomeController@getServiceFive');
Route::get('/services-urban-design', 'HomeController@getServiceSix');



////////// Contact Controller //////////

// contact create route
Route::post('/contacts', 'ContactController@storeContact');



////////// Name Controller //////////
////////// Name Controller //////////
////////// Name Controller //////////
////////// Name Controller //////////
////////// Name Controller //////////
////////// Name Controller //////////

