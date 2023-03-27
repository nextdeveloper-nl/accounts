<?php

namespace NextDeveloper\Account\EventHandlers\Account;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountUpdatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountUpdatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
