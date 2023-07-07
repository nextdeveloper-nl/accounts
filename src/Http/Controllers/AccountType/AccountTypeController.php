<?php

namespace NextDeveloper\Accounts\Http\Controllers\AccountType;

use Illuminate\Http\Request;
use NextDeveloper\Generator\Common\AbstractController;
use NextDeveloper\Generator\Http\Traits\ResponsableFactory;
use NextDeveloper\Accounts\Http\Requests\AccountType\AccountTypeUpdateRequest;
use NextDeveloper\Accounts\Database\Filters\AccountTypeQueryFilter;
use NextDeveloper\Accounts\Services\AccountTypeService;
use NextDeveloper\Accounts\Http\Requests\AccountType\AccountTypeCreateRequest;

class AccountTypeController extends AbstractController
{
    /**
    * This method returns the list of accounttypes.
    *
    * optional http params:
    * - paginate: If you set paginate parameter, the result will be returned paginated.
    *
    * @param AccountTypeQueryFilter $filter An object that builds search query
    * @param Request $request Laravel request object, this holds all data about request. Automatically populated.
    * @return \Illuminate\Http\JsonResponse
    */
    public function index(AccountTypeQueryFilter $filter, Request $request) {
        $data = AccountTypeService::get($filter, $request->all());

        return ResponsableFactory::makeResponse($this, $data);
    }

    /**
    * This method receives ID for the related model and returns the item to the client.
    *
    * @param $accountTypeId
    * @return mixed|null
    * @throws \Laravel\Octane\Exceptions\DdException
    */
    public function show($ref) {
        //  Here we are not using Laravel Route Model Binding. Please check routeBinding.md file
        //  in NextDeveloper Platform Project
        $model = AccountTypeService::getByRef($ref);

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method created AccountType object on database.
    *
    * @param AccountTypeCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function store(AccountTypeCreateRequest $request) {
        $model = AccountTypeService::create($request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method updates AccountType object on database.
    *
    * @param $accountTypeId
    * @param CountryCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function update($accountTypeId, AccountTypeUpdateRequest $request) {
        $model = AccountTypeService::update($accountTypeId, $request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method updates AccountType object on database.
    *
    * @param $accountTypeId
    * @param CountryCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function destroy($accountTypeId) {
        $model = AccountTypeService::delete($accountTypeId);

        return ResponsableFactory::makeResponse($this, $model);
    }

    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE

}