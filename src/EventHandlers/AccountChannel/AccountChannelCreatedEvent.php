<?php

namespace NextDeveloper\Account\EventHandlers\AccountChannel;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountChannelCreatedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountChannelCreatedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
