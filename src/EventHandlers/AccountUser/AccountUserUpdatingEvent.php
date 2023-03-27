<?php

namespace NextDeveloper\Account\EventHandlers\AccountUser;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountUserUpdatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountUserUpdatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
