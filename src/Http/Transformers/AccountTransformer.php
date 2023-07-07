<?php

namespace NextDeveloper\Accounts\Http\Transformers;

use NextDeveloper\Accounts\Database\Models\Account;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class AccountTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\Accounts\Http\Transformers
 */
class AccountTransformer extends AbstractTransformer {

    /**
     * @param Account $model
     *
     * @return array
     */
    public function transform(Account $model) {
        return $this->buildPayload([
            'id'  =>  $model->uuid,
            'name'  =>  $model->name,
            'domain_id'  =>  $model->domain_id,
            'country_id'  =>  $model->country_id,
            'currency_id'  =>  $model->currency_id,
            'phone_number'  =>  $model->phone_number,
            'description'  =>  $model->description,
            'owner_id'  =>  $model->owner_id,
            'account_type_id'  =>  $model->account_type_id,
            'created_at'  =>  $model->created_at,
            'updated_at'  =>  $model->updated_at,
            'deleted_at'  =>  $model->deleted_at,
        ]);
    }
    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
}