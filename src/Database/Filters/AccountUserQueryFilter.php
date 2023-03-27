<?php

namespace NextDeveloper\Account\Database\Filters;

use Illuminate\Database\Eloquent\Builder;
use NextDeveloper\Commons\Database\Filters\AbstractQueryFilter;

/**
 * This class automatically puts where clause on database so that use can filter
 * data returned from the query.
 */
class AccountUserQueryFilter extends AbstractQueryFilter
{
    /**
    * @var Builder
    */
    protected $builder;

    public function userId($value)
    {
        $user = User::where('id_ref', $value)->first();

        if($user) {
            return $this->builder->where('user_id', '=', $user->id);
        }
    }

    public function accountId($value)
    {
        $account = Account::where('id_ref', $value)->first();

        if($account) {
            return $this->builder->where('account_id', '=', $account->id);
        }
    }

}
