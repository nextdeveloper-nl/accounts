<?php

namespace NextDeveloper\Accounts\Events\AccountUser;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\Accounts\Database\Models\AccountUser;

/**
 * Class AccountUserDeletingEvent
 * @package NextDeveloper\Accounts\Events
 */
class AccountUserDeletingEvent
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
    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
}