<?php

namespace NextDeveloper\Account\Http\Requests\AccountAffiliationRule;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class AccountAffiliationRuleUpdateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'affiliation_rule_id' => 'required|integer',
			'account_id'          => 'required|integer',
			'start_at'            => 'nullable|date',
			'expires_at'          => 'nullable|date',
        ];
    }

}