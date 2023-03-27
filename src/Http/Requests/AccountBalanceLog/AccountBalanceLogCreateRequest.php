<?php

namespace NextDeveloper\Account\Http\Requests\AccountBalanceLog;

use NextDeveloper\Commons\Http\Requests\AbstractFormRequest;

class AccountBalanceLogCreateRequest extends AbstractFormRequest
{

    /**
     * @return array
     */
    public function rules() {
        return [
            'account_id'            => 'required|integer',
			'invoice_id'            => 'nullable|integer',
			'loggable_id'           => 'nullable|integer',
			'loggable_type'         => 'nullable|string|max:1000',
			'loggable_created_at'   => 'nullable|date',
			'reason'                => 'nullable|string',
			'amount'                => 'required|numeric',
			'balance_before'        => 'required|numeric',
			'balance_after'         => 'required|numeric',
			'currency_code'         => 'required|string|max:3',
			'operation'             => 'required',
			'is_taken_from_balance' => 'boolean',
			'is_canceled'           => 'boolean',
			'cancelation_reason'    => 'nullable|string|max:255',
        ];
    }

}