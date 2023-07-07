<?php

namespace NextDeveloper\Accounts\Http\Requests\AccountType;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class AccountTypeCreateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'name'        => 'required|string|max:20',
			'description' => 'nullable|string|max:255',
			'country_id'  => 'required|integer',
        ];
    }
    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
}