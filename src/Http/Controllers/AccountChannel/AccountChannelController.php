<?php

namespace NextDeveloper\Account\Http\Controllers\AccountChannel;

use Illuminate\Http\Request;
use NextDeveloper\Generator\Common\AbstractController;
use NextDeveloper\Generator\Http\Traits\ResponsableFactory;
use NextDeveloper\Account\Database\Filters\AccountChannelQueryFilter;
use NextDeveloper\Account\Http\Transformers\AccountChannelTransformer;
use NextDeveloper\Account\Services\AccountChannelService;
use NextDeveloper\Account\Http\Requests\AccountChannel\AccountChannelCreateRequest;

class AccountChannelController extends AbstractController
{
    /**
    * This method returns the list of accountchannels.
    *
    * optional http params:
    * - paginate: If you set paginate parameter, the result will be returned paginated.
    *
    * @param AccountChannelQueryFilter $filter An object that builds search query
    * @param Request $request Laravel request object, this holds all data about request. Automatically populated.
    * @return \Illuminate\Http\JsonResponse
    */
    public function index(AccountChannelQueryFilter $filter, Request $request) {
        $data = AccountChannelService::get($filter, $request->all());

        return ResponsableFactory::makeResponse($this, $data);
    }

    /**
    * This method receives ID for the related model and returns the item to the client.
    *
    * @param $accountChannelId
    * @return mixed|null
    * @throws \Laravel\Octane\Exceptions\DdException
    */
    public function show($ref) {
        //  Here we are not using Laravel Route Model Binding. Please check routeBinding.md file in NextDeveloper Platform Project
        $model = AccountChannelService::getByRef($ref);

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method created AccountChannel object on database.
    *
    * @param AccountChannelCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function store(AccountChannelCreateRequest $request) {
        $model = AccountChannelService::create($request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }
}