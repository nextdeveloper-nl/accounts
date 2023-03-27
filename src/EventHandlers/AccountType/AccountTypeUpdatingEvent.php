<?php

namespace NextDeveloper\Account\EventHandlers\AccountType;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountTypeUpdatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountTypeUpdatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
