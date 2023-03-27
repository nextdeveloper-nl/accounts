<?php

namespace NextDeveloper\Account\EventHandlers\AccountBalanceLog;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountBalanceLogCreatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountBalanceLogCreatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
