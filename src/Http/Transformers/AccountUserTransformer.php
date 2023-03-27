<?php

namespace NextDeveloper\Account\Http\Transformers;

use NextDeveloper\Account\Database\Models\AccountUser;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class AccountUserTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\Account\Http\Transformers
 */
class AccountUserTransformer extends AbstractTransformer {

    /**
     * @param AccountUser $model
     *
     * @return array
     */
    public function transform(AccountUser $model) {
        return $this->buildPayload([
            'id'  =>  $model->id,
            'user_id'  =>  $model->user_id,
            'account_id'  =>  $model->account_id,
        ]);
    }
}
