<?php

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
    return view('/frontend/home');
});
Route::get('/about-us', function () {
    return view('frontend/aboutus');
});
Route::get('/contact-us', function () {
    return view('frontend/contactus');
});
Route::get('/services/all', function () {
    return view('frontend.services.all-services');
});
Route::get('/services-details', function () {
    return view('frontend.services.services-details');
});

Route::get('/portfolio', function () {
    return view('frontend/portfolio/portfolio');
});
Route::get('/portfolio/projects-details', function () {
    return view('frontend/portfolio/project-details');
});
// Route::get('/projects-detail', function () {
//     return view('projects-detail');
// });
Route::get('/services/laravel-development', function () {
    return view('frontend.services.phpframeworks.laravel-development');
});

Route::get('/services/yii-development', function () {
    return view('frontend.services.phpframeworks.yii-development');
});

Route::get('/services/codeigniter-development', function () {
    return view('frontend.services.phpframeworks.codeigniter-development');
});
Route::get('/services/nodejs-development', function () {
    return view('frontend.services.jsframeworks.nodejs-development');
});
Route::get('/services/react-development', function () {
    return view('frontend.services.jsframeworks.react-development');
});
Route::get('/services/vue-development', function () {
    return view('frontend.services.jsframeworks.vue-development');
});
Route::get('/services/angular-development', function () {
    return view('frontend.services.jsframeworks.angular-development');
});
Route::get('/services/wordpress-development', function () {
    return view('frontend.services.cms-development.wordpress');
});
Route::get('/services/drupal-development', function () {
    return view('frontend.services.cms-development.drupal');
});
Route::get('/services/magento-development', function () {
    return view('frontend.services.cms-development.magento');
});
Route::get('/services/joomla-development', function () {
    return view('frontend.services.cms-development.joomla');
});
Route::get('/services/android-app-development', function () {
    return view('frontend.services.mobile-development.android');
});
Route::get('/services/ios-app-development', function () {
    return view('frontend.services.mobile-development.ios');
});
Route::get('/services/online-marketing', function () {
    return view('frontend.services.digital-marketing.index');
});
Route::get('/services/open-source-development', function () {
    return view('frontend.services.open-source-development');
});
Route::get('/services/python-development', function () {
    return view('frontend.services.python-development');
});
Route::get('/our-products', function () {
    return view('frontend.products.index');
});

Route::get('/training', function () {
    return view('frontend/training');
});

Route::get('/testimonial', function () {
    return view('frontend.testimonial');
});

// Route::resource('laravel-developement','ServicesController');