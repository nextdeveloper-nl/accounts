<?php

namespace NextDeveloper\Accounts\Http\Requests\AccountUser;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class AccountUserCreateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'user_id'    => 'required|integer',
			'account_id' => 'required|integer',
        ];
    }
    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
}