<?php

namespace NextDeveloper\Account\EventHandlers\Account;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountUpdatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountUpdatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
