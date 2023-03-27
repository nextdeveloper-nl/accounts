<?php

namespace NextDeveloper\Account\Database\Filters;

use Illuminate\Database\Eloquent\Builder;
use NextDeveloper\Commons\Database\Filters\AbstractQueryFilter;

/**
 * This class automatically puts where clause on database so that use can filter
 * data returned from the query.
 */
class AccountAffiliationRuleQueryFilter extends AbstractQueryFilter
{
    /**
    * @var Builder
    */
    protected $builder;

    public function startAtStart($date) 
    {
        return $this->builder->where( 'start_at', '>=', $date );
    }

    public function startAtEnd($date) 
    {
        return $this->builder->where( 'start_at', '<=', $date );
    }

    public function expiresAtStart($date) 
    {
        return $this->builder->where( 'expires_at', '>=', $date );
    }

    public function expiresAtEnd($date) 
    {
        return $this->builder->where( 'expires_at', '<=', $date );
    }

    public function createdAtStart($date) 
    {
        return $this->builder->where( 'created_at', '>=', $date );
    }

    public function createdAtEnd($date) 
    {
        return $this->builder->where( 'created_at', '<=', $date );
    }

    public function updatedAtStart($date) 
    {
        return $this->builder->where( 'updated_at', '>=', $date );
    }

    public function updatedAtEnd($date) 
    {
        return $this->builder->where( 'updated_at', '<=', $date );
    }

    public function affiliationRuleId($value)
    {
        $affiliationRule = AffiliationRule::where('id_ref', $value)->first();

        if($affiliationRule) {
            return $this->builder->where('affiliation_rule_id', '=', $affiliationRule->id);
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
