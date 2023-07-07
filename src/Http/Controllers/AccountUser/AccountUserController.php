<?php

namespace NextDeveloper\Accounts\Http\Controllers\AccountUser;

use Illuminate\Http\Request;
use NextDeveloper\Generator\Common\AbstractController;
use NextDeveloper\Generator\Http\Traits\ResponsableFactory;
use NextDeveloper\Accounts\Http\Requests\AccountUser\AccountUserUpdateRequest;
use NextDeveloper\Accounts\Database\Filters\AccountUserQueryFilter;
use NextDeveloper\Accounts\Services\AccountUserService;
use NextDeveloper\Accounts\Http\Requests\AccountUser\AccountUserCreateRequest;

class AccountUserController extends AbstractController
{
    /**
    * This method returns the list of accountusers.
    *
    * optional http params:
    * - paginate: If you set paginate parameter, the result will be returned paginated.
    *
    * @param AccountUserQueryFilter $filter An object that builds search query
    * @param Request $request Laravel request object, this holds all data about request. Automatically populated.
    * @return \Illuminate\Http\JsonResponse
    */
    public function index(AccountUserQueryFilter $filter, Request $request) {
        $data = AccountUserService::get($filter, $request->all());

        return ResponsableFactory::makeResponse($this, $data);
    }

    /**
    * This method receives ID for the related model and returns the item to the client.
    *
    * @param $accountUserId
    * @return mixed|null
    * @throws \Laravel\Octane\Exceptions\DdException
    */
    public function show($ref) {
        //  Here we are not using Laravel Route Model Binding. Please check routeBinding.md file
        //  in NextDeveloper Platform Project
        $model = AccountUserService::getByRef($ref);

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method created AccountUser object on database.
    *
    * @param AccountUserCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function store(AccountUserCreateRequest $request) {
        $model = AccountUserService::create($request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method updates AccountUser object on database.
    *
    * @param $accountUserId
    * @param CountryCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function update($accountUserId, AccountUserUpdateRequest $request) {
        $model = AccountUserService::update($accountUserId, $request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method updates AccountUser object on database.
    *
    * @param $accountUserId
    * @param CountryCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function destroy($accountUserId) {
        $model = AccountUserService::delete($accountUserId);

        return ResponsableFactory::makeResponse($this, $model);
    }

    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE

}