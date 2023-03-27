<?php

namespace NextDeveloper\Account\EventHandlers\AccountInvite;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountInviteDeletingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountInviteDeletingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
