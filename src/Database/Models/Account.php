<?php

namespace NextDeveloper\Account\Database\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use NextDeveloper\Commons\Database\Traits\Filterable;
use NextDeveloper\Account\Database\Observers\AccountObserver;
use NextDeveloper\Commons\Database\Traits\UuidId;

/**
 * Class Account.
 *
 * @package NextDeveloper\Account\Database\Models
 */
class Account extends Model
{
    use Filterable, UuidId;
     use SoftDeletes;
    
    protected $table = 'accounts';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     *  Here we have the fulltext fields. We can use these for fulltext search if enabled.
     */
    protected $fullTextFields = [
        'name',
		'description',
		'domain',
		'phone',
		'tax_office',
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
        'id'                   => 'integer',
		'id_ref'               => 'string',
		'name'                 => 'string',
		'domain'               => 'string',
		'phone_code'           => 'string',
		'phone'                => 'string',
		'balance'              => 'double',
		'currency_code'        => 'string',
		'credit'               => 'double',
		'credit_currency_code' => 'string',
		'risk_level'           => 'boolean',
		'is_team'              => 'boolean',
		'is_customer'          => 'boolean',
		'is_supplier'          => 'boolean',
		'is_partner'           => 'boolean',
		'description'          => 'string',
		'iam_dn'               => 'string',
		'owner_id'             => 'integer',
		'account_type_id'      => 'integer',
		'account_channel_id'   => 'integer',
		'representative_id'    => 'integer',
		'iam_service_id'       => 'integer',
		'approved_at'          => 'datetime',
		'suspended_at'         => 'datetime',
		'tax_office'           => 'string',
		'tax_id'               => 'string',
		'created_at'           => 'datetime',
		'updated_at'           => 'datetime',
		'deleted_at'           => 'datetime',
    ];

    /**
     * We are casting data fields.
     * @var array
     */
    protected $dates = [
        'approved_at',
		'suspended_at',
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
        parent::observe(AccountObserver::class);
    }
}
