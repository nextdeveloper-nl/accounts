<?php

namespace NextDeveloper\Account\EventHandlers\AccountInvite;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountInviteUpdatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountInviteUpdatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
