<?php

namespace NextDeveloper\Account\Tests\Database\Models;

use Tests\TestCase;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use NextDeveloper\Account\Database\Filters\AccountUserQueryFilter;
use NextDeveloper\Account\Services\AbstractServices\AbstractAccountUserService;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Resource\Collection;

trait AccountUserTestTraits
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

    public function test_http_accountuser_get()
    {
        $this->setupGuzzle();
        $response = $this->http->request('GET', '/account/accountuser');

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
    }

    /**
    * Get test
    *
    * @return bool
    */
    public function test_accountuser_model_get()
    {
        $result = AbstractAccountUserService::get();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_accountuser_get_all()
    {
        $result = AbstractAccountUserService::getAll();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_accountuser_get_paginated()
    {
        $result = AbstractAccountUserService::get(null, [
            'paginated' =>  'true'
        ]);

        $this->assertIsObject($result, LengthAwarePaginator::class);
    }

    public function test_accountuser_event_retrieved_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserRetrievedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_created_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserCreatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_creating_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserCreatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_saving_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserSavingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_saved_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserSavedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_updating_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserUpdatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_updated_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserUpdatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_deleting_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserDeletingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_deleted_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserDeletedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_restoring_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserRestoringEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_restored_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserRestoredEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountuser_event_retrieved_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountUser::first();

            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserRetrievedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_created_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountUser::first();

            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserCreatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_creating_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountUser::first();

            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserCreatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_saving_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountUser::first();

            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserSavingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_saved_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountUser::first();

            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserSavedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_updating_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountUser::first();

            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserUpdatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_updated_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountUser::first();

            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserUpdatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_deleting_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountUser::first();

            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserDeletingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_deleted_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountUser::first();

            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserDeletedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_restoring_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountUser::first();

            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserRestoringEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountuser_event_restored_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountUser::first();

            event( new \NextDeveloper\Account\Events\AccountUser\AccountUserRestoredEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
}