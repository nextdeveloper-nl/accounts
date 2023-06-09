<?php

namespace NextDeveloper\Account\Http\Controllers\Account;

use Illuminate\Http\Request;
use NextDeveloper\Generator\Common\AbstractController;
use NextDeveloper\Generator\Http\Traits\ResponsableFactory;
use NextDeveloper\Account\Database\Filters\AccountQueryFilter;
use NextDeveloper\Account\Http\Transformers\AccountTransformer;
use NextDeveloper\Account\Services\AccountService;
use NextDeveloper\Account\Http\Requests\Account\AccountCreateRequest;

class AccountController extends AbstractController
{
    /**
    * This method returns the list of accounts.
    *
    * optional http params:
    * - paginate: If you set paginate parameter, the result will be returned paginated.
    *
    * @param AccountQueryFilter $filter An object that builds search query
    * @param Request $request Laravel request object, this holds all data about request. Automatically populated.
    * @return \Illuminate\Http\JsonResponse
    */
    public function index(AccountQueryFilter $filter, Request $request) {
        $data = AccountService::get($filter, $request->all());

        return ResponsableFactory::makeResponse($this, $data);
    }

    /**
    * This method receives ID for the related model and returns the item to the client.
    *
    * @param $accountId
    * @return mixed|null
    * @throws \Laravel\Octane\Exceptions\DdException
    */
    public function show($ref) {
        //  Here we are not using Laravel Route Model Binding. Please check routeBinding.md file in NextDeveloper Platform Project
        $model = AccountService::getByRef($ref);

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method created Account object on database.
    *
    * @param AccountCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function store(AccountCreateRequest $request) {
        $model = AccountService::create($request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }
}