<?php

namespace NextDeveloper\Accounts\Http\Requests\User;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class UserUpdateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'name'        => 'nullable|string|max:50',
			'surname'     => 'nullable|string|max:50',
			'email'       => 'nullable|string|max:255',
			'fullname'    => 'nullable|string|max:100',
			'username'    => 'nullable|string|max:50',
			'about'       => 'nullable|string',
			'gender'      => 'nullable',
			'birthday'    => 'nullable|date',
			'nin'         => 'nullable|string|max:30',
			'cell_phone'  => 'nullable|string|max:15',
			'language_id' => 'integer',
			'country_id'  => 'integer',
        ];
    }
    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
}