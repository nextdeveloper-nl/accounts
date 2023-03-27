<?php

namespace NextDeveloper\Account\Events\AccountAffiliationRule;

use Illuminate\Queue\SerializesModels;
use NextDeveloper\Account\Database\Models\AccountAffiliationRule;

/**
 * Class AccountAffiliationRuleRetrievedEvent
 * @package NextDeveloper\Account\Events
 */
class AccountAffiliationRuleRetrievedEvent
{
    use SerializesModels;

    /**
     * @var AccountAffiliationRule
     */
    public $_model;

    /**
     * @var int|null
     */
    protected $timestamp = null;

    public function __construct(AccountAffiliationRule $model = null) {
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