<?php

use Illuminate\Support\Facades\Route;

// LMS USER
Route::get('/allcourse', function () {
    return view('lms user/lmsindex');
});
Route::get('/edukasi', function () {
    return view('lms user/edukasiC');
});
Route::get('/research', function () {
    return view('lms user/research');
});
Route::get('/blockchain', function () {
    return view('lms user/blockchain');
});
Route::get('/curency', function () {
    return view('lms user/curency');
});
Route::get('/forum', function () {
    return view('lms user/forum');
});
Route::get('/market', function () {
    return view('lms user/market');
});
Route::get('/mentor', function () {
    return view('lms user/mentor');
});
Route::get('/tools', function () {
    return view('lms user/tools');
});
// LMS USER END