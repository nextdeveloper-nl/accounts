<?php

namespace NextDeveloper\Account\Http\Controllers\AccountBalanceLog;

use Illuminate\Http\Request;
use NextDeveloper\Generator\Common\AbstractController;
use NextDeveloper\Generator\Http\Traits\ResponsableFactory;
use NextDeveloper\Account\Database\Filters\AccountBalanceLogQueryFilter;
use NextDeveloper\Account\Http\Transformers\AccountBalanceLogTransformer;
use NextDeveloper\Account\Services\AccountBalanceLogService;
use NextDeveloper\Account\Http\Requests\AccountBalanceLog\AccountBalanceLogCreateRequest;

class AccountBalanceLogController extends AbstractController
{
    /**
    * This method returns the list of accountbalancelogs.
    *
    * optional http params:
    * - paginate: If you set paginate parameter, the result will be returned paginated.
    *
    * @param AccountBalanceLogQueryFilter $filter An object that builds search query
    * @param Request $request Laravel request object, this holds all data about request. Automatically populated.
    * @return \Illuminate\Http\JsonResponse
    */
    public function index(AccountBalanceLogQueryFilter $filter, Request $request) {
        $data = AccountBalanceLogService::get($filter, $request->all());

        return ResponsableFactory::makeResponse($this, $data);
    }

    /**
    * This method receives ID for the related model and returns the item to the client.
    *
    * @param $accountBalanceLogId
    * @return mixed|null
    * @throws \Laravel\Octane\Exceptions\DdException
    */
    public function show($ref) {
        //  Here we are not using Laravel Route Model Binding. Please check routeBinding.md file in NextDeveloper Platform Project
        $model = AccountBalanceLogService::getByRef($ref);

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method created AccountBalanceLog object on database.
    *
    * @param AccountBalanceLogCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function store(AccountBalanceLogCreateRequest $request) {
        $model = AccountBalanceLogService::create($request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }
}