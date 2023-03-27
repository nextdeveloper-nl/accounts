<?php

namespace NextDeveloper\Account\EventHandlers\AccountAffiliationRule;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountAffiliationRuleDeletedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountAffiliationRuleDeletedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
