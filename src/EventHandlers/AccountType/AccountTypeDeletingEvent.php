<?php

namespace NextDeveloper\Account\EventHandlers\AccountType;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountTypeDeletingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountTypeDeletingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
