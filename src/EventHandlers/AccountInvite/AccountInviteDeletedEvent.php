<?php

namespace NextDeveloper\Account\EventHandlers\AccountInvite;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountInviteDeletedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountInviteDeletedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
