<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class printer extends Model
{
    use HasFactory;

    protected $table = 'printers';

    protected $fillable = [
        'name',
        'model',
        'add_date',
        'manufacturer',
        'ink_type',
        'statuss',
        'ink_ID',
        'UsedTime_ID',
        'Paper_ID',
        'Notes_ID'

    ];
}
