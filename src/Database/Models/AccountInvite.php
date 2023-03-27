<?php

namespace NextDeveloper\Account\Database\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use NextDeveloper\Commons\Database\Traits\Filterable;
use NextDeveloper\Account\Database\Observers\AccountInviteObserver;
use NextDeveloper\Commons\Database\Traits\UuidId;

/**
 * Class AccountInvite.
 *
 * @package NextDeveloper\Account\Database\Models
 */
class AccountInvite extends Model
{
    use Filterable, UuidId;
     use SoftDeletes;
    
    protected $table = 'account_invites';

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
        'id'         => 'integer',
		'user_id'    => 'integer',
		'account_id' => 'integer',
		'code'       => 'string',
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'expires_at' => 'datetime',
		'deleted_at' => 'datetime',
    ];

    /**
     * We are casting data fields.
     * @var array
     */
    protected $dates = [
        'created_at',
		'updated_at',
		'expires_at',
		'deleted_at',
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
        parent::observe(AccountInviteObserver::class);
    }
}
