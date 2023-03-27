<?php

namespace NextDeveloper\Account\EventHandlers\AccountInvite;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountInviteUpdatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountInviteUpdatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
