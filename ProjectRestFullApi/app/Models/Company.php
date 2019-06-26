<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany as HasManyAlias;

/**
 * Class Company
 * @package App\Models
 */
class Company extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'fantasyName', 'email', 'cnpj',
    ];

    /**
     * @return HasManyAlias
     */
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
