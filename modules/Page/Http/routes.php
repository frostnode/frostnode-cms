<?php

Route::group(
    [
        'middleware' => 'web',
        'prefix' => 'admin/pages',
        'as' => 'admin.pages.',
        'namespace' => 'Modules\Page\Http\Controllers'
    ],
    function () {
        Route::get('/', 'PageController@index')->name('index');
        Route::get('/page/select', 'PageController@select')->name('page.select');
        Route::get('/page/create/{id?}', 'PageController@create')->name('page.create');
        Route::resource('page', 'PageController', ['except' => [
            'index', 'create', 'show'
        ]]);
    }
);

Route::group(
    [
        'middleware' => 'web',
        'prefix' => 'admin/pagetypes',
        'as' => 'admin.pagetypes.',
        'namespace' => 'Modules\Page\Http\Controllers'
    ],
    function () {
        Route::get('/', 'PageTypeController@index')->name('index');
        Route::get('/update/{id?}', 'PageTypeController@update')->name('update');
    }
);

Route::any('/{slug}', 'Modules\Page\Http\Controllers\PageController@show')
    ->name('page.show')
    ->where('any', '.*');
