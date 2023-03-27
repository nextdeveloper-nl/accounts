<?php

namespace NextDeveloper\Account\EventHandlers\AccountType;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountTypeCreatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountTypeCreatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
