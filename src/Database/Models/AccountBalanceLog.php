<?php

namespace NextDeveloper\Account\Database\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use NextDeveloper\Commons\Database\Traits\Filterable;
use NextDeveloper\Account\Database\Observers\AccountBalanceLogObserver;
use NextDeveloper\Commons\Database\Traits\UuidId;

/**
 * Class AccountBalanceLog.
 *
 * @package NextDeveloper\Account\Database\Models
 */
class AccountBalanceLog extends Model
{
    use Filterable, UuidId;
     use SoftDeletes;
    
    protected $table = 'account_balance_logs';

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
        'id'                    => 'integer',
		'id_ref'                => 'string',
		'account_id'            => 'integer',
		'invoice_id'            => 'integer',
		'loggable_id'           => 'integer',
		'loggable_type'         => 'string',
		'loggable_created_at'   => 'datetime',
		'reason'                => 'string',
		'amount'                => 'double',
		'balance_before'        => 'double',
		'balance_after'         => 'double',
		'currency_code'         => 'string',
		'is_taken_from_balance' => 'boolean',
		'is_canceled'           => 'boolean',
		'cancelation_reason'    => 'string',
		'created_at'            => 'datetime',
		'updated_at'            => 'datetime',
		'deleted_at'            => 'datetime',
    ];

    /**
     * We are casting data fields.
     * @var array
     */
    protected $dates = [
        'loggable_created_at',
		'created_at',
		'updated_at',
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
        parent::observe(AccountBalanceLogObserver::class);
    }
}
