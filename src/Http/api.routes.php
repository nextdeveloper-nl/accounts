<?php

Route::prefix('accounts')->group(function() {
        Route::get('/', 'Account\AccountController@index');
        Route::get('/{accounts}', 'Account\AccountController@show');
        Route::post('/', 'accounts\accountsController@store');
        Route::put('/{accounts}', 'Account\AccountController@update');
        Route::delete('/{accounts}', 'Account\AccountController@destroy');

Route::prefix('users')->group(function () {
        Route::get('/', 'User\UserController@index');
        Route::get('/{users}', 'User\UserController@show');
        Route::post('/', 'users\usersController@store');
        Route::put('/{users}', 'User\UserController@update');
        Route::delete('/{users}', 'User\UserController@destroy');
    });

Route::prefix('account-types')->group(function () {
        Route::get('/', 'AccountType\AccountTypeController@index');
        Route::get('/{account-types}', 'AccountType\AccountTypeController@show');
        Route::post('/', 'account-types\account-typesController@store');
        Route::put('/{account-types}', 'AccountType\AccountTypeController@update');
        Route::delete('/{account-types}', 'AccountType\AccountTypeController@destroy');
    });

// EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
});