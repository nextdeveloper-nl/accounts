<?php

namespace NextDeveloper\Account\Events\AccountChannel;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\Account\Database\Models\AccountChannel;

/**
 * Class AccountChannelRestoringEvent
 * @package NextDeveloper\Account\Events
 */
class AccountChannelRestoringEvent
{
    use SerializesModels;

    /**
     * @var AccountChannel
     */
    public $_model;

    /**
     * @var int|null
     */
    protected $timestamp = null;

    public function __construct(AccountChannel $model = null) {
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