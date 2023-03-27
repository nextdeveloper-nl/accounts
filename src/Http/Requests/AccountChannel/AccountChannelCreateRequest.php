<?php

namespace NextDeveloper\Account\Http\Requests\AccountChannel;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class AccountChannelCreateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'name'        => 'required|string|max:20',
			'description' => 'nullable|string|max:255',
        ];
    }

}