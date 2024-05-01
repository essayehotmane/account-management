<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Request
 * 
 * @property int id
 * @property int user_id
 * @property bool email_sent
 * @property timestemp email_sent_at
 */
class Request extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'requests';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_sent' => 'boolean',
    ];
}
