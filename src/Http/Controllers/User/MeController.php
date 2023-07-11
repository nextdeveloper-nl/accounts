<?php

namespace NextDeveloper\Accounts\Http\Controllers\User;

use Illuminate\Http\Request;
use NextDeveloper\Generator\Common\AbstractController;
use NextDeveloper\Generator\Http\Traits\ResponsableFactory;
use NextDeveloper\Accounts\Http\Requests\User\UserUpdateRequest;
use NextDeveloper\Accounts\Database\Filters\UserQueryFilter;
use NextDeveloper\Accounts\Services\UserService;
use NextDeveloper\Accounts\Http\Requests\User\UserCreateRequest;

class MeController extends AbstractController
{
    /**
    * This method receives ID for the related model and returns the item to the client.
    *
    * @param $userId
    * @return mixed|null
    * @throws \Laravel\Octane\Exceptions\DdException
    */
    public function show($ref) {
        //  Here we are not using Laravel Route Model Binding. Please check routeBinding.md file
        //  in NextDeveloper Platform Project
        $model = UserService::getByRef($ref);

        return ResponsableFactory::makeResponse($this, $model);
    }
}