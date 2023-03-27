<?php

namespace NextDeveloper\Account\Services\AbstractServices;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use NextDeveloper\Account\Database\Models\AccountChannel;
use NextDeveloper\Account\Database\Filters\AccountChannelQueryFilter;

use NextDeveloper\Account\Events\AccountChannel\AccountChannelCreatedEvent;
use NextDeveloper\Account\Events\AccountChannel\AccountChannelCreatingEvent;

/**
* This class is responsible from managing the data for AccountChannel
*
* Class AccountChannelService.
*
* @package NextDeveloper\Account\Database\Models
*/
class AbstractAccountChannelService {
    public static function get(AccountChannelQueryFilter $filter = null, array $params = []) : Collection|LengthAwarePaginator {
        $enablePaginate = array_key_exists('paginate', $params);

        /**
        * Here we are adding null request since if filter is null, this means that this function is called from
        * non http application. This is actually not I think its a correct way to handle this problem but it's a workaround.
        *
        * Please let me know if you have any other idea about this; baris.bulut@nextdeveloper.com
        */
        if($filter == null)
            $filter = new AccountChannelQueryFilter(new Request());

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

        $model = AccountChannel::filter($filter);

        if($model && $enablePaginate)
            return $model->paginate($perPage);
        else
            return $model->get();

        if(!$model && $enablePaginate)
            return AccountChannel::paginate($perPage);
        else
            return AccountChannel::get();
    }

    public static function getAll() {
        return AccountChannel::all();
    }

    /**
    * This method returns the model by looking at reference id
    *
    * @param $ref
    * @return mixed
    */
    public static function getByRef($ref) : ?AccountChannel {
        return AccountChannel::findByRef($ref);
    }

    /**
    * This method returns the model by lookint at its id
    *
    * @param $id
    * @return AccountChannel|null
    */
    public static function getById($id) : ?AccountChannel {
        return AccountChannel::where('id', $id)->first();
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
        event( new AccountChannelCreatingEvent() );

        try {
            $model = AccountChannel::create([

            ]);
        } catch(\Exception $e) {
            throw $e;
        }

        event( new AccountChannelCreatedEvent($model) );

        return $model;
    }
}