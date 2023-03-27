<?php

namespace NextDeveloper\Account\EventHandlers\AccountBalanceLog;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountBalanceLogCreatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountBalanceLogCreatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
