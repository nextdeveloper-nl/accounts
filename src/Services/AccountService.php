<?php

namespace NextDeveloper\IAM\Services;

use NextDeveloper\IAM\Services\AbstractServices\AbstractAccountService;

/**
* This class is responsible from managing the data for Account
*
* Class AccountService.
*
* @package NextDeveloper\Accounts\Database\Models
*/
class AccountService extends AbstractAccountService {

    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE

    public static function createForUser(IamUser $user) : Account
    {
        if($user->name == '')
            $name = 'My personal account';

        $accountData = [
            'name'      =>  $name,
            'owner_id'  =>  $user->id
        ];

        return self::create($accountData);
    }
}