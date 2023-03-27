<?php

namespace NextDeveloper\Account\Services\AbstractServices;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use NextDeveloper\Account\Database\Models\AccountBalanceLog;
use NextDeveloper\Account\Database\Filters\AccountBalanceLogQueryFilter;

use NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogCreatedEvent;
use NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogCreatingEvent;

/**
* This class is responsible from managing the data for AccountBalanceLog
*
* Class AccountBalanceLogService.
*
* @package NextDeveloper\Account\Database\Models
*/
class AbstractAccountBalanceLogService {
    public static function get(AccountBalanceLogQueryFilter $filter = null, array $params = []) : Collection|LengthAwarePaginator {
        $enablePaginate = array_key_exists('paginate', $params);

        /**
        * Here we are adding null request since if filter is null, this means that this function is called from
        * non http application. This is actually not I think its a correct way to handle this problem but it's a workaround.
        *
        * Please let me know if you have any other idea about this; baris.bulut@nextdeveloper.com
        */
        if($filter == null)
            $filter = new AccountBalanceLogQueryFilter(new Request());

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

        $model = AccountBalanceLog::filter($filter);

        if($model && $enablePaginate)
            return $model->paginate($perPage);
        else
            return $model->get();

        if(!$model && $enablePaginate)
            return AccountBalanceLog::paginate($perPage);
        else
            return AccountBalanceLog::get();
    }

    public static function getAll() {
        return AccountBalanceLog::all();
    }

    /**
    * This method returns the model by looking at reference id
    *
    * @param $ref
    * @return mixed
    */
    public static function getByRef($ref) : ?AccountBalanceLog {
        return AccountBalanceLog::findByRef($ref);
    }

    /**
    * This method returns the model by lookint at its id
    *
    * @param $id
    * @return AccountBalanceLog|null
    */
    public static function getById($id) : ?AccountBalanceLog {
        return AccountBalanceLog::where('id', $id)->first();
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
        event( new AccountBalanceLogCreatingEvent() );

        try {
            $model = AccountBalanceLog::create([

            ]);
        } catch(\Exception $e) {
            throw $e;
        }

        event( new AccountBalanceLogCreatedEvent($model) );

        return $model;
    }
}