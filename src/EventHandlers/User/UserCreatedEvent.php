<?php

namespace NextDeveloper\Accounts\EventHandlers\User;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class UserCreatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class UserCreatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
}