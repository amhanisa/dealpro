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
    $data['metaDescription'] = 'We are DealPro Indonesia. Providing a one-stop solution for your event marketing needs, from offline events to online activation.';
    return view('frontend.welcome', $data);
});

Route::get('/about-us', function () {
    $data['title'] = 'About Us';
    $data['metaDescription'] = 'Established 13 years ago, DealPro Indonesia is besotted one-stop solution for your event and marketing needs. With our wealth of experiences and creative ideas, we are ready to transform your concept of a wonderful moment into reality.';
    return view('frontend.about', $data);
});

Route::get('/career', function () {
    return view('frontend.career');
});

Route::get('/event', function () {
    $data['metaDescription'] = 'DealPro Event is both off air and hybrid event division of DealPro Indonesia. The passionate team of DealPro Event is ready to transform your idea of a great moment into something even more beautiful in reality.';
    return view('frontend.event', $data);
});

Route::get('/production', function () {
    $data['metaDescription'] = 'For more than 13 years, Deal Production has been a leading event production provider for numerous national and international events in Indonesia.';
    return view('frontend.production', $data);
});

Route::get('/printing', function () {
    $data['metaDescription'] = 'DealPrint Indonesia is eager to help your business with expertly designed printing necessities for branding and marketing purposes.';
    return view('frontend.printing', $data);
});

Route::get('/clothing', function () {
    // $data['metaDescription'] = 'Improve your fashion experience through customization.';
    // return view('frontend.dclth');
    return redirect("https://www.instagram.com/dclthoriginal/");
});

Route::get('/medical', function () {
    // $data['metaDescription'] = 'We encourage our medical workers to confidently help others with style without degrading their performance feature.';
    // return view('frontend.medical');
    return redirect("https://www.instagram.com/dealmedical/");
});

Route::get('/work-with-us', function () {
    return view('frontend.contact');
});

Route::get('/works', function () {
    return view('frontend.portofolio');
});

Route::get('/works/honda-live', function () {
    return view('frontend.work.honda-live');
});

Route::get('/works/honda-exhibition', function () {
    return view('frontend.work.honda-exhibition');
});

Route::get('/works/pupuk-indonesia', function () {
    return view('frontend.work.pupuk-indonesia');
});
