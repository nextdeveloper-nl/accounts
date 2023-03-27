<?php

namespace NextDeveloper\Account\Http\Transformers;

use NextDeveloper\Account\Database\Models\AccountChannel;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class AccountChannelTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\Account\Http\Transformers
 */
class AccountChannelTransformer extends AbstractTransformer {

    /**
     * @param AccountChannel $model
     *
     * @return array
     */
    public function transform(AccountChannel $model) {
        return $this->buildPayload([
            'id'  =>  $model->id,
            'name'  =>  $model->name,
            'description'  =>  $model->description,
        ]);
    }
}
