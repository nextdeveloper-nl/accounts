<?php

namespace NextDeveloper\Account\EventHandlers\AccountAffiliationRule;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountAffiliationRuleCreatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountAffiliationRuleCreatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
