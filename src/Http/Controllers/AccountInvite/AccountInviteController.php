<?php

namespace NextDeveloper\Account\Http\Controllers\AccountInvite;

use Illuminate\Http\Request;
use NextDeveloper\Generator\Common\AbstractController;
use NextDeveloper\Generator\Http\Traits\ResponsableFactory;
use NextDeveloper\Account\Database\Filters\AccountInviteQueryFilter;
use NextDeveloper\Account\Http\Transformers\AccountInviteTransformer;
use NextDeveloper\Account\Services\AccountInviteService;
use NextDeveloper\Account\Http\Requests\AccountInvite\AccountInviteCreateRequest;

class AccountInviteController extends AbstractController
{
    /**
    * This method returns the list of accountinvites.
    *
    * optional http params:
    * - paginate: If you set paginate parameter, the result will be returned paginated.
    *
    * @param AccountInviteQueryFilter $filter An object that builds search query
    * @param Request $request Laravel request object, this holds all data about request. Automatically populated.
    * @return \Illuminate\Http\JsonResponse
    */
    public function index(AccountInviteQueryFilter $filter, Request $request) {
        $data = AccountInviteService::get($filter, $request->all());

        return ResponsableFactory::makeResponse($this, $data);
    }

    /**
    * This method receives ID for the related model and returns the item to the client.
    *
    * @param $accountInviteId
    * @return mixed|null
    * @throws \Laravel\Octane\Exceptions\DdException
    */
    public function show($ref) {
        //  Here we are not using Laravel Route Model Binding. Please check routeBinding.md file in NextDeveloper Platform Project
        $model = AccountInviteService::getByRef($ref);

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method created AccountInvite object on database.
    *
    * @param AccountInviteCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function store(AccountInviteCreateRequest $request) {
        $model = AccountInviteService::create($request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }
}