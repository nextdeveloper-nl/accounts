<?php

namespace NextDeveloper\Account\Http\Transformers;

use NextDeveloper\Account\Database\Models\AccountAffiliationRule;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class AccountAffiliationRuleTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\Account\Http\Transformers
 */
class AccountAffiliationRuleTransformer extends AbstractTransformer {

    /**
     * @param AccountAffiliationRule $model
     *
     * @return array
     */
    public function transform(AccountAffiliationRule $model) {
        return $this->buildPayload([
            'id'  =>  $model->id,
            'affiliation_rule_id'  =>  $model->affiliation_rule_id,
            'account_id'  =>  $model->account_id,
            'start_at'  =>  $model->start_at,
            'expires_at'  =>  $model->expires_at,
            'created_at'  =>  $model->created_at,
            'updated_at'  =>  $model->updated_at,
        ]);
    }
}
