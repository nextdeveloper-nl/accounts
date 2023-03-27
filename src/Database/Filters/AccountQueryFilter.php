<?php

namespace NextDeveloper\Account\Database\Filters;

use Illuminate\Database\Eloquent\Builder;
use NextDeveloper\Commons\Database\Filters\AbstractQueryFilter;

/**
 * This class automatically puts where clause on database so that use can filter
 * data returned from the query.
 */
class AccountQueryFilter extends AbstractQueryFilter
{
    /**
    * @var Builder
    */
    protected $builder;
    
    public function name($value)
    {
        return $this->builder->where('name', 'like', '%' . $value . '%');
    }
    
    public function domain($value)
    {
        return $this->builder->where('domain', 'like', '%' . $value . '%');
    }
    
    public function phoneCode($value)
    {
        return $this->builder->where('phone_code', 'like', '%' . $value . '%');
    }
    
    public function phone($value)
    {
        return $this->builder->where('phone', 'like', '%' . $value . '%');
    }
    
    public function currencyCode($value)
    {
        return $this->builder->where('currency_code', 'like', '%' . $value . '%');
    }
    
    public function creditCurrencyCode($value)
    {
        return $this->builder->where('credit_currency_code', 'like', '%' . $value . '%');
    }
    
    public function description($value)
    {
        return $this->builder->where('description', 'like', '%' . $value . '%');
    }
    
    public function iamDn($value)
    {
        return $this->builder->where('iam_dn', 'like', '%' . $value . '%');
    }
    
    public function taxOffice($value)
    {
        return $this->builder->where('tax_office', 'like', '%' . $value . '%');
    }

    public function balance($value)
    {
        $operator = substr($value, 0, 1);

        if ($operator != '<' || $operator != '>') {
           $operator = '=';
        } else {
            $value = substr($value, 1);
        }

        return $this->builder->where('balance', $operator, $value);
    }
    
    public function credit($value)
    {
        $operator = substr($value, 0, 1);

        if ($operator != '<' || $operator != '>') {
           $operator = '=';
        } else {
            $value = substr($value, 1);
        }

        return $this->builder->where('credit', $operator, $value);
    }
    
    public function riskLevel($value)
    {
        $operator = substr($value, 0, 1);

        if ($operator != '<' || $operator != '>') {
           $operator = '=';
        } else {
            $value = substr($value, 1);
        }

        return $this->builder->where('risk_level', $operator, $value);
    }
    
    public function isTeam()
    {
        return $this->builder->where('is_team', true);
    }
    
    public function isCustomer()
    {
        return $this->builder->where('is_customer', true);
    }
    
    public function isSupplier()
    {
        return $this->builder->where('is_supplier', true);
    }
    
    public function isPartner()
    {
        return $this->builder->where('is_partner', true);
    }
    
    public function approvedAtStart($date) 
    {
        return $this->builder->where( 'approved_at', '>=', $date );
    }

    public function approvedAtEnd($date) 
    {
        return $this->builder->where( 'approved_at', '<=', $date );
    }

    public function suspendedAtStart($date) 
    {
        return $this->builder->where( 'suspended_at', '>=', $date );
    }

    public function suspendedAtEnd($date) 
    {
        return $this->builder->where( 'suspended_at', '<=', $date );
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

    public function ownerId($value)
    {
        $owner = Owner::where('id_ref', $value)->first();

        if($owner) {
            return $this->builder->where('owner_id', '=', $owner->id);
        }
    }

    public function accountTypeId($value)
    {
        $accountType = AccountType::where('id_ref', $value)->first();

        if($accountType) {
            return $this->builder->where('account_type_id', '=', $accountType->id);
        }
    }

    public function accountChannelId($value)
    {
        $accountChannel = AccountChannel::where('id_ref', $value)->first();

        if($accountChannel) {
            return $this->builder->where('account_channel_id', '=', $accountChannel->id);
        }
    }

    public function representativeId($value)
    {
        $representative = Representative::where('id_ref', $value)->first();

        if($representative) {
            return $this->builder->where('representative_id', '=', $representative->id);
        }
    }

    public function iamServiceId($value)
    {
        $iamService = IamService::where('id_ref', $value)->first();

        if($iamService) {
            return $this->builder->where('iam_service_id', '=', $iamService->id);
        }
    }

    public function taxId($value)
    {
        $tax = Tax::where('id_ref', $value)->first();

        if($tax) {
            return $this->builder->where('tax_id', '=', $tax->id);
        }
    }

}
