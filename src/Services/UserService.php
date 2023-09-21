<?php

namespace NextDeveloper\Accounts\Services;

use NextDeveloper\Accounts\Services\AbstractServices\AbstractUserService;

/**
* This class is responsible from managing the data for User
*
* Class UserService.
*
* @package NextDeveloper\Accounts\Database\Models
*/
class UserService extends AbstractUserService {

    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE

    /**
     * Registers the user just by email address
     *
     * @param $email
     * @return User
     * @throws \Exception
     */
    public static function createWithEmail($email) : User
    {
        return self::create([
            'email' =>  $email
        ]);
    }

    /**
     * Manipulating the function here
     *
     * @param array $data
     * @return User
     * @throws \Exception
     */
    public static function create(array $data) : User {
        if(!array_key_exists('language_id', $data)) {
            $lang = Language::where('code', App::currentLocale())->first();

            $data['language_id'] = $lang->id;
        }

        return parent::create($data);
    }

    public static function getByEmail($email) : ?User {
        $user = User::where('email', $email)->first();

        return $user;
    }
}