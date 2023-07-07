<?php

namespace NextDeveloper\Accounts\Http\Transformers;

use NextDeveloper\Accounts\Database\Models\User;
use NextDeveloper\Commons\Http\Transformers\AbstractTransformer;

/**
 * Class UserTransformer. This class is being used to manipulate the data we are serving to the customer
 *
 * @package NextDeveloper\Accounts\Http\Transformers
 */
class UserTransformer extends AbstractTransformer {

    /**
     * @param User $model
     *
     * @return array
     */
    public function transform(User $model) {
        return $this->buildPayload([
            'id'  =>  $model->uuid,
            'name'  =>  $model->name,
            'surname'  =>  $model->surname,
            'email'  =>  $model->email,
            'fullname'  =>  $model->fullname,
            'username'  =>  $model->username,
            'about'  =>  $model->about,
            'gender'  =>  $model->gender,
            'birthday'  =>  $model->birthday,
            'nin'  =>  $model->nin,
            'cell_phone'  =>  $model->cell_phone,
            'language_id'  =>  $model->language_id,
            'country_id'  =>  $model->country_id,
            'created_at'  =>  $model->created_at,
            'updated_at'  =>  $model->updated_at,
            'deleted_at'  =>  $model->deleted_at,
        ]);
    }
    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
}