<?php

namespace NextDeveloper\Account\EventHandlers\AccountAffiliationRule;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountAffiliationRuleCreatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountAffiliationRuleCreatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
