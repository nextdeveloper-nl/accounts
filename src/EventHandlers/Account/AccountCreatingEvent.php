<?php

namespace NextDeveloper\Account\EventHandlers\Account;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountCreatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountCreatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
