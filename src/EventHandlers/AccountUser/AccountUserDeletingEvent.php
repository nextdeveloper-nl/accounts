<?php

namespace NextDeveloper\Account\EventHandlers\AccountUser;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountUserDeletingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountUserDeletingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
