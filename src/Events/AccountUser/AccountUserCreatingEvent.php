<?php

namespace NextDeveloper\Account\Events\AccountUser;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\Account\Database\Models\AccountUser;

/**
 * Class AccountUserCreatingEvent
 * @package NextDeveloper\Account\Events
 */
class AccountUserCreatingEvent
{
    use SerializesModels;

    /**
     * @var AccountUser
     */
    public $_model;

    /**
     * @var int|null
     */
    protected $timestamp = null;

    public function __construct(AccountUser $model = null) {
        $this->_model = $model;
    }

    /**
    * @param int $value
    *
    * @return AbstractEvent
    */
    public function setTimestamp($value) {
        $this->timestamp = $value;

        return $this;
    }

    /**
    * @return int|null
    */
    public function getTimestamp() {
        return $this->timestamp;
    }
}