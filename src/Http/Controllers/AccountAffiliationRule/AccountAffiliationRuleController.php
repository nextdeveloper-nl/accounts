<?php

namespace NextDeveloper\Account\Http\Controllers\AccountAffiliationRule;

use Illuminate\Http\Request;
use NextDeveloper\Generator\Common\AbstractController;
use NextDeveloper\Generator\Http\Traits\ResponsableFactory;
use NextDeveloper\Account\Database\Filters\AccountAffiliationRuleQueryFilter;
use NextDeveloper\Account\Http\Transformers\AccountAffiliationRuleTransformer;
use NextDeveloper\Account\Services\AccountAffiliationRuleService;
use NextDeveloper\Account\Http\Requests\AccountAffiliationRule\AccountAffiliationRuleCreateRequest;

class AccountAffiliationRuleController extends AbstractController
{
    /**
    * This method returns the list of accountaffiliationrules.
    *
    * optional http params:
    * - paginate: If you set paginate parameter, the result will be returned paginated.
    *
    * @param AccountAffiliationRuleQueryFilter $filter An object that builds search query
    * @param Request $request Laravel request object, this holds all data about request. Automatically populated.
    * @return \Illuminate\Http\JsonResponse
    */
    public function index(AccountAffiliationRuleQueryFilter $filter, Request $request) {
        $data = AccountAffiliationRuleService::get($filter, $request->all());

        return ResponsableFactory::makeResponse($this, $data);
    }

    /**
    * This method receives ID for the related model and returns the item to the client.
    *
    * @param $accountAffiliationRuleId
    * @return mixed|null
    * @throws \Laravel\Octane\Exceptions\DdException
    */
    public function show($ref) {
        //  Here we are not using Laravel Route Model Binding. Please check routeBinding.md file in NextDeveloper Platform Project
        $model = AccountAffiliationRuleService::getByRef($ref);

        return ResponsableFactory::makeResponse($this, $model);
    }

    /**
    * This method created AccountAffiliationRule object on database.
    *
    * @param AccountAffiliationRuleCreateRequest $request
    * @return mixed|null
    * @throws \NextDeveloper\Commons\Exceptions\CannotCreateModelException
    */
    public function store(AccountAffiliationRuleCreateRequest $request) {
        $model = AccountAffiliationRuleService::create($request->validated());

        return ResponsableFactory::makeResponse($this, $model);
    }
}