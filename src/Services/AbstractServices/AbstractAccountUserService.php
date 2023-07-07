<?php

namespace NextDeveloper\Accounts\Services\AbstractServices;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use NextDeveloper\Accounts\Database\Models\AccountUser;
use NextDeveloper\Accounts\Database\Filters\AccountUserQueryFilter;

use NextDeveloper\Accounts\Events\AccountUser\AccountUserCreatedEvent;
use NextDeveloper\Accounts\Events\AccountUser\AccountUserCreatingEvent;

/**
* This class is responsible from managing the data for AccountUser
*
* Class AccountUserService.
*
* @package NextDeveloper\Accounts\Database\Models
*/
class AbstractAccountUserService {
    public static function get(AccountUserQueryFilter $filter = null, array $params = []) : Collection|LengthAwarePaginator {
        $enablePaginate = array_key_exists('paginate', $params);

        /**
        * Here we are adding null request since if filter is null, this means that this function is called from
        * non http application. This is actually not I think its a correct way to handle this problem but it's a workaround.
        *
        * Please let me know if you have any other idea about this; baris.bulut@nextdeveloper.com
        */
        if($filter == null)
            $filter = new AccountUserQueryFilter(new Request());

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

        $model = AccountUser::filter($filter);

        if($model && $enablePaginate)
            return $model->paginate($perPage);
        else
            return $model->get();

        if(!$model && $enablePaginate)
            return AccountUser::paginate($perPage);
        else
            return AccountUser::get();
    }

    public static function getAll() {
        return AccountUser::all();
    }

    /**
    * This method returns the model by looking at reference id
    *
    * @param $ref
    * @return mixed
    */
    public static function getByRef($ref) : ?AccountUser {
        return AccountUser::findByRef($ref);
    }

    /**
    * This method returns the model by lookint at its id
    *
    * @param $id
    * @return AccountUser|null
    */
    public static function getById($id) : ?AccountUser {
        return AccountUser::where('id', $id)->first();
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
        event( new AccountUserCreatingEvent() );

        try {
            $model = AccountUser::create($data);
        } catch(\Exception $e) {
            throw $e;
        }

        event( new AccountUserCreatedEvent($model) );

        return $model;
    }

    /**
    * This method updated the model from an array.
    *
    * Throws an exception if stuck with any problem.
    *
    * @param
    * @param array $data
    * @return mixed
    * @throw Exception
    */
    public static function update($id, array $data) {
        $model = AccountUser::where('uuid', $id)->first();

        event( new AccountUsersUpdateingEvent($model) );

        try {
           $model = $model->update($data);
        } catch(\Exception $e) {
           throw $e;
        }

        event( new AccountUsersUpdatedEvent($model) );

        return $model;
    }

    /**
    * This method updated the model from an array.
    *
    * Throws an exception if stuck with any problem.
    *
    * @param
    * @param array $data
    * @return mixed
    * @throw Exception
    */
    public static function delete($id, array $data) {
        $model = AccountUser::where('uuid', $id)->first();

        event( new AccountUsersDeletingEvent() );

        try {
            $model = $model->delete();
        } catch(\Exception $e) {
            throw $e;
        }

        event( new AccountUsersDeletedEvent($model) );

        return $model;
    }

    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE

}