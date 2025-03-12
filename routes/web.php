<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.pages.home');
})->name('home');

Route::get('/forum', function () {
    return redirect('https://discord.gg/ZBYYVTsPbe');
})->name('forum');

Route::get('/discord', function () {
    return redirect('https://discord.gg/ZBYYVTsPbe');
})->name('discord');

Route::get('/github', function () {
    return redirect('https://github.com/AN-Hosting/docs.anhosting.fr');
})->name('github');

Route::get('armareforger', function () {
    return view('home.pages.armareforger.index');
})->name('armareforger.index');

Route::get('armareforger/config', function () {
    return view('home.pages.armareforger.config');
})->name('armareforger.config');

Route::get('armareforger/opti', function () {
    return view('home.pages.armareforger.opti');
})->name('armareforger.opti');

Route::get('armareforger/restart', function () {
    return view('home.pages.armareforger.restart');
})->name('armareforger.restart');

Route::get('armareforger/scenario', function () {
    return view('home.pages.armareforger.scenario');
})->name('armareforger.scenario');

Route::get('armareforger/setting', function () {
    return view('home.pages.armareforger.setting');
})->name('armareforger.setting');

Route::get('armareforger/settingpsn', function () {
    return view('home.pages.armareforger.settingpsn');
})->name('armareforger.settingpsn');

Route::get('armareforger/gamemaster', function () {
    return view('home.pages.armareforger.gamemaster');
})->name('armareforger.gamemaster');