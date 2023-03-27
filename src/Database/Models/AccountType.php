<?php

namespace NextDeveloper\Account\Database\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use NextDeveloper\Commons\Database\Traits\Filterable;
use NextDeveloper\Account\Database\Observers\AccountTypeObserver;
use NextDeveloper\Commons\Database\Traits\UuidId;

/**
 * Class AccountType.
 *
 * @package NextDeveloper\Account\Database\Models
 */
class AccountType extends Model
{
    use Filterable, UuidId;
    
    protected $table = 'account_types';

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
        'id'          => 'integer',
		'id_ref'      => 'string',
		'name'        => 'string',
		'description' => 'string',
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
        parent::observe(AccountTypeObserver::class);
    }
}
