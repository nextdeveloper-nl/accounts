<?php

namespace NextDeveloper\Account\Database\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use NextDeveloper\Commons\Database\Traits\Filterable;
use NextDeveloper\Account\Database\Observers\AccountAffiliationRuleObserver;
use NextDeveloper\Commons\Database\Traits\UuidId;

/**
 * Class AccountAffiliationRule.
 *
 * @package NextDeveloper\Account\Database\Models
 */
class AccountAffiliationRule extends Model
{
    use Filterable, UuidId;
    
    protected $table = 'account_affiliation_rule';

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
        'affiliation_rule_id' => 'integer',
		'account_id'          => 'integer',
		'start_at'            => 'datetime',
		'expires_at'          => 'datetime',
		'created_at'          => 'datetime',
		'updated_at'          => 'datetime',
    ];

    /**
     * We are casting data fields.
     * @var array
     */
    protected $dates = [
        'start_at',
		'expires_at',
		'created_at',
		'updated_at',
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
        parent::observe(AccountAffiliationRuleObserver::class);
    }
}
