<?php

namespace NextDeveloper\Account\EventHandlers\Account;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountCreatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountCreatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
