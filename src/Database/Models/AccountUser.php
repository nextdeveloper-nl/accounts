<?php

namespace NextDeveloper\Account\Database\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use NextDeveloper\Commons\Database\Traits\Filterable;
use NextDeveloper\Account\Database\Observers\AccountUserObserver;
use NextDeveloper\Commons\Database\Traits\UuidId;

/**
 * Class AccountUser.
 *
 * @package NextDeveloper\Account\Database\Models
 */
class AccountUser extends Model
{
    use Filterable, UuidId;
    
    protected $table = 'account_user';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     *  Here we have the fulltext fields. We can use these for fulltext search if enabled.
     */
    protected $fullTextFields = [
        
    ];

    /**
     * @var array
     */
    protected $appends = [
        
    ];

    /**
     * We are casting fields to objects so that we can work on them better
     * @var array
     */
    protected $casts = [
        'user_id'    => 'integer',
		'account_id' => 'integer',
    ];

    /**
     * We are casting data fields.
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * @var array
     */
    protected $with = [

    ];

    /**
     * @var int
     */
    protected $perPage = 20;

    /**
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        //  We create and add Observer even if we wont use it.
        parent::observe(AccountUserObserver::class);
    }
}
