<?php

namespace NextDeveloper\Account\Http\Transformers;

use NextDeveloper\Account\Database\Models\AccountInvite;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class AccountInviteTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\Account\Http\Transformers
 */
class AccountInviteTransformer extends AbstractTransformer {

    /**
     * @param AccountInvite $model
     *
     * @return array
     */
    public function transform(AccountInvite $model) {
        return $this->buildPayload([
            'id'  =>  $model->id,
            'user_id'  =>  $model->user_id,
            'account_id'  =>  $model->account_id,
            'code'  =>  $model->code,
            'created_at'  =>  $model->created_at,
            'updated_at'  =>  $model->updated_at,
            'expires_at'  =>  $model->expires_at,
            'deleted_at'  =>  $model->deleted_at,
        ]);
    }
}
