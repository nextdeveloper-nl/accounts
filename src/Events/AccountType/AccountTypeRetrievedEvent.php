<?php

namespace NextDeveloper\Account\Events\AccountType;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\Account\Database\Models\AccountType;

/**
 * Class AccountTypeRetrievedEvent
 * @package NextDeveloper\Account\Events
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
}