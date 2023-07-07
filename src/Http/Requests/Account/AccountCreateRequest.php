<?php

namespace NextDeveloper\Accounts\Http\Requests\Account;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class AccountCreateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'name'            => 'nullable|string|max:500',
			'domain_id'       => 'nullable|integer',
			'country_id'      => 'nullable|integer',
			'currency_id'     => 'nullable|integer',
			'phone_number'    => 'nullable|string|max:20',
			'description'     => 'nullable|string|max:500',
			'owner_id'        => 'nullable|integer',
			'account_type_id' => 'integer',
        ];
    }
    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
}