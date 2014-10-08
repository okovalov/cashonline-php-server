<?php

Route::group(array('prefix' => 'admin'), function () {
    Route::get('login', array('as' => 'admin.login', 'uses' => 'AdminAuthController@getLogin'));
    Route::post('login', array('as' => 'admin.login.post', 'uses' => 'AdminAuthController@postLogin'));
    Route::get('logout', array('as' => 'admin.logout', 'uses' => 'AdminAuthController@getLogout'));
});

Route::group(array('before' => 'auth'), function () {
    Route::get('/', array('as' => 'home', 'uses' => 'AccountsController@index'));
    Route::resource('accounts', 'AccountsController');
});
