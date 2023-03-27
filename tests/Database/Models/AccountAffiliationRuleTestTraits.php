<?php

namespace NextDeveloper\Account\Tests\Database\Models;

use Tests\TestCase;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use NextDeveloper\Account\Database\Filters\AccountAffiliationRuleQueryFilter;
use NextDeveloper\Account\Services\AbstractServices\AbstractAccountAffiliationRuleService;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Resource\Collection;

trait AccountAffiliationRuleTestTraits
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

    public function test_http_accountaffiliationrule_get()
    {
        $this->setupGuzzle();
        $response = $this->http->request('GET', '/account/accountaffiliationrule');

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
    }

    /**
    * Get test
    *
    * @return bool
    */
    public function test_accountaffiliationrule_model_get()
    {
        $result = AbstractAccountAffiliationRuleService::get();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_accountaffiliationrule_get_all()
    {
        $result = AbstractAccountAffiliationRuleService::getAll();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_accountaffiliationrule_get_paginated()
    {
        $result = AbstractAccountAffiliationRuleService::get(null, [
            'paginated' =>  'true'
        ]);

        $this->assertIsObject($result, LengthAwarePaginator::class);
    }

    public function test_accountaffiliationrule_event_retrieved_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleRetrievedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_created_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleCreatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_creating_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleCreatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_saving_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleSavingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_saved_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleSavedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_updating_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleUpdatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_updated_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleUpdatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_deleting_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleDeletingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_deleted_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleDeletedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_restoring_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleRestoringEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_restored_without_object()
    {
        try {
            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleRestoredEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountaffiliationrule_event_retrieved_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::first();

            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleRetrievedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_created_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::first();

            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleCreatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_creating_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::first();

            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleCreatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_saving_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::first();

            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleSavingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_saved_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::first();

            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleSavedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_updating_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::first();

            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleUpdatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_updated_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::first();

            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleUpdatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_deleting_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::first();

            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleDeletingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_deleted_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::first();

            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleDeletedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_restoring_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::first();

            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleRestoringEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_accountaffiliationrule_event_restored_with_object()
    {
        try {
            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::first();

            event( new \NextDeveloper\Account\Events\AccountAffiliationRule\AccountAffiliationRuleRestoredEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountaffiliationrule_event_start_at_filter_start()
    {
        try {
            $request = new Request([
                'start_atStart'  =>  now()
            ]);

            $filter = new AccountAffiliationRuleQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountaffiliationrule_event_expires_at_filter_start()
    {
        try {
            $request = new Request([
                'expires_atStart'  =>  now()
            ]);

            $filter = new AccountAffiliationRuleQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountaffiliationrule_event_created_at_filter_start()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now()
            ]);

            $filter = new AccountAffiliationRuleQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountaffiliationrule_event_updated_at_filter_start()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now()
            ]);

            $filter = new AccountAffiliationRuleQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountaffiliationrule_event_start_at_filter_end()
    {
        try {
            $request = new Request([
                'start_atEnd'  =>  now()
            ]);

            $filter = new AccountAffiliationRuleQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountaffiliationrule_event_expires_at_filter_end()
    {
        try {
            $request = new Request([
                'expires_atEnd'  =>  now()
            ]);

            $filter = new AccountAffiliationRuleQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountaffiliationrule_event_created_at_filter_end()
    {
        try {
            $request = new Request([
                'created_atEnd'  =>  now()
            ]);

            $filter = new AccountAffiliationRuleQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountaffiliationrule_event_updated_at_filter_end()
    {
        try {
            $request = new Request([
                'updated_atEnd'  =>  now()
            ]);

            $filter = new AccountAffiliationRuleQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountaffiliationrule_event_start_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'start_atStart'  =>  now(),
                'start_atEnd'  =>  now()
            ]);

            $filter = new AccountAffiliationRuleQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountaffiliationrule_event_expires_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'expires_atStart'  =>  now(),
                'expires_atEnd'  =>  now()
            ]);

            $filter = new AccountAffiliationRuleQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountaffiliationrule_event_created_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now(),
                'created_atEnd'  =>  now()
            ]);

            $filter = new AccountAffiliationRuleQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_accountaffiliationrule_event_updated_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now(),
                'updated_atEnd'  =>  now()
            ]);

            $filter = new AccountAffiliationRuleQueryFilter($request);

            $model = \NextDeveloper\Account\Database\Models\AccountAffiliationRule::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
}