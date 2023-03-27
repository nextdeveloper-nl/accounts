<?php

namespace NextDeveloper\Account\Http\Transformers;

use NextDeveloper\Account\Database\Models\AccountBalanceLog;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class AccountBalanceLogTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\Account\Http\Transformers
 */
class AccountBalanceLogTransformer extends AbstractTransformer {

    /**
     * @param AccountBalanceLog $model
     *
     * @return array
     */
    public function transform(AccountBalanceLog $model) {
        return $this->buildPayload([
            'id'  =>  $model->id_ref,
            'account_id'  =>  $model->account_id,
            'invoice_id'  =>  $model->invoice_id,
            'loggable_id'  =>  $model->loggable_id,
            'loggable_type'  =>  $model->loggable_type,
            'loggable_created_at'  =>  $model->loggable_created_at,
            'reason'  =>  $model->reason,
            'amount'  =>  $model->amount,
            'balance_before'  =>  $model->balance_before,
            'balance_after'  =>  $model->balance_after,
            'currency_code'  =>  $model->currency_code,
            'operation'  =>  $model->operation,
            'is_taken_from_balance'  =>  $model->is_taken_from_balance,
            'is_canceled'  =>  $model->is_canceled,
            'cancelation_reason'  =>  $model->cancelation_reason,
            'created_at'  =>  $model->created_at,
            'updated_at'  =>  $model->updated_at,
            'deleted_at'  =>  $model->deleted_at,
        ]);
    }
}
