<?php

namespace NextDeveloper\Account\EventHandlers\AccountAffiliationRule;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountAffiliationRuleUpdatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountAffiliationRuleUpdatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
