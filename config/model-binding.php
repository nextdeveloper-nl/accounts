<?php

return [
    'user' => function ($value) {
        return NextDeveloper\Accounts\Database\Models\User::findByRef($value);
    },

// EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
];