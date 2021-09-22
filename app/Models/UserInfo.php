<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserInfo extends Model
{
    use HasFactory,LogsActivity;

    protected $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
