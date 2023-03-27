<?php

namespace NextDeveloper\Account\EventHandlers\AccountType;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountTypeDeletedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountTypeDeletedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
