<?php

namespace NextDeveloper\Account\EventHandlers\AccountChannel;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountChannelCreatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountChannelCreatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
