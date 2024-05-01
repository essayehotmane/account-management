<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Role
 *
 * @property int id
 * @property string name
 */
class Role extends Model
{
    use HasFactory;

    const ADMIN_ID  = 1;
    const CLIENT_ID = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the users.
     *
     * @return HasMany
     */
    public function role(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
