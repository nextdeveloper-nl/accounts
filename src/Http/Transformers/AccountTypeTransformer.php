<?php

namespace NextDeveloper\Account\Http\Transformers;

use NextDeveloper\Account\Database\Models\AccountType;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class AccountTypeTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\Account\Http\Transformers
 */
class AccountTypeTransformer extends AbstractTransformer {

    /**
     * @param AccountType $model
     *
     * @return array
     */
    public function transform(AccountType $model) {
        return $this->buildPayload([
            'id'  =>  $model->id_ref,
            'name'  =>  $model->name,
            'description'  =>  $model->description,
        ]);
    }
}
