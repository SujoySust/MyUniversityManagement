<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('classrepresentator')->user();

    //dd($users);

    return view('classrepresentator.home');
})->name('home');

