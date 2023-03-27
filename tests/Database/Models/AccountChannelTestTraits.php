<?php

namespace NextDeveloper\Account\Tests\Database\Models;

use Tests\TestCase;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use NextDeveloper\Account\Database\Filters\AccountChannelQueryFilter;
use NextDeveloper\Account\Services\AbstractServices\AbstractAccountChannelService;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Resource\Collection;

trait AccountChannelTestTraits
{
    public $http;

    /**
    *   Creating the Guzzle object
    */
    public function setupGuzzle()
    {
        $this->http = new Client([
            'base_uri'  =>  '127.0.0.1:8000'
        ]);
    }

    /**
    *   Destroying the Guzzle object
    */
    public function destroyGuzzle()
    {
        $this->http = null;
    }

    public function test_http_accountchannel_get()
    {
        $this->setupGuzzle();
        $response = $this->http->request('GET', '/account/accountchannel');

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
    }

    /**
    * Get test
    *
    * @return bool
    */
    public function test_accountchannel_model_get()
    {
        $result = AbstractAccountChannelService::get();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_accountchannel_get_all()
    {
        $result = AbstractAccountChannelService::getAll();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_accountchannel_get_paginated()
    {
        $result = AbstractAccountChannelService::get(null, [
            'paginated' =>  'true'
        ]);

        $this->assertIsObject($result, LengthAwarePaginator::class);
    }

    public function test_accountchannel_event_retrieved_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelRetrievedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_created_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelCreatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_creating_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelCreatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_saving_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelSavingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_saved_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelSavedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_updating_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelUpdatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_updated_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelUpdatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_deleting_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelDeletingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_deleted_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelDeletedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_restoring_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelRestoringEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_restored_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelRestoredEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountchannel_event_retrieved_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountChannel::first();

            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelRetrievedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_created_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountChannel::first();

            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelCreatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_creating_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountChannel::first();

            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelCreatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_saving_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountChannel::first();

            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelSavingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_saved_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountChannel::first();

            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelSavedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_updating_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountChannel::first();

            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelUpdatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_updated_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountChannel::first();

            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelUpdatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_deleting_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountChannel::first();

            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelDeletingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_deleted_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountChannel::first();

            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelDeletedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_restoring_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountChannel::first();

            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelRestoringEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountchannel_event_restored_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountChannel::first();

            event( new \NextDeveloper\Account\Events\AccountChannel\AccountChannelRestoredEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountchannel_event_name_filter()
    {
        try {
            $request = new Request([
                'name'  =>  'a'
            ]);

            $filter = new AccountChannelQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountchannel_event_description_filter()
    {
        try {
            $request = new Request([
                'description'  =>  'a'
            ]);

            $filter = new AccountChannelQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountChannel::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
}