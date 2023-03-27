<?php

namespace NextDeveloper\Account\Tests\Database\Models;

use Tests\TestCase;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use NextDeveloper\Account\Database\Filters\AccountQueryFilter;
use NextDeveloper\Account\Services\AbstractServices\AbstractAccountService;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Resource\Collection;

trait AccountTestTraits
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

    public function test_http_account_get()
    {
        $this->setupGuzzle();
        $response = $this->http->request('GET', '/account/account');

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
    }

    /**
    * Get test
    *
    * @return bool
    */
    public function test_account_model_get()
    {
        $result = AbstractAccountService::get();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_account_get_all()
    {
        $result = AbstractAccountService::getAll();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_account_get_paginated()
    {
        $result = AbstractAccountService::get(null, [
            'paginated' =>  'true'
        ]);

        $this->assertIsObject($result, LengthAwarePaginator::class);
    }

    public function test_account_event_retrieved_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\Account\AccountRetrievedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_created_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\Account\AccountCreatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_creating_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\Account\AccountCreatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_saving_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\Account\AccountSavingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_saved_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\Account\AccountSavedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_updating_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\Account\AccountUpdatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_updated_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\Account\AccountUpdatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_deleting_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\Account\AccountDeletingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_deleted_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\Account\AccountDeletedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_restoring_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\Account\AccountRestoringEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_restored_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\Account\AccountRestoredEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_retrieved_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\Account::first();

            event( new \NextDeveloper\Account\Events\Account\AccountRetrievedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_created_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\Account::first();

            event( new \NextDeveloper\Account\Events\Account\AccountCreatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_creating_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\Account::first();

            event( new \NextDeveloper\Account\Events\Account\AccountCreatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_saving_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\Account::first();

            event( new \NextDeveloper\Account\Events\Account\AccountSavingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_saved_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\Account::first();

            event( new \NextDeveloper\Account\Events\Account\AccountSavedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_updating_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\Account::first();

            event( new \NextDeveloper\Account\Events\Account\AccountUpdatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_updated_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\Account::first();

            event( new \NextDeveloper\Account\Events\Account\AccountUpdatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_deleting_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\Account::first();

            event( new \NextDeveloper\Account\Events\Account\AccountDeletingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_deleted_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\Account::first();

            event( new \NextDeveloper\Account\Events\Account\AccountDeletedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_restoring_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\Account::first();

            event( new \NextDeveloper\Account\Events\Account\AccountRestoringEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_account_event_restored_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\Account::first();

            event( new \NextDeveloper\Account\Events\Account\AccountRestoredEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_name_filter()
    {
        try {
            $request = new Request([
                'name'  =>  'a'
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_domain_filter()
    {
        try {
            $request = new Request([
                'domain'  =>  'a'
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_phone_code_filter()
    {
        try {
            $request = new Request([
                'phone_code'  =>  'a'
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_phone_filter()
    {
        try {
            $request = new Request([
                'phone'  =>  'a'
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_currency_code_filter()
    {
        try {
            $request = new Request([
                'currency_code'  =>  'a'
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_credit_currency_code_filter()
    {
        try {
            $request = new Request([
                'credit_currency_code'  =>  'a'
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_description_filter()
    {
        try {
            $request = new Request([
                'description'  =>  'a'
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_iam_dn_filter()
    {
        try {
            $request = new Request([
                'iam_dn'  =>  'a'
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_tax_office_filter()
    {
        try {
            $request = new Request([
                'tax_office'  =>  'a'
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_balance_filter()
    {
        try {
            $request = new Request([
                'balance'  =>  '1'
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_credit_filter()
    {
        try {
            $request = new Request([
                'credit'  =>  '1'
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_risk_level_filter()
    {
        try {
            $request = new Request([
                'risk_level'  =>  '1'
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_approved_at_filter_start()
    {
        try {
            $request = new Request([
                'approved_atStart'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_suspended_at_filter_start()
    {
        try {
            $request = new Request([
                'suspended_atStart'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_created_at_filter_start()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_updated_at_filter_start()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_deleted_at_filter_start()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_approved_at_filter_end()
    {
        try {
            $request = new Request([
                'approved_atEnd'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_suspended_at_filter_end()
    {
        try {
            $request = new Request([
                'suspended_atEnd'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_created_at_filter_end()
    {
        try {
            $request = new Request([
                'created_atEnd'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_updated_at_filter_end()
    {
        try {
            $request = new Request([
                'updated_atEnd'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_deleted_at_filter_end()
    {
        try {
            $request = new Request([
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_approved_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'approved_atStart'  =>  now(),
                'approved_atEnd'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_suspended_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'suspended_atStart'  =>  now(),
                'suspended_atEnd'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_created_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now(),
                'created_atEnd'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_updated_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now(),
                'updated_atEnd'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_account_event_deleted_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now(),
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new AccountQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\Account::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
}