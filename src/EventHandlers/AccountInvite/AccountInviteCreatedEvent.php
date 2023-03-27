<?php

namespace NextDeveloper\Account\EventHandlers\AccountInvite;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountInviteCreatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountInviteCreatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
