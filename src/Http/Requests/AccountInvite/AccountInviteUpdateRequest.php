<?php

namespace NextDeveloper\Account\Http\Requests\AccountInvite;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class AccountInviteUpdateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'user_id'    => 'required|integer',
			'account_id' => 'required|integer',
			'code'       => 'required|string|max:10',
			'expires_at' => 'date',
        ];
    }

}