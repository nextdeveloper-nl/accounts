<?php

return [
    'account' => function ($value) {
        return NextDeveloper\Account\Database\Models\Account::findByRef($value);
    },

'accountaffiliationrule' => function ($value) {
        return NextDeveloper\Account\Database\Models\AccountAffiliationRule::findByRef($value);
    },

'accountbalancelog' => function ($value) {
        return NextDeveloper\Account\Database\Models\AccountBalanceLog::findByRef($value);
    },

'accountchannel' => function ($value) {
        return NextDeveloper\Account\Database\Models\AccountChannel::findByRef($value);
    },

'accountinvite' => function ($value) {
        return NextDeveloper\Account\Database\Models\AccountInvite::findByRef($value);
    },

'accounttype' => function ($value) {
        return NextDeveloper\Account\Database\Models\AccountType::findByRef($value);
    },

'accountuser' => function ($value) {
        return NextDeveloper\Account\Database\Models\AccountUser::findByRef($value);
    },

'user' => function ($value) {
        return NextDeveloper\Account\Database\Models\User::findByRef($value);
    },

//!APPENDHERE
];