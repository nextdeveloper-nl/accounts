<?php

namespace NextDeveloper\Account\Services\AbstractServices;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use NextDeveloper\Account\Database\Models\AccountAffiliationRule;
use NextDeveloper\Account\Database\Filters\AccountAffiliationRuleQueryFilter;

use NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleCreatedEvent;
use NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleCreatingEvent;

/**
* This class is responsible from managing the data for AccountAffiliationRule
*
* Class AccountAffiliationRuleService.
*
* @package NextDeveloper\Account\Database\Models
*/
class AbstractAccountAffiliationRuleService {
    public static function get(AccountAffiliationRuleQueryFilter $filter = null, array $params = []) : Collection|LengthAwarePaginator {
        $enablePaginate = array_key_exists('paginate', $params);

        /**
        * Here we are adding null request since if filter is null, this means that this function is called from
        * non http application. This is actually not I think its a correct way to handle this problem but it's a workaround.
        *
        * Please let me know if you have any other idea about this; baris.bulut@nextdeveloper.com
        */
        if($filter == null)
            $filter = new AccountAffiliationRuleQueryFilter(new Request());

        $perPage = config('commons.pagination.per_page');

        if($perPage == null)
            $perPage = 20;

        if(array_key_exists('per_page', $params)) {
            $perPage = intval($params['per_page']);

            if($perPage == 0)
                $perPage = 20;
        }

        if(array_key_exists('orderBy', $params)) {
            $filter->orderBy($params['orderBy']);
        }

        $model = AccountAffiliationRule::filter($filter);

        if($model && $enablePaginate)
            return $model->paginate($perPage);
        else
            return $model->get();

        if(!$model && $enablePaginate)
            return AccountAffiliationRule::paginate($perPage);
        else
            return AccountAffiliationRule::get();
    }

    public static function getAll() {
        return AccountAffiliationRule::all();
    }

    /**
    * This method returns the model by looking at reference id
    *
    * @param $ref
    * @return mixed
    */
    public static function getByRef($ref) : ?AccountAffiliationRule {
        return AccountAffiliationRule::findByRef($ref);
    }

    /**
    * This method returns the model by lookint at its id
    *
    * @param $id
    * @return AccountAffiliationRule|null
    */
    public static function getById($id) : ?AccountAffiliationRule {
        return AccountAffiliationRule::where('id', $id)->first();
    }

    /**
    * This method created the model from an array.
    *
    * Throws an exception if stuck with any problem.
    *
    * @param array $data
    * @return mixed
    * @throw Exception
    */
    public static function create(array $data) {
        event( new AccountAffiliationRuleCreatingEvent() );

        try {
            $model = AccountAffiliationRule::create([

            ]);
        } catch(\Exception $e) {
            throw $e;
        }

        event( new AccountAffiliationRuleCreatedEvent($model) );

        return $model;
    }
}