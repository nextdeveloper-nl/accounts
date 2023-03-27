<?php

namespace NextDeveloper\Account\EventHandlers\AccountChannel;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountChannelUpdatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountChannelUpdatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
