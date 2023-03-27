<?php

namespace NextDeveloper\Account\EventHandlers\AccountAffiliationRule;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountAffiliationRuleUpdatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountAffiliationRuleUpdatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
