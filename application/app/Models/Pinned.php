<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pinned extends Model {

    /**
     * @primaryKey string - primry key column.
     * @dateFormat string - date storage format
     * @guarded string - allow mass assignment except specified
     * @CREATED_AT string - creation date column
     * @UPDATED_AT string - updated date column
     */

    protected $table = 'pinned';
    protected $primaryKey = 'pinned_id';
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $guarded = ['pinned_id'];
    const CREATED_AT = 'pinned_created';
    const UPDATED_AT = 'pinned_updated';

}
