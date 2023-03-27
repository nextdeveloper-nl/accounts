<?php

namespace NextDeveloper\Account\Events\AccountInvite;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\Account\Database\Models\AccountInvite;

/**
 * Class AccountInviteUpdatedEvent
 * @package NextDeveloper\Account\Events
 */
class AccountInviteUpdatedEvent
{
    use SerializesModels;

    /**
     * @var AccountInvite
     */
    public $_model;

    /**
     * @var int|null
     */
    protected $timestamp = null;

    public function __construct(AccountInvite $model = null) {
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