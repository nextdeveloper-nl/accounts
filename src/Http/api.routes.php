<?php

Route::prefix('accounts')->group(function () {
    Route::prefix('account')->group(function () {
        Route::get('/', 'Account\AccountController@index');
        Route::get('/{account}', 'Account\AccountController@show');
        Route::post('/', 'Account\AccountController@store');
        Route::put('/{account}', 'Account\AccountController@update');
        Route::delete('/{account}', 'Account\AccountController@destroy');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', 'User\UserController@index');
        Route::get('/{user}', 'User\UserController@show');
        Route::post('/', 'User\UserController@store');
        Route::put('/{user}', 'User\UserController@update');
        Route::delete('/{user}', 'User\UserController@destroy');
    });

    Route::prefix('account-type')->group(function () {
        Route::get('/', 'AccountType\AccountTypeController@index');
        Route::get('/{accounttype}', 'AccountType\AccountTypeController@show');
        Route::post('/', 'AccountType\AccountTypeController@store');
        Route::put('/{accounttype}', 'AccountType\AccountTypeController@update');
        Route::delete('/{accounttype}', 'AccountType\AccountTypeController@destroy');
    });

// EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
});