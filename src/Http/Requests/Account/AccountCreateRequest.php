<?php

namespace NextDeveloper\Account\Http\Requests\Account;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class AccountCreateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'name'                 => 'nullable|string|max:255',
			'domain'               => 'nullable|string|max:255',
			'phone_code'           => 'nullable|string|max:4',
			'phone'                => 'nullable|string|max:15',
			'balance'              => 'numeric',
			'currency_code'        => 'string|max:3',
			'credit'               => 'numeric',
			'credit_currency_code' => 'string|max:3',
			'risk_level'           => 'boolean',
			'is_team'              => 'boolean',
			'is_customer'          => 'boolean',
			'is_supplier'          => 'boolean',
			'is_partner'           => 'boolean',
			'description'          => 'nullable|string|max:500',
			'iam_dn'               => 'nullable|string|max:255',
			'owner_id'             => 'nullable|integer',
			'account_type_id'      => 'integer',
			'account_channel_id'   => 'integer',
			'representative_id'    => 'nullable|integer',
			'iam_service_id'       => 'nullable|integer',
			'approved_at'          => 'nullable|date',
			'suspended_at'         => 'nullable|date',
			'tax_office'           => 'nullable|string|max:100',
			'tax_id'               => 'nullable|string|max:100',
        ];
    }

}