<?php


$module_namespace = "App\Modules\News\Routes";

Route::prefix('/news')->namespace($module_namespace)->group(function () {
    Route::get('/newspage', "NewsController@ListApproval");
    Route::get('/pendingnewspage', "NewsController@ListUnApproval");
    Route::post('/create', "NewsController@store");
    Route::get('/detail/{id}', "NewsController@show");
    Route::post('/update/{id}', "NewsController@update");
});