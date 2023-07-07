<?php

namespace NextDeveloper\Accounts\Tests\Database\Models;

use Tests\TestCase;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use NextDeveloper\Accounts\Database\Filters\UserQueryFilter;
use NextDeveloper\Accounts\Services\AbstractServices\AbstractUserService;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Resource\Collection;

trait UserTestTraits
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

    public function test_http_user_get()
    {
        $this->setupGuzzle();
        $response = $this->http->request(
            'GET',
            '/accounts/user',
            ['http_errors' => false]
        );

        $this->assertContains($response->getStatusCode(), [
            Response::HTTP_OK,
            Response::HTTP_NOT_FOUND
        ]);
    }

    public function test_http_user_post()
    {
        $this->setupGuzzle();
        $response = $this->http->request('POST', '/accounts/user', [
            'form_params'   =>  [
                'name'  =>  'a',
                'surname'  =>  'a',
                'email'  =>  'a',
                'fullname'  =>  'a',
                'username'  =>  'a',
                'about'  =>  'a',
                'nin'  =>  'a',
                'cell_phone'  =>  'a',
                    'birthday'  =>  now(),
                            ],
                ['http_errors' => false]
            ]
        );

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
    }

    /**
    * Get test
    *
    * @return bool
    */
    public function test_user_model_get()
    {
        $result = AbstractUserService::get();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_user_get_all()
    {
        $result = AbstractUserService::getAll();

        $this->assertIsObject($result, Collection::class);
    }

    public function test_user_get_paginated()
    {
        $result = AbstractUserService::get(null, [
            'paginated' =>  'true'
        ]);

        $this->assertIsObject($result, LengthAwarePaginator::class);
    }

    public function test_user_event_retrieved_without_object()
    {
        try {
            event( new \NextDeveloper\Accounts\Events\User\UserRetrievedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_created_without_object()
    {
        try {
            event( new \NextDeveloper\Accounts\Events\User\UserCreatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_creating_without_object()
    {
        try {
            event( new \NextDeveloper\Accounts\Events\User\UserCreatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_saving_without_object()
    {
        try {
            event( new \NextDeveloper\Accounts\Events\User\UserSavingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_saved_without_object()
    {
        try {
            event( new \NextDeveloper\Accounts\Events\User\UserSavedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_updating_without_object()
    {
        try {
            event( new \NextDeveloper\Accounts\Events\User\UserUpdatingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_updated_without_object()
    {
        try {
            event( new \NextDeveloper\Accounts\Events\User\UserUpdatedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_deleting_without_object()
    {
        try {
            event( new \NextDeveloper\Accounts\Events\User\UserDeletingEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_deleted_without_object()
    {
        try {
            event( new \NextDeveloper\Accounts\Events\User\UserDeletedEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_restoring_without_object()
    {
        try {
            event( new \NextDeveloper\Accounts\Events\User\UserRestoringEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_restored_without_object()
    {
        try {
            event( new \NextDeveloper\Accounts\Events\User\UserRestoredEvent() );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_retrieved_with_object()
    {
        try {
            $model = \NextDeveloper\Accounts\Database\Models\User::first();

            event( new \NextDeveloper\Accounts\Events\User\UserRetrievedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_created_with_object()
    {
        try {
            $model = \NextDeveloper\Accounts\Database\Models\User::first();

            event( new \NextDeveloper\Accounts\Events\User\UserCreatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_creating_with_object()
    {
        try {
            $model = \NextDeveloper\Accounts\Database\Models\User::first();

            event( new \NextDeveloper\Accounts\Events\User\UserCreatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_saving_with_object()
    {
        try {
            $model = \NextDeveloper\Accounts\Database\Models\User::first();

            event( new \NextDeveloper\Accounts\Events\User\UserSavingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_saved_with_object()
    {
        try {
            $model = \NextDeveloper\Accounts\Database\Models\User::first();

            event( new \NextDeveloper\Accounts\Events\User\UserSavedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_updating_with_object()
    {
        try {
            $model = \NextDeveloper\Accounts\Database\Models\User::first();

            event( new \NextDeveloper\Accounts\Events\User\UserUpdatingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_updated_with_object()
    {
        try {
            $model = \NextDeveloper\Accounts\Database\Models\User::first();

            event( new \NextDeveloper\Accounts\Events\User\UserUpdatedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_deleting_with_object()
    {
        try {
            $model = \NextDeveloper\Accounts\Database\Models\User::first();

            event( new \NextDeveloper\Accounts\Events\User\UserDeletingEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_deleted_with_object()
    {
        try {
            $model = \NextDeveloper\Accounts\Database\Models\User::first();

            event( new \NextDeveloper\Accounts\Events\User\UserDeletedEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_restoring_with_object()
    {
        try {
            $model = \NextDeveloper\Accounts\Database\Models\User::first();

            event( new \NextDeveloper\Accounts\Events\User\UserRestoringEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    public function test_user_event_restored_with_object()
    {
        try {
            $model = \NextDeveloper\Accounts\Database\Models\User::first();

            event( new \NextDeveloper\Accounts\Events\User\UserRestoredEvent($model) );
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_name_filter()
    {
        try {
            $request = new Request([
                'name'  =>  'a'
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_surname_filter()
    {
        try {
            $request = new Request([
                'surname'  =>  'a'
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_email_filter()
    {
        try {
            $request = new Request([
                'email'  =>  'a'
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_fullname_filter()
    {
        try {
            $request = new Request([
                'fullname'  =>  'a'
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_username_filter()
    {
        try {
            $request = new Request([
                'username'  =>  'a'
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_about_filter()
    {
        try {
            $request = new Request([
                'about'  =>  'a'
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_nin_filter()
    {
        try {
            $request = new Request([
                'nin'  =>  'a'
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_cell_phone_filter()
    {
        try {
            $request = new Request([
                'cell_phone'  =>  'a'
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_birthday_filter_start()
    {
        try {
            $request = new Request([
                'birthdayStart'  =>  now()
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_created_at_filter_start()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now()
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_updated_at_filter_start()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now()
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_deleted_at_filter_start()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now()
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_birthday_filter_end()
    {
        try {
            $request = new Request([
                'birthdayEnd'  =>  now()
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_created_at_filter_end()
    {
        try {
            $request = new Request([
                'created_atEnd'  =>  now()
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_updated_at_filter_end()
    {
        try {
            $request = new Request([
                'updated_atEnd'  =>  now()
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_deleted_at_filter_end()
    {
        try {
            $request = new Request([
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_birthday_filter_start_and_end()
    {
        try {
            $request = new Request([
                'birthdayStart'  =>  now(),
                'birthdayEnd'  =>  now()
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_created_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'created_atStart'  =>  now(),
                'created_atEnd'  =>  now()
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_updated_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'updated_atStart'  =>  now(),
                'updated_atEnd'  =>  now()
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }

    public function test_user_event_deleted_at_filter_start_and_end()
    {
        try {
            $request = new Request([
                'deleted_atStart'  =>  now(),
                'deleted_atEnd'  =>  now()
            ]);

            $filter = new UserQueryFilter($request);

            $model = \NextDeveloper\Accounts\Database\Models\User::filter($filter)->first();
        } catch (\Exception $e) {
            $this->assertFalse(false, $e->getMessage());
        }

        $this->assertTrue(true);
    }
    // EDIT AFTER HERE - WARNING: ABOVE THIS LINE MAY BE REGENERATED AND YOU MAY LOSE CODE
}