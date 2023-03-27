<?php

namespace NextDeveloper\Account\EventHandlers\Account;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountDeletingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountDeletingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
