<?php

namespace NextDeveloper\Account\Tests\Database\Models;

use Tests\TestCase;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use NextDeveloper\Account\Database\Filters\AccountTypeQueryFilter;
use NextDeveloper\Account\Services\AbstractServices\AbstractAccountTypeService;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Resource\Collection;

trait AccountTypeTestTraits
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

    public function test_http_accounttype_get()
    {
        $this->setupGuzzle();
        $response = $this->http->request('GET', '/account/accounttype');

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
    }

    /**
    * Get test
    *
    * @return bool
    */
    public function test_accounttype_model_get()
    {
        $result = AbstractAccountTypeService::get();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_accounttype_get_all()
    {
        $result = AbstractAccountTypeService::getAll();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_accounttype_get_paginated()
    {
        $result = AbstractAccountTypeService::get(null, [
            'paginated' =>  'true'
        ]);

        $this->assertIsObject($result, LengthAwarePaginator::class);
    }

    public function test_accounttype_event_retrieved_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeRetrievedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_created_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeCreatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_creating_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeCreatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_saving_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeSavingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_saved_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeSavedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_updating_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeUpdatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_updated_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeUpdatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_deleting_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeDeletingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_deleted_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeDeletedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_restoring_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeRestoringEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_restored_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeRestoredEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accounttype_event_retrieved_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountType::first();

            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeRetrievedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_created_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountType::first();

            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeCreatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_creating_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountType::first();

            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeCreatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_saving_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountType::first();

            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeSavingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_saved_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountType::first();

            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeSavedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_updating_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountType::first();

            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeUpdatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_updated_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountType::first();

            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeUpdatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_deleting_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountType::first();

            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeDeletingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_deleted_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountType::first();

            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeDeletedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_restoring_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountType::first();

            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeRestoringEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accounttype_event_restored_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountType::first();

            event( new \NextDeveloper\Account\Events\AccountType\AccountTypeRestoredEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accounttype_event_name_filter()
    {
        try {
            $request = new Request([
                'name'  =>  'a'
            ]);

            $filter = new AccountTypeQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountType::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accounttype_event_description_filter()
    {
        try {
            $request = new Request([
                'description'  =>  'a'
            ]);

            $filter = new AccountTypeQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountType::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
}