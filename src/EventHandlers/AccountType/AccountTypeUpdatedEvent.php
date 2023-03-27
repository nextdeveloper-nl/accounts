<?php

namespace NextDeveloper\Account\EventHandlers\AccountType;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountTypeUpdatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountTypeUpdatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
