<?php

namespace NextDeveloper\Account\Http\Requests\AccountUser;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class AccountUserUpdateRequest extends AbstractFormRequest
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

}