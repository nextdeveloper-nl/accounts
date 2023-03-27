<?php

namespace NextDeveloper\Account\EventHandlers\AccountUser;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountUserUpdatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountUserUpdatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
