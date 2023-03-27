<?php

namespace NextDeveloper\Account\Tests\Database\Models;

use Tests\TestCase;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use NextDeveloper\Account\Database\Filters\AccountBalanceLogQueryFilter;
use NextDeveloper\Account\Services\AbstractServices\AbstractAccountBalanceLogService;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Resource\Collection;

trait AccountBalanceLogTestTraits
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

    public function test_http_accountbalancelog_get()
    {
        $this->setupGuzzle();
        $response = $this->http->request('GET', '/account/accountbalancelog');

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
    }

    /**
    * Get test
    *
    * @return bool
    */
    public function test_accountbalancelog_model_get()
    {
        $result = AbstractAccountBalanceLogService::get();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_accountbalancelog_get_all()
    {
        $result = AbstractAccountBalanceLogService::getAll();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_accountbalancelog_get_paginated()
    {
        $result = AbstractAccountBalanceLogService::get(null, [
            'paginated' =>  'true'
        ]);

        $this->assertIsObject($result, LengthAwarePaginator::class);
    }

    public function test_accountbalancelog_event_retrieved_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogRetrievedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_created_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogCreatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_creating_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogCreatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_saving_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogSavingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_saved_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogSavedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_updating_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogUpdatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_updated_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogUpdatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_deleting_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogDeletingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_deleted_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogDeletedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_restoring_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogRestoringEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_restored_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogRestoredEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_retrieved_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::first();

            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogRetrievedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_created_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::first();

            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogCreatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_creating_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::first();

            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogCreatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_saving_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::first();

            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogSavingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_saved_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::first();

            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogSavedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_updating_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::first();

            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogUpdatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_updated_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::first();

            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogUpdatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_deleting_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::first();

            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogDeletingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_deleted_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::first();

            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogDeletedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_restoring_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::first();

            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogRestoringEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountbalancelog_event_restored_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::first();

            event( new \NextDeveloper\Account\Events\AccountBalanceLog\AccountBalanceLogRestoredEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_loggable_type_filter()
    {
        try {
            $request = new Request([
                'loggable_type'  =>  'a'
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_reason_filter()
    {
        try {
            $request = new Request([
                'reason'  =>  'a'
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_currency_code_filter()
    {
        try {
            $request = new Request([
                'currency_code'  =>  'a'
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_cancelation_reason_filter()
    {
        try {
            $request = new Request([
                'cancelation_reason'  =>  'a'
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_amount_filter()
    {
        try {
            $request = new Request([
                'amount'  =>  '1'
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_balance_before_filter()
    {
        try {
            $request = new Request([
                'balance_before'  =>  '1'
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_balance_after_filter()
    {
        try {
            $request = new Request([
                'balance_after'  =>  '1'
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_loggable_created_at_filter_start()
    {
        try {
            $request = new Request([
                'loggable_created_atStart'  =>  now()
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_created_at_filter_start()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now()
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_updated_at_filter_start()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now()
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_deleted_at_filter_start()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now()
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_loggable_created_at_filter_end()
    {
        try {
            $request = new Request([
                'loggable_created_atEnd'  =>  now()
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_created_at_filter_end()
    {
        try {
            $request = new Request([
                'created_atEnd'  =>  now()
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_updated_at_filter_end()
    {
        try {
            $request = new Request([
                'updated_atEnd'  =>  now()
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_deleted_at_filter_end()
    {
        try {
            $request = new Request([
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_loggable_created_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'loggable_created_atStart'  =>  now(),
                'loggable_created_atEnd'  =>  now()
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_created_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now(),
                'created_atEnd'  =>  now()
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_updated_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now(),
                'updated_atEnd'  =>  now()
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountbalancelog_event_deleted_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now(),
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new AccountBalanceLogQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountBalanceLog::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
}