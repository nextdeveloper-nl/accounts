<?php

namespace NextDeveloper\Account\Events\AccountBalanceLog;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\Account\Database\Models\AccountBalanceLog;

/**
 * Class AccountBalanceLogRetrievedEvent
 * @package NextDeveloper\Account\Events
 */
class AccountBalanceLogRetrievedEvent
{
    use SerializesModels;

    /**
     * @var AccountBalanceLog
     */
    public $_model;

    /**
     * @var int|null
     */
    protected $timestamp = null;

    public function __construct(AccountBalanceLog $model = null) {
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