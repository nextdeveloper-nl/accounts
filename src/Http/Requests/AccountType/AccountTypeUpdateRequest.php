<?php

namespace NextDeveloper\Accounts\Http\Requests\AccountType;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class AccountTypeUpdateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'name'        => 'nullable|string|max:20',
			'description' => 'nullable|string|max:255',
			'country_id'  => 'nullable|exists:countries,uuid|uuid',
        ];
    }
    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
}