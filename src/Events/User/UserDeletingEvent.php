<?php

namespace NextDeveloper\Account\Events\User;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\Account\Database\Models\User;

/**
 * Class UserDeletingEvent
 * @package NextDeveloper\Account\Events
 */
class UserDeletingEvent
{
    use SerializesModels;

    /**
     * @var User
     */
    public $_model;

    /**
     * @var int|null
     */
    protected $timestamp = null;

    public function __construct(User $model = null) {
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