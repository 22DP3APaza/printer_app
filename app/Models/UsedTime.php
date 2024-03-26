<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsedTime extends Model
{
    use HasFactory;
    protected $table = 'used_times';

    protected $fillable = [
        'UsedDate',
        'UsedTime',
        'EndTime',
        'duration',
        'user_ID'



    ];
}
