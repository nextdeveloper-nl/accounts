<?php

namespace NextDeveloper\Account\EventHandlers\AccountUser;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountUserCreatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountUserCreatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
