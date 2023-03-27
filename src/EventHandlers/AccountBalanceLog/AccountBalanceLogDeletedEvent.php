<?php

namespace NextDeveloper\Account\EventHandlers\AccountBalanceLog;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountBalanceLogDeletedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountBalanceLogDeletedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
