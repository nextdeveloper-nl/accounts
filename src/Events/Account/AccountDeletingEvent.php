<?php

namespace NextDeveloper\Account\Events\Account;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\Account\Database\Models\Account;

/**
 * Class AccountDeletingEvent
 * @package NextDeveloper\Account\Events
 */
class AccountDeletingEvent
{
    use SerializesModels;

    /**
     * @var Account
     */
    public $_model;

    /**
     * @var int|null
     */
    protected $timestamp = null;

    public function __construct(Account $model = null) {
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