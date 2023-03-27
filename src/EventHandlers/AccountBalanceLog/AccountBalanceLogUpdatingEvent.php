<?php

namespace NextDeveloper\Account\EventHandlers\AccountBalanceLog;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountBalanceLogUpdatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountBalanceLogUpdatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
