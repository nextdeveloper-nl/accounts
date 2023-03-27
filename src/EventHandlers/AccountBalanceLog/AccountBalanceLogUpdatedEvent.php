<?php

namespace NextDeveloper\Account\EventHandlers\AccountBalanceLog;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountBalanceLogUpdatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountBalanceLogUpdatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
