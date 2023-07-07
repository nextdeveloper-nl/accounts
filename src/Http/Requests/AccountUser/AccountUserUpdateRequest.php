<?php

namespace NextDeveloper\Accounts\Http\Requests\AccountUser;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class AccountUserUpdateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'user_id'    => 'nullable|integer',
			'account_id' => 'nullable|integer',
        ];
    }
    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
}