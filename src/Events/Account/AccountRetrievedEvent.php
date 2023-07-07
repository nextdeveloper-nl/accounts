<?php

namespace NextDeveloper\Accounts\Events\Account;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\Accounts\Database\Models\Account;

/**
 * Class AccountRetrievedEvent
 * @package NextDeveloper\Accounts\Events
 */
class AccountRetrievedEvent
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
    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
}