<?php

namespace NextDeveloper\Account\Http\Transformers;

use NextDeveloper\Account\Database\Models\Account;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class AccountTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\Account\Http\Transformers
 */
class AccountTransformer extends AbstractTransformer {

    /**
     * @param Account $model
     *
     * @return array
     */
    public function transform(Account $model) {
        return $this->buildPayload([
            'id'  =>  $model->id_ref,
            'name'  =>  $model->name,
            'domain'  =>  $model->domain,
            'phone_code'  =>  $model->phone_code,
            'phone'  =>  $model->phone,
            'balance'  =>  $model->balance,
            'currency_code'  =>  $model->currency_code,
            'credit'  =>  $model->credit,
            'credit_currency_code'  =>  $model->credit_currency_code,
            'risk_level'  =>  $model->risk_level,
            'is_team'  =>  $model->is_team,
            'is_customer'  =>  $model->is_customer,
            'is_supplier'  =>  $model->is_supplier,
            'is_partner'  =>  $model->is_partner,
            'description'  =>  $model->description,
            'iam_dn'  =>  $model->iam_dn,
            'owner_id'  =>  $model->owner_id,
            'account_type_id'  =>  $model->account_type_id,
            'account_channel_id'  =>  $model->account_channel_id,
            'representative_id'  =>  $model->representative_id,
            'iam_service_id'  =>  $model->iam_service_id,
            'approved_at'  =>  $model->approved_at,
            'suspended_at'  =>  $model->suspended_at,
            'tax_office'  =>  $model->tax_office,
            'tax_id'  =>  $model->tax_id,
            'created_at'  =>  $model->created_at,
            'updated_at'  =>  $model->updated_at,
            'deleted_at'  =>  $model->deleted_at,
        ]);
    }
}
