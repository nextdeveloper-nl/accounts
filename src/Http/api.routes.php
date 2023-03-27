<?php

Route::prefix('account')->group(function() {
    Route::prefix('account')->group(function () {
        Route::get('/', 'Account\AccountController@index');
        Route::get('/{account}', 'Account\AccountController@show');
        Route::post('/', 'Account\AccountController@store');
        Route::put('/{account}', 'Account\AccountController@update');
        Route::delete('/{account}', 'Account\AccountController@destroy');
    });

Route::prefix('accountaffiliationrule')->group(function () {
        Route::get('/', 'AccountAffiliationRule\AccountAffiliationRuleController@index');
        Route::get('/{accountaffiliationrule}', 'AccountAffiliationRule\AccountAffiliationRuleController@show');
        Route::post('/', 'AccountAffiliationRule\AccountAffiliationRuleController@store');
        Route::put('/{accountaffiliationrule}', 'AccountAffiliationRule\AccountAffiliationRuleController@update');
        Route::delete('/{accountaffiliationrule}', 'AccountAffiliationRule\AccountAffiliationRuleController@destroy');
    });

Route::prefix('accountbalancelog')->group(function () {
        Route::get('/', 'AccountBalanceLog\AccountBalanceLogController@index');
        Route::get('/{accountbalancelog}', 'AccountBalanceLog\AccountBalanceLogController@show');
        Route::post('/', 'AccountBalanceLog\AccountBalanceLogController@store');
        Route::put('/{accountbalancelog}', 'AccountBalanceLog\AccountBalanceLogController@update');
        Route::delete('/{accountbalancelog}', 'AccountBalanceLog\AccountBalanceLogController@destroy');
    });

Route::prefix('accountchannel')->group(function () {
        Route::get('/', 'AccountChannel\AccountChannelController@index');
        Route::get('/{accountchannel}', 'AccountChannel\AccountChannelController@show');
        Route::post('/', 'AccountChannel\AccountChannelController@store');
        Route::put('/{accountchannel}', 'AccountChannel\AccountChannelController@update');
        Route::delete('/{accountchannel}', 'AccountChannel\AccountChannelController@destroy');
    });

Route::prefix('accountinvite')->group(function () {
        Route::get('/', 'AccountInvite\AccountInviteController@index');
        Route::get('/{accountinvite}', 'AccountInvite\AccountInviteController@show');
        Route::post('/', 'AccountInvite\AccountInviteController@store');
        Route::put('/{accountinvite}', 'AccountInvite\AccountInviteController@update');
        Route::delete('/{accountinvite}', 'AccountInvite\AccountInviteController@destroy');
    });

Route::prefix('accounttype')->group(function () {
        Route::get('/', 'AccountType\AccountTypeController@index');
        Route::get('/{accounttype}', 'AccountType\AccountTypeController@show');
        Route::post('/', 'AccountType\AccountTypeController@store');
        Route::put('/{accounttype}', 'AccountType\AccountTypeController@update');
        Route::delete('/{accounttype}', 'AccountType\AccountTypeController@destroy');
    });

Route::prefix('accountuser')->group(function () {
        Route::get('/', 'AccountUser\AccountUserController@index');
        Route::get('/{accountuser}', 'AccountUser\AccountUserController@show');
        Route::post('/', 'AccountUser\AccountUserController@store');
        Route::put('/{accountuser}', 'AccountUser\AccountUserController@update');
        Route::delete('/{accountuser}', 'AccountUser\AccountUserController@destroy');
    });

Route::prefix('user')->group(function () {
        Route::get('/', 'User\UserController@index');
        Route::get('/{user}', 'User\UserController@show');
        Route::post('/', 'User\UserController@store');
        Route::put('/{user}', 'User\UserController@update');
        Route::delete('/{user}', 'User\UserController@destroy');
    });

//!APPENDHERE
});