<?php

namespace NextDeveloper\Account\Database\Filters;

use Illuminate\Database\Eloquent\Builder;
use NextDeveloper\Commons\Database\Filters\AbstractQueryFilter;

/**
 * This class automatically puts where clause on database so that use can filter
 * data returned from the query.
 */
class AccountBalanceLogQueryFilter extends AbstractQueryFilter
{
    /**
    * @var Builder
    */
    protected $builder;
    
    public function loggableType($value)
    {
        return $this->builder->where('loggable_type', 'like', '%' . $value . '%');
    }
    
    public function reason($value)
    {
        return $this->builder->where('reason', 'like', '%' . $value . '%');
    }
    
    public function currencyCode($value)
    {
        return $this->builder->where('currency_code', 'like', '%' . $value . '%');
    }
    
    public function cancelationReason($value)
    {
        return $this->builder->where('cancelation_reason', 'like', '%' . $value . '%');
    }

    public function amount($value)
    {
        $operator = substr($value, 0, 1);

        if ($operator != '<' || $operator != '>') {
           $operator = '=';
        } else {
            $value = substr($value, 1);
        }

        return $this->builder->where('amount', $operator, $value);
    }
    
    public function balanceBefore($value)
    {
        $operator = substr($value, 0, 1);

        if ($operator != '<' || $operator != '>') {
           $operator = '=';
        } else {
            $value = substr($value, 1);
        }

        return $this->builder->where('balance_before', $operator, $value);
    }
    
    public function balanceAfter($value)
    {
        $operator = substr($value, 0, 1);

        if ($operator != '<' || $operator != '>') {
           $operator = '=';
        } else {
            $value = substr($value, 1);
        }

        return $this->builder->where('balance_after', $operator, $value);
    }
    
    public function isTakenFromBalance()
    {
        return $this->builder->where('is_taken_from_balance', true);
    }
    
    public function isCanceled()
    {
        return $this->builder->where('is_canceled', true);
    }
    
    public function loggableCreatedAtStart($date) 
    {
        return $this->builder->where( 'loggable_created_at', '>=', $date );
    }

    public function loggableCreatedAtEnd($date) 
    {
        return $this->builder->where( 'loggable_created_at', '<=', $date );
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

    public function deletedAtStart($date) 
    {
        return $this->builder->where( 'deleted_at', '>=', $date );
    }

    public function deletedAtEnd($date) 
    {
        return $this->builder->where( 'deleted_at', '<=', $date );
    }

    public function accountId($value)
    {
        $account = Account::where('id_ref', $value)->first();

        if($account) {
            return $this->builder->where('account_id', '=', $account->id);
        }
    }

    public function invoiceId($value)
    {
        $invoice = Invoice::where('id_ref', $value)->first();

        if($invoice) {
            return $this->builder->where('invoice_id', '=', $invoice->id);
        }
    }

    public function loggableId($value)
    {
        $loggable = Loggable::where('id_ref', $value)->first();

        if($loggable) {
            return $this->builder->where('loggable_id', '=', $loggable->id);
        }
    }

}
