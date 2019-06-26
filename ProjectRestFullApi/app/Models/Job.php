<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo as BelongsToAlias;

/**
 * Class Job
 * @package App\Models
 */
class Job extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'salary', 'hours', 'quantity', 'status', 'company_id'
    ];

    /**
     * @return BelongsToAlias
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
