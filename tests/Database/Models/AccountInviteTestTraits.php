<?php

namespace NextDeveloper\Account\Tests\Database\Models;

use Tests\TestCase;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use NextDeveloper\Account\Database\Filters\AccountInviteQueryFilter;
use NextDeveloper\Account\Services\AbstractServices\AbstractAccountInviteService;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Resource\Collection;

trait AccountInviteTestTraits
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

    public function test_http_accountinvite_get()
    {
        $this->setupGuzzle();
        $response = $this->http->request('GET', '/account/accountinvite');

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
    }

    /**
    * Get test
    *
    * @return bool
    */
    public function test_accountinvite_model_get()
    {
        $result = AbstractAccountInviteService::get();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_accountinvite_get_all()
    {
        $result = AbstractAccountInviteService::getAll();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_accountinvite_get_paginated()
    {
        $result = AbstractAccountInviteService::get(null, [
            'paginated' =>  'true'
        ]);

        $this->assertIsObject($result, LengthAwarePaginator::class);
    }

    public function test_accountinvite_event_retrieved_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteRetrievedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_created_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteCreatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_creating_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteCreatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_saving_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteSavingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_saved_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteSavedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_updating_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteUpdatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_updated_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteUpdatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_deleting_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteDeletingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_deleted_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteDeletedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_restoring_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteRestoringEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_restored_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteRestoredEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountinvite_event_retrieved_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountInvite::first();

            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteRetrievedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_created_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountInvite::first();

            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteCreatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_creating_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountInvite::first();

            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteCreatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_saving_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountInvite::first();

            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteSavingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_saved_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountInvite::first();

            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteSavedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_updating_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountInvite::first();

            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteUpdatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_updated_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountInvite::first();

            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteUpdatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_deleting_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountInvite::first();

            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteDeletingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_deleted_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountInvite::first();

            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteDeletedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_restoring_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountInvite::first();

            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteRestoringEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountinvite_event_restored_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountInvite::first();

            event( new \NextDeveloper\Account\Events\AccountInvite\AccountInviteRestoredEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountinvite_event_code_filter()
    {
        try {
            $request = new Request([
                'code'  =>  'a'
            ]);

            $filter = new AccountInviteQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountInvite::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountinvite_event_created_at_filter_start()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now()
            ]);

            $filter = new AccountInviteQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountInvite::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountinvite_event_updated_at_filter_start()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now()
            ]);

            $filter = new AccountInviteQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountInvite::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountinvite_event_expires_at_filter_start()
    {
        try {
            $request = new Request([
                'expires_atStart'  =>  now()
            ]);

            $filter = new AccountInviteQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountInvite::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountinvite_event_deleted_at_filter_start()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now()
            ]);

            $filter = new AccountInviteQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountInvite::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountinvite_event_created_at_filter_end()
    {
        try {
            $request = new Request([
                'created_atEnd'  =>  now()
            ]);

            $filter = new AccountInviteQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountInvite::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountinvite_event_updated_at_filter_end()
    {
        try {
            $request = new Request([
                'updated_atEnd'  =>  now()
            ]);

            $filter = new AccountInviteQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountInvite::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountinvite_event_expires_at_filter_end()
    {
        try {
            $request = new Request([
                'expires_atEnd'  =>  now()
            ]);

            $filter = new AccountInviteQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountInvite::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountinvite_event_deleted_at_filter_end()
    {
        try {
            $request = new Request([
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new AccountInviteQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountInvite::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountinvite_event_created_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now(),
                'created_atEnd'  =>  now()
            ]);

            $filter = new AccountInviteQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountInvite::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountinvite_event_updated_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now(),
                'updated_atEnd'  =>  now()
            ]);

            $filter = new AccountInviteQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountInvite::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountinvite_event_expires_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'expires_atStart'  =>  now(),
                'expires_atEnd'  =>  now()
            ]);

            $filter = new AccountInviteQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountInvite::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountinvite_event_deleted_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now(),
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new AccountInviteQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountInvite::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
}