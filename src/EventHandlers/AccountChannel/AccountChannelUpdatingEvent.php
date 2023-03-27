<?php

namespace NextDeveloper\Account\EventHandlers\AccountChannel;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class AccountChannelUpdatingEvent
 * @package PlusClouds\Account\Handlers\Events
 */
class AccountChannelUpdatingEvent implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle($event)
    {

    }
}
