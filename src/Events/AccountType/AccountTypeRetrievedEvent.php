<?php

namespace NextDeveloper\Accounts\Events\AccountType;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\Accounts\Database\Models\AccountType;

/**
 * Class AccountTypeRetrievedEvent
 * @package NextDeveloper\Accounts\Events
 */
class AccountTypeRetrievedEvent
{
    use SerializesModels;

    /**
     * @var AccountType
     */
    public $_model;

    /**
     * @var int|null
     */
    protected $timestamp = null;

    public function __construct(AccountType $model = null) {
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