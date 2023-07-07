<?php

namespace NextDeveloper\Accounts\Http\Transformers;

use NextDeveloper\Accounts\Database\Models\AccountType;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class AccountTypeTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\Accounts\Http\Transformers
 */
class AccountTypeTransformer extends AbstractTransformer {

    /**
     * @param AccountType $model
     *
     * @return array
     */
    public function transform(AccountType $model) {
        return $this->buildPayload([
            'id'  =>  $model->uuid,
            'name'  =>  $model->name,
            'description'  =>  $model->description,
            'country_id'  =>  $model->country_id,
        ]);
    }
    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
}