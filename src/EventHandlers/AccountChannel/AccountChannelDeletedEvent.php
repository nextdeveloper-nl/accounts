<?php

namespace NextDeveloper\Account\EventHandlers\AccountChannel;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountChannelDeletedEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountChannelDeletedEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
