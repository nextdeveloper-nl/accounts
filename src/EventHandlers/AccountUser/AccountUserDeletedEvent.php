<?php

namespace NextDeveloper\Account\EventHandlers\AccountUser;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountUserDeletedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountUserDeletedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
