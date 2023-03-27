<?php

namespace NextDeveloper\Account\Database\Observers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class AccountAffiliationRuleObserver
 * @package NextDeveloper\Account\Database\Observers
 */
class AccountAffiliationRuleObserver
{
    /**
    * Triggered when a new record is retrieved.
    *
    * @param Model $model
    */
    public function retrieved(Model $model){

    }

    /**
     * @param Model $model
     *
     * @return mixed
     */
    public function creating(Model $model)
    {
    }

    /**
     * @param Model $model
     *
     * @return mixed
     */
    public function created(Model $model)
    {
    }

    /**
     * @param Model $model
     *
     * @return mixed
     */
    public function saving(Model $model)
    {
    }

    /**
     * @param Model $model
     *
     * @return mixed
     */
    public function saved(Model $model)
    {
    }


    /**
     * @param Model $model
     *
     */
    public function updating(Model $model)
    {
    }

    /**
     * @param Model $model
     *
     * @return mixed
     */
    public function updated(Model $model)
    {
    }


    /**
     * @param Model $model
     *
     */
    public function deleting(Model $model)
    {
    }

    /**
     * @param Model $model
     *
     * @return mixed
     */
    public function deleted(Model $model)
    {
    }

    /**
     * @param Model $model
     *
     * @return mixed
     */
    public function restoring(Model $model)
    {
    }

    /**
     * @param Model $model
     *
     * @return mixed
     */
    public function restored(Model $model)
    {
    }
}
