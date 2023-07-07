<?php

return [
    'account' => function ($value) {
        return NextDeveloper\Accounts\Database\Models\Account::findByRef($value);
    },

'user' => function ($value) {
        return NextDeveloper\Accounts\Database\Models\User::findByRef($value);
    },

'accountuser' => function ($value) {
        return NextDeveloper\Accounts\Database\Models\AccountUser::findByRef($value);
    },

'accounttype' => function ($value) {
        return NextDeveloper\Accounts\Database\Models\AccountType::findByRef($value);
    },

// EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
];